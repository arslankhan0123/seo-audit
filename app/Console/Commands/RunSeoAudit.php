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
    protected $signature = 'audit:run {audit_id}';
    protected $description = 'Runs the SEO audit for the given ID';

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
                'timeout' => 45,
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
                    'Accept-Language' => 'en-US,en;q=0.5',
                ]
            ]);
            $baseUrl = rtrim(trim($audit->url), '/');
            
            // Add http:// if missing entirely
            if (!preg_match("~^(?:f|ht)tps?://~i", $baseUrl)) {
                $baseUrl = "https://" . $baseUrl;
            }

            $host = parse_url($baseUrl, PHP_URL_HOST);

            $this->info("Fetching homepage: " . $baseUrl);
            
            // 1. Fetch homepage robustly
            $html = $this->fetchHtmlRobustly($baseUrl, $client);
            
            if (!$html) {
                // If homepage completely fails, don't crash with an error. Handle gracefully.
                $audit->update([
                    'status' => 'failed',
                    'final_report' => "## 🚨 Website Unreachable\n\nWe were unable to connect to **`{$baseUrl}`**.\n\nThis can happen for a few reasons:\n- The website is currently offline or the domain doesn't exist.\n- The website has a strict firewall (like Cloudflare) that blocks automated crawlers.\n- The server took too long to respond.\n\n**Action:** Please verify the URL and try again."
                ]);
                return;
            }
            
            $crawler = new Crawler($html, $baseUrl);
            $links = $crawler->filter('a')->links();
            
            $urlsToProcess = [$baseUrl];
            foreach ($links as $link) {
                try {
                    $uri = $link->getUri();
                    // Ensure it's internal and we don't process too many to avoid timeout
                    if (str_contains($uri, (string)$host) && !in_array($uri, $urlsToProcess) && count($urlsToProcess) < 5) {
                        // Ignore anchors and complex queries for simple audit
                        if (!str_contains($uri, '#')) {
                            $urlsToProcess[] = rtrim($uri, '/');
                        }
                    }
                } catch (\Exception $e) {
                    continue;
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
                    $pageHtml = $this->fetchHtmlRobustly($url, $client);
                    
                    if (!$pageHtml) {
                        $pageAudit->update(['status' => 'failed', 'data' => ['error' => 'Unreachable']]);
                        continue;
                    }

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

            if (count($allPageData) === 0) {
                 $audit->update([
                    'status' => 'failed',
                    'final_report' => "## 🚨 Analysis Failed\n\nWe could not extract any meaningful data from `{$baseUrl}`. The site might be using JavaScript to render content or blocking our crawler."
                ]);
                return;
            }

            // 3. Send to Gemini
            $this->info("Sending to Gemini...");
            $geminiKey = env('GEMINI_API_KEY');
            
            if (!$geminiKey) {
                $audit->update([
                    'status' => 'failed',
                    'final_report' => "## API Key Missing\nPlease add `GEMINI_API_KEY` to your `.env` file to generate AI insights."
                ]);
                return;
            }

            $prompt = "You are an expert Technical SEO Auditor. Analyze the following scraped data from a website and generate a highly readable, professional SEO report in Markdown format.\n\n";
            $prompt .= "CRITICAL FORMATTING RULES:\n";
            $prompt .= "- Use proper Markdown headers (## for main sections, ### for subsections).\n";
            $prompt .= "- NEVER write long walls of text. Break down everything into easy-to-read bullet points.\n";
            $prompt .= "- Use bold text (**like this**) for key metrics or important terms.\n\n";
            $prompt .= "Website: " . $baseUrl . "\n\n";
            $prompt .= json_encode($allPageData, JSON_PRETTY_PRINT) . "\n\n";
            $prompt .= "Please structure your report exactly with these sections:\n";
            $prompt .= "## 1. Executive Summary\n";
            $prompt .= "(Brief 2-3 sentence overview)\n\n";
            $prompt .= "## 2. Key Strengths\n";
            $prompt .= "(List bullet points of what they are doing right)\n\n";
            $prompt .= "## 3. Critical Issues & Weaknesses\n";
            $prompt .= "(List bullet points of technical errors or missing SEO data)\n\n";
            $prompt .= "## 4. Page-by-Page Breakdown\n";
            $prompt .= "(Use bullet points to highlight issues on specific URLs)\n\n";
            $prompt .= "## 5. Actionable Roadmap\n";
            $prompt .= "(List step-by-step bullet points on how to fix the issues)";

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
            // Graceful fallback instead of raw error output
            $audit->update([
                'status' => 'failed',
                'final_report' => "## 🚨 Unexpected Interruption\n\nThe audit process encountered an unexpected issue while generating the report. Please try again later."
            ]);
        }
    }

    /**
     * A highly robust HTML fetcher that tries multiple methods and fallbacks
     * to guarantee it gets the content or fails gracefully without throwing exceptions.
     */
    private function fetchHtmlRobustly($url, $client)
    {
        $urlsToTry = [$url];
        
        // If DNS fails, sometimes adding or removing 'www.' fixes it
        $parsed = parse_url($url);
        $host = $parsed['host'] ?? '';
        if ($host) {
            if (str_starts_with($host, 'www.')) {
                $urlsToTry[] = str_replace($host, substr($host, 4), $url);
            } else {
                $urlsToTry[] = str_replace($host, 'www.' . $host, $url);
            }
        }

        foreach ($urlsToTry as $targetUrl) {
            // Method 1: Guzzle
            try {
                $response = $client->get($targetUrl);
                return (string) $response->getBody();
            } catch (\Exception $e) {
                // Ignore and try fallback
            }

            // Method 2: Native PHP file_get_contents (bypasses Guzzle cURL completely)
            try {
                $context = stream_context_create([
                    "http" => [
                        "method" => "GET",
                        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36\r\nAccept: text/html\r\n",
                        "timeout" => 30,
                        "ignore_errors" => true
                    ],
                    "ssl" => [
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                    ]
                ]);
                $html = @file_get_contents($targetUrl, false, $context);
                if ($html && strlen($html) > 100) {
                    return $html;
                }
            } catch (\Exception $e) {
                // Ignore
            }

            // Method 3: Native raw cURL (if available)
            if (function_exists('curl_init')) {
                try {
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $targetUrl);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
                    $html = curl_exec($ch);
                    curl_close($ch);
                    if ($html && strlen($html) > 100) {
                        return $html;
                    }
                } catch (\Exception $e) {
                    // Ignore
                }
            }
        }

        return false;
    }
}
