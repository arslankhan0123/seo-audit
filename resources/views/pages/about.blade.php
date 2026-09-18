@extends('layouts.app')

@section('title', 'AI SEO Auditor - About')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
    <div class="text-center mb-16" data-aos="fade-down">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About the <span class="gradient-text neon-text">AI Auditor</span></h1>
        <p class="text-slate-400 text-lg">Understanding the technology behind the magic.</p>
    </div>

    <div class="space-y-12 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-sky-500 before:to-transparent">
        
        <!-- Timeline Item 1 -->
        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active" data-aos="fade-up">
            <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-slate-900 bg-sky-500 text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                1
            </div>
            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl bg-slate-800/50 border border-slate-700/50 backdrop-blur-sm">
                <h3 class="text-xl font-bold text-white mb-2">Real-Time Crawling</h3>
                <p class="text-slate-400">When you enter a URL, our robust backend instantly sends out a crawler to fetch the page content and extract all relevant links. We scrape the Title, Meta Descriptions, Headers (H1-H6), and check for common SEO issues live.</p>
            </div>
        </div>

        <!-- Timeline Item 2 -->
        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active" data-aos="fade-up">
            <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-slate-900 bg-indigo-500 text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                2
            </div>
            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl bg-slate-800/50 border border-slate-700/50 backdrop-blur-sm">
                <h3 class="text-xl font-bold text-white mb-2">Gemini AI Integration</h3>
                <p class="text-slate-400">The extracted data isn't just checked against hardcoded rules. We send the raw SEO metrics to Google's Gemini AI, prompting it to act as an expert SEO consultant. It analyzes the context and provides human-like feedback.</p>
            </div>
        </div>

        <!-- Timeline Item 3 -->
        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active" data-aos="fade-up">
            <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-slate-900 bg-purple-500 text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                3
            </div>
            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl bg-slate-800/50 border border-slate-700/50 backdrop-blur-sm">
                <h3 class="text-xl font-bold text-white mb-2">PDF Generation</h3>
                <p class="text-slate-400">Finally, the AI's response and the raw data are compiled into a beautifully structured HTML view, which is instantly converted into a downloadable PDF document that you can keep forever.</p>
            </div>
        </div>

    </div>
</div>
@endsection
