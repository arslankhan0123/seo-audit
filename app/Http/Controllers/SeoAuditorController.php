<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeoAudit;
use App\Models\SeoAuditPage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class SeoAuditorController extends Controller
{
    public function index()
    {
        return view('pages.auditor');
    }

    public function startAudit(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $url = $request->url;
        // ensure url ends with /
        if(!Str::endsWith($url, '/')) {
            $url .= '/';
        }

        // Create new audit
        $audit = SeoAudit::create([
            'url' => $url,
            'status' => 'processing',
        ]);

        // Launch background command to crawl and analyze
        // This avoids needing a queue worker setup for the user
        $artisanPath = base_path('artisan');
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            pclose(popen("start /B php \"$artisanPath\" audit:run {$audit->id}", "r"));
        } else {
            exec("php \"$artisanPath\" audit:run {$audit->id} > /dev/null 2>&1 &");
        }

        return response()->json([
            'success' => true,
            'audit_id' => $audit->id,
            'message' => 'Audit started in background.'
        ]);
    }

    public function getAuditStatus($id)
    {
        $audit = SeoAudit::findOrFail($id);
        
        $pages = $audit->pages()->orderBy('id', 'desc')->take(20)->get();
        
        $logs = [];
        foreach($pages as $page) {
            $logs[] = [
                'url' => 'Crawled: ' . $page->page_url,
                'status' => $page->status === 'completed' ? 'success' : 'processing'
            ];
        }

        if(count($logs) === 0) {
            $logs[] = ['url' => 'Initializing crawler for ' . $audit->url, 'status' => 'processing'];
        }

        $message = 'Analyzing pages...';
        if($audit->status === 'completed') {
            $message = 'Audit generation complete.';
        } elseif ($audit->status === 'failed') {
            $message = 'Audit failed.';
        }

        // Parse markdown report to HTML for display
        $parsedReport = null;
        if($audit->final_report) {
            $parsedReport = \Illuminate\Support\Str::markdown($audit->final_report);
        }

        return response()->json([
            'status' => $audit->status,
            'message' => $message,
            'logs' => $logs,
            'final_report' => $parsedReport
        ]);
    }

    public function downloadPdf($id)
    {
        $audit = SeoAudit::findOrFail($id);
        
        if($audit->status !== 'completed') {
            abort(404, 'Audit not completed yet.');
        }

        $parsedReport = \Illuminate\Support\Str::markdown($audit->final_report);

        $pdf = Pdf::loadView('pdf.seo-report', [
            'audit' => $audit,
            'report' => $parsedReport
        ]);

        return $pdf->download('seo-audit-report-' . parse_url($audit->url, PHP_URL_HOST) . '.pdf');
    }
}
