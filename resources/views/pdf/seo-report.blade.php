<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SEO Audit Report - {{ parse_url($audit->url, PHP_URL_HOST) }}</title>
    <style>
        @page {
            margin: 0px;
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #334155;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            padding-bottom: 60px;
        }
        /* Header Section */
        .header-bg {
            background-color: #1e1b4b; /* Deep Indigo / Purple */
            color: #ffffff;
            padding: 40px 40px;
            border-bottom: 6px solid #6366f1; /* Bright Indigo Accent */
        }
        table.header-table {
            width: 100%;
            border-collapse: collapse;
        }
        table.header-table td {
            vertical-align: middle;
            border: none;
            padding: 0;
        }
        .logo-img {
            width: 80px;
            height: auto;
            border-radius: 12px;
            background-color: #ffffff;
            padding: 6px;
        }
        .header-text {
            text-align: right;
        }
        .header-text h1 {
            margin: 0;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #ffffff;
        }
        .header-text p {
            margin: 5px 0 0 0;
            color: #cbd5e1;
            font-size: 13px;
        }
        
        /* Info Bar Section */
        .info-bar {
            background-color: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 15px 40px;
        }
        table.info-table {
            width: 100%;
            border-collapse: collapse;
        }
        table.info-table td {
            width: 33.33%;
            vertical-align: top;
            border: none;
            padding: 0;
        }
        .info-label {
            color: #64748b;
            text-transform: uppercase;
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 0.5px;
            margin-bottom: 3px;
        }
        .info-value {
            color: #0f172a;
            font-weight: bold;
            font-size: 13px;
        }
        
        /* Markdown Content Styling */
        .content {
            padding: 30px 40px;
            font-size: 13px;
        }
        .content h1 {
            color: #1e1b4b;
            font-size: 22px;
            border-bottom: 2px solid #6366f1;
            padding-bottom: 8px;
            margin-top: 10px;
            margin-bottom: 15px;
        }
        .content h2 {
            color: #312e81;
            font-size: 17px;
            margin-top: 25px;
            margin-bottom: 12px;
            background-color: #f1f5f9;
            padding: 8px 12px;
            border-left: 4px solid #6366f1;
        }
        .content h3 {
            color: #4338ca;
            font-size: 15px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .content p {
            margin-bottom: 12px;
            text-align: justify;
        }
        .content ul, .content ol {
            margin-bottom: 15px;
            padding-left: 20px;
        }
        .content li {
            margin-bottom: 6px;
        }
        .content strong {
            color: #0f172a;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .content table th, .content table td {
            border: 1px solid #cbd5e1;
            padding: 10px;
            text-align: left;
        }
        .content table th {
            background-color: #f1f5f9;
            color: #1e1b4b;
            font-weight: bold;
        }
        
        /* Footer Section */
        .footer {
            position: fixed;
            bottom: 20px;
            left: 40px;
            right: 40px;
            text-align: center;
            font-size: 11px;
            color: #94a3b8;
            border-top: 1px solid #e2e8f0;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    
    <div class="header-bg">
        <table class="header-table">
            <tr>
                <td style="width: 20%;">
                    @if(file_exists(public_path('logo.png')))
                        <img src="{{ public_path('logo.png') }}" alt="Logo" class="logo-img">
                    @else
                        <div style="width: 80px; height: 80px; background-color: #ffffff; border-radius: 12px; display: inline-block;"></div>
                    @endif
                </td>
                <td class="header-text" style="width: 80%;">
                    <h1>SEO Audit Report</h1>
                    <p>Comprehensive AI Technical Analysis</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="info-bar">
        <table class="info-table">
            <tr>
                <td>
                    <div class="info-label">Target URL</div>
                    <div class="info-value">{{ $audit->url }}</div>
                </td>
                <td>
                    <div class="info-label">Date Generated</div>
                    <div class="info-value">{{ $audit->created_at->format('d M Y, h:i A') }}</div>
                </td>
                <td>
                    <div class="info-label">Status</div>
                    <div class="info-value" style="color: #16a34a;">Completed</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="content">
        {!! $report !!}
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} AI SEO Auditor. This is an automatically generated report powered by Gemini AI.
    </div>
</body>
</html>
