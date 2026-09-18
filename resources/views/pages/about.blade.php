@extends('layouts.app')

@section('title', 'AI SEO Auditor - About')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-24">
    <div class="text-center mb-20" data-aos="fade-down">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Demystifying the <span class="gradient-text neon-text">AI Auditor</span></h1>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed">
            Understanding the cutting-edge technology that powers our real-time SEO engine. We combine high-speed concurrent scraping with the deep reasoning capabilities of Google Gemini.
        </p>
    </div>

    <!-- The Architecture Section -->
    <div class="mb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-6">How The Engine Works</h2>
                <p class="text-slate-400 mb-6 leading-relaxed">
                    Traditional SEO tools rely on outdated databases or slow server-side crawlers that make you wait hours for a report. Our architecture is built differently. We use edge-optimized routines to instantly fetch your live DOM.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-slate-300"><strong class="text-white">DOM Parsing:</strong> Instant extraction of metadata, H1-H6 tags, and image alt attributes using Symfony components.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-slate-300"><strong class="text-white">Link Traversal:</strong> We map your internal linking structure on the fly without bogging down your server.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-slate-300"><strong class="text-white">LLM Contextualization:</strong> The raw data is formatted into a high-density JSON payload for AI ingestion.</span>
                    </li>
                </ul>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-3xl blur-2xl opacity-20"></div>
                <div class="relative bg-[#08101f] border border-slate-800 rounded-3xl p-8 aspect-square flex flex-col justify-center items-center">
                    <svg class="w-32 h-32 text-indigo-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    <div class="text-center font-mono text-sm text-sky-400 space-y-1">
                        <div>> CRAWLER_INITIALIZED</div>
                        <div>> DATA_EXTRACTED</div>
                        <div>> GEMINI_ANALYSIS_COMPLETE</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Timeline -->
    <div class="space-y-12 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-indigo-500 before:to-transparent">
        
        <!-- Timeline Item 1 -->
        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active" data-aos="fade-up">
            <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-[#050b14] bg-indigo-500 text-white shadow-[0_0_15px_rgba(99,102,241,0.5)] shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                1
            </div>
            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-8 rounded-2xl bg-[#08101f] border border-white/5 hover:border-indigo-500/30 transition-colors">
                <h3 class="text-xl font-bold text-white mb-3">Real-Time Traversal</h3>
                <p class="text-slate-400 leading-relaxed text-sm">When you enter a URL, our robust backend instantly sends out a crawler to fetch the page content and extract all relevant links. We scrape the Title, Meta Descriptions, Headers (H1-H6), and check for common SEO issues live, streaming the results to your browser via Alpine.js reactivity.</p>
            </div>
        </div>

        <!-- Timeline Item 2 -->
        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active" data-aos="fade-up">
            <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-[#050b14] bg-purple-500 text-white shadow-[0_0_15px_rgba(168,85,247,0.5)] shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                2
            </div>
            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-8 rounded-2xl bg-[#08101f] border border-white/5 hover:border-purple-500/30 transition-colors">
                <h3 class="text-xl font-bold text-white mb-3">Gemini 1.5 Reasoning</h3>
                <p class="text-slate-400 leading-relaxed text-sm">The extracted data isn't just checked against hardcoded rules. We send the raw SEO metrics to Google's Gemini AI, prompting it to act as an expert SEO consultant. It analyzes the context, understands your niche, and provides human-like feedback on keyword density and tag optimization.</p>
            </div>
        </div>

        <!-- Timeline Item 3 -->
        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active" data-aos="fade-up">
            <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-[#050b14] bg-sky-500 text-white shadow-[0_0_15px_rgba(56,189,248,0.5)] shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                3
            </div>
            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-8 rounded-2xl bg-[#08101f] border border-white/5 hover:border-sky-500/30 transition-colors">
                <h3 class="text-xl font-bold text-white mb-3">PDF Generation Pipeline</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Finally, the AI's response and the raw data are compiled into a beautifully structured HTML view. We use a headless rendering engine to instantly convert this view into a downloadable PDF document that you can keep forever or present to stakeholders.</p>
            </div>
        </div>
    </div>
</div>
@endsection
