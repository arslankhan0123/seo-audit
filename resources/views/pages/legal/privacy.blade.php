@extends('layouts.app')

@section('title', 'AI SEO Auditor - Privacy Policy')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-24">
    <div class="mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white">Privacy Policy</h1>
        <p class="text-slate-400">Last updated: {{ date('F j, Y') }}</p>
    </div>

    <div class="prose prose-invert prose-indigo max-w-none text-slate-300">
        <p>At AI SEO Auditor, accessible from aiseoauditor.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by AI SEO Auditor and how we use it.</p>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">1. Information We Collect</h2>
        <p>We collect information you provide directly to us when you use our auditing tool, including:</p>
        <ul>
            <li>URLs submitted for analysis.</li>
            <li>Contact information (such as email) if you reach out to our support.</li>
            <li>Usage data and metrics related to the pages processed by our AI engine.</li>
        </ul>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">2. How We Use Your Information</h2>
        <p>We use the information we collect in various ways, including to:</p>
        <ul>
            <li>Provide, operate, and maintain our website and AI auditing services.</li>
            <li>Improve, personalize, and expand our platform functionality.</li>
            <li>Send you AI-generated PDF reports when requested.</li>
            <li>Communicate with you for customer service or updates.</li>
        </ul>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">3. Data Sharing with AI Partners</h2>
        <p>In order to provide the intelligent insights, the raw HTML data and metrics of the URLs you submit are securely transmitted to Google Gemini AI for reasoning. We do not share any personal identifying information with these third parties, only the technical metrics of the targeted website.</p>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">4. Log Files</h2>
        <p>AI SEO Auditor follows a standard procedure of using log files. These files log visitors when they visit websites. The information collected includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks.</p>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">5. Contact Us</h2>
        <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us at support@aiseoauditor.com.</p>
    </div>
</div>
@endsection
