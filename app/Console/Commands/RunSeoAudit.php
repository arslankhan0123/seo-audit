<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SeoAudit;
use App\Models\SeoAuditPage;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RunSeoAudit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'audit:run {audit_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs the SEO audit for the given ID';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $auditId = $this->argument('audit_id');
        $audit = SeoAudit::find($auditId);

        if (!$audit) {
            $this->error("Audit not found.");
            return;
        }

        try {
            $client = new Client([
                'verify' => false, 
                'timeout' => 60,
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
                ]
            ]);
            $baseUrl = rtrim(trim($audit->url), '/');
            $host = parse_url($baseUrl, PHP_URL_HOST);

            $this->info("Fetching homepage: " . $baseUrl);
            
            // 1. Fetch homepage to get links
            $response = $client->get($baseUrl);
            $html = (string) $response->getBody();
            
            $crawler = new Crawler($html, $baseUrl);
            $links = $crawler->filter('a')->links();
            
            $urlsToProcess = [$baseUrl];
            foreach ($links as $link) {
                $uri = $link->getUri();
                // Ensure it's internal and we don't process too many to avoid timeout
                if (str_contains($uri, $host) && !in_array($uri, $urlsToProcess) && count($urlsToProcess) < 5) {
                    // Ignore anchors and complex queries for simple audit
                    if (!str_contains($uri, '#')) {
                        $urlsToProcess[] = rtrim($uri, '/');
                    }
                }
            }

            $allPageData = [];

            // 2. Process each URL
            foreach ($urlsToProcess as $url) {
                $this->info("Crawling: " . $url);
                $pageAudit = SeoAuditPage::create([
                    'seo_audit_id' => $audit->id,
                    'page_url' => $url,
                    'status' => 'processing'
                ]);

                try {
                    $pageResponse = $client->get($url);
                    $pageHtml = (string) $pageResponse->getBody();
                    $pageCrawler = new Crawler($pageHtml);
                    
                    $title = $pageCrawler->filter('title')->count() > 0 ? $pageCrawler->filter('title')->text() : null;
                    $metaDesc = $pageCrawler->filter('meta[name="description"]')->count() > 0 ? $pageCrawler->filter('meta[name="description"]')->attr('content') : null;
                    $h1 = $pageCrawler->filter('h1')->count() > 0 ? $pageCrawler->filter('h1')->text() : null;
                    
                    $imagesCount = $pageCrawler->filter('img')->count();
                    $imagesWithoutAlt = $pageCrawler->filter('img:not([alt])')->count();

                    $data = [
                        'title_length' => $title ? strlen($title) : 0,
                        'has_h1' => $h1 ? true : false,
                        'images_missing_alt' => $imagesWithoutAlt,
                    ];

                    $pageAudit->update([
                        'title' => $title,
                        'meta_description' => $metaDesc,
                        'h1' => $h1,
                        'data' => $data,
                        'status' => 'completed'
                    ]);

                    $allPageData[] = [
                        'url' => $url,
                        'title' => $title,
                        'description' => $metaDesc,
                        'h1' => $h1,
                        'issues' => $data
                    ];
                    
                    sleep(1); // Polite delay
                } catch (\Exception $e) {
                    $pageAudit->update(['status' => 'failed', 'data' => ['error' => $e->getMessage()]]);
                }
            }

            // 3. Send to Gemini
            $this->info("Sending to Gemini...");
            $geminiKey = env('GEMINI_API_KEY');
            
            if (!$geminiKey) {
                $audit->update([
                    'status' => 'completed',
                    'final_report' => "## API Key Missing\nPlease add `GEMINI_API_KEY` to your `.env` file to generate AI insights."
                ]);
                return;
            }

            $prompt = "You are an expert Technical SEO Auditor. Analyze the following scraped data from a website and generate a professional, actionable SEO report.\n\n";
            $prompt .= "Website: " . $baseUrl . "\n\n";
            $prompt .= json_encode($allPageData, JSON_PRETTY_PRINT) . "\n\n";
            $prompt .= "Provide the report in Markdown format. Include:\n";
            $prompt .= "1. Executive Summary\n";
            $prompt .= "2. Strengths (What they are doing right)\n";
            $prompt .= "3. Critical Issues & Weaknesses\n";
            $prompt .= "4. Page-by-Page Breakdown\n";
            $prompt .= "5. Actionable Roadmap for Improvement\n";

            $model = 'gemini-2.5-flash';
            $geminiUrl = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key=" . $geminiKey;
            
            $geminiResponse = $client->post($geminiUrl, [
                'headers' => ['Content-Type' => 'application/json'],
                'json' => [
                    'contents' => [
                        ['parts' => [['text' => $prompt]]]
                    ]
                ]
            ]);

            $geminiData = json_decode((string) $geminiResponse->getBody(), true);
            $report = $geminiData['candidates'][0]['content']['parts'][0]['text'] ?? 'Failed to generate report.';

            // 4. Finalize
            $audit->update([
                'status' => 'completed',
                'final_report' => $report
            ]);
            
            $this->info("Audit completed.");

        } catch (\Exception $e) {
            Log::error("SEO Audit Error: " . $e->getMessage());
            $audit->update([
                'status' => 'failed',
                'final_report' => 'An error occurred during crawling: ' . $e->getMessage()
            ]);
        }
    }
}
