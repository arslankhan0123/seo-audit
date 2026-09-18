@extends('layouts.app')

@section('title', 'AI SEO Auditor - Cookie Policy')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-24">
    <div class="mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white">Cookie Policy</h1>
        <p class="text-slate-400">Last updated: {{ date('F j, Y') }}</p>
    </div>

    <div class="prose prose-invert prose-indigo max-w-none text-slate-300">
        <p>This Cookie Policy explains what cookies are and how we use them on the AI SEO Auditor platform.</p>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">What Are Cookies?</h2>
        <p>Cookies are small text files that are used to store small pieces of information. They are stored on your device when the website is loaded on your browser. These cookies help us make the website function properly, make it more secure, provide better user experience, and understand how the website performs.</p>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">How We Use Cookies</h2>
        <p>As most of the online services, our website uses first-party and third-party cookies for several purposes:</p>
        <ul>
            <li><strong>Essential Cookies:</strong> Some cookies are essential for you to be able to experience the full functionality of our site (such as CSRF protection during API requests to our crawler).</li>
            <li><strong>Analytics Cookies:</strong> These cookies store information like the number of visitors to the website, which pages of the website have been visited, the source of the visit, etc.</li>
            <li><strong>Performance Cookies:</strong> These are used to understand and analyze the key performance indexes of the website.</li>
        </ul>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">Managing Cookies</h2>
        <p>You can manage your cookies preferences by changing your browser settings to block or delete cookies. Please note that if you disable cookies, some features of our AI platform, including the real-time auditing API, may not function correctly.</p>

        <h2 class="text-2xl font-bold text-white mt-8 mb-4">Contact Us</h2>
        <p>If you have any questions about our Cookie Policy, please contact us at support@aiseoauditor.com.</p>
    </div>
</div>
@endsection
