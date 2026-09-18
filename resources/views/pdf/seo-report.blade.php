<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SEO Audit Report - {{ parse_url($audit->url, PHP_URL_HOST) }}</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #38bdf8;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            color: #0f172a;
            font-size: 28px;
        }
        .header p {
            color: #64748b;
            margin: 5px 0 0;
        }
        .content {
            font-size: 14px;
        }
        .content h1, .content h2, .content h3 {
            color: #0f172a;
            margin-top: 30px;
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 5px;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #94a3b8;
            border-top: 1px solid #e2e8f0;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>AI SEO Audit Report</h1>
        <p>Target URL: {{ $audit->url }}</p>
        <p>Generated on: {{ $audit->created_at->format('M d, Y h:i A') }}</p>
    </div>

    <div class="content">
        {!! $report !!}
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} AI SEO Auditor. Powered by Gemini.
    </div>
</body>
</html>
