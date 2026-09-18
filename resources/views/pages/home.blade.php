@extends('layouts.app')

@section('title', 'AI SEO Auditor - Home')

@section('content')
<div class="relative w-full overflow-hidden">
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <div class="text-center" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8">
                Audit Your Website with <br>
                <span class="gradient-text neon-text">Next-Gen AI</span>
            </h1>
            <p class="mt-4 max-w-2xl text-xl text-slate-300 mx-auto mb-10 leading-relaxed">
                Unlock the true potential of your website. Our Gemini-powered AI auditor crawls your pages in real-time, identifies SEO bottlenecks, and generates actionable PDF reports in seconds.
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('auditor.index') }}" class="px-8 py-4 rounded-full bg-gradient-to-r from-sky-500 to-indigo-600 text-white font-bold text-lg shadow-[0_0_20px_rgba(56,189,248,0.5)] hover:shadow-[0_0_40px_rgba(56,189,248,0.8)] hover:scale-105 transition-all">
                    Start Free Audit
                </a>
                <a href="{{ route('about') }}" class="px-8 py-4 rounded-full bg-slate-800/80 border border-slate-700 text-white font-semibold text-lg hover:bg-slate-700 hover:border-slate-500 transition-all">
                    Learn How It Works
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="p-8 rounded-2xl bg-slate-800/40 border border-slate-700/50 backdrop-blur-sm hover:border-sky-500/50 hover:bg-slate-800/60 transition-all group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 rounded-xl bg-sky-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Real-time Crawling</h3>
                <p class="text-slate-400 leading-relaxed">Our advanced bots scan your website instantly, fetching data without any delay. Watch the progress unfold live.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="p-8 rounded-2xl bg-slate-800/40 border border-slate-700/50 backdrop-blur-sm hover:border-indigo-500/50 hover:bg-slate-800/60 transition-all group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 rounded-xl bg-indigo-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Gemini AI Analysis</h3>
                <p class="text-slate-400 leading-relaxed">Powered by Google Gemini, we don't just show you missing tags. We provide intelligent strategies to rank higher.</p>
            </div>

            <!-- Feature 3 -->
            <div class="p-8 rounded-2xl bg-slate-800/40 border border-slate-700/50 backdrop-blur-sm hover:border-purple-500/50 hover:bg-slate-800/60 transition-all group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-xl bg-purple-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Instant PDF Reports</h3>
                <p class="text-slate-400 leading-relaxed">Download a comprehensive, beautifully formatted PDF report of your audit to share with your team or clients.</p>
            </div>
        </div>
    </div>
</div>
@endsection
