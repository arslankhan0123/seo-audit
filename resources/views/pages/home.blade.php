@extends('layouts.app')

@section('title', 'AI SEO Auditor - Home')

@section('content')
<div class="relative w-full overflow-hidden">
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-24">
        <div class="text-center" data-aos="zoom-in" data-aos-duration="1000">
            <div class="inline-block mb-4 px-4 py-1.5 rounded-full border border-indigo-500/30 bg-indigo-500/10 text-indigo-300 text-sm font-semibold tracking-wide uppercase shadow-[0_0_10px_rgba(99,102,241,0.2)]">
                Powered by Google Gemini AI 1.5
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8">
                Audit Your Website with <br>
                <span class="gradient-text neon-text">Next-Gen Intelligence</span>
            </h1>
            <p class="mt-4 max-w-2xl text-xl text-slate-400 mx-auto mb-10 leading-relaxed">
                Stop guessing what's holding your rankings back. Our AI auditor crawls your pages in real-time, identifies hidden SEO bottlenecks, and generates an actionable, professional PDF roadmap in seconds.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('auditor.index') }}" class="px-8 py-4 rounded-full btn-gradient text-white font-bold text-lg">
                    Start Free Audit Now
                </a>
                <a href="#features" class="px-8 py-4 rounded-full bg-slate-900 border border-slate-700 text-slate-300 font-semibold text-lg hover:bg-slate-800 hover:text-white transition-all">
                    Explore Features
                </a>
            </div>
        </div>
    </div>

    <!-- Stats / Trust Section -->
    <div class="border-y border-white/5 bg-[#08101f]/50 py-12" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-indigo-400 mb-2">99%</div>
                    <div class="text-sm text-slate-500 font-medium uppercase tracking-wider">Accuracy Rate</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-purple-400 mb-2">&lt; 30s</div>
                    <div class="text-sm text-slate-500 font-medium uppercase tracking-wider">Avg. Audit Time</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-sky-400 mb-2">10k+</div>
                    <div class="text-sm text-slate-500 font-medium uppercase tracking-wider">Pages Analyzed</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-indigo-400 mb-2">24/7</div>
                    <div class="text-sm text-slate-500 font-medium uppercase tracking-wider">Real-time Uptime</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-bold mb-4">A Complete Suite of <span class="gradient-text">SEO Tools</span></h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg">Everything you need to dominate search engines, packaged in one lightning-fast AI interface.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="p-8 rounded-2xl bg-[#08101f] border border-white/10 hover:border-indigo-500/50 hover:bg-[#0a1324] transition-all group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 rounded-xl bg-indigo-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Live Edge Crawling</h3>
                <p class="text-slate-400 leading-relaxed text-sm">We don't rely on cached data. Our advanced bots scan your website instantly, fetching real HTML structure without any delay. Watch the progress unfold live on your screen.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="p-8 rounded-2xl bg-[#08101f] border border-white/10 hover:border-purple-500/50 hover:bg-[#0a1324] transition-all group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 rounded-xl bg-purple-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Gemini 1.5 Reasoning</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Traditional tools just show you missing tags. We pass your raw HTML metrics to Google Gemini, prompting it to act as an expert SEO consultant to provide intelligent, human-like ranking strategies.</p>
            </div>

            <!-- Feature 3 -->
            <div class="p-8 rounded-2xl bg-[#08101f] border border-white/10 hover:border-sky-500/50 hover:bg-[#0a1324] transition-all group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-xl bg-sky-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">White-Label PDFs</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Download a comprehensive, beautifully formatted PDF report of your audit instantly. Perfect for sharing with your marketing team, executives, or clients directly.</p>
            </div>
        </div>
    </div>

    <!-- How it Works Step by Step -->
    <div class="py-24 bg-gradient-to-b from-transparent to-[#0a1324]" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">How It Works</h2>
                <p class="text-slate-400 text-lg">Three simple steps to SEO perfection.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                <!-- Connecting Line for Desktop -->
                <div class="hidden md:block absolute top-1/2 left-[15%] right-[15%] h-0.5 bg-gradient-to-r from-indigo-500/50 via-purple-500/50 to-indigo-500/50 -translate-y-1/2 z-0"></div>
                
                <div class="relative z-10 flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-[#050b14] border-2 border-indigo-500 flex items-center justify-center text-xl font-bold text-indigo-400 mb-6 shadow-[0_0_15px_rgba(99,102,241,0.5)]">1</div>
                    <h4 class="text-xl font-bold text-white mb-2">Enter URL</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Simply provide the web address you want to analyze. No signup required for your first audit.</p>
                </div>
                
                <div class="relative z-10 flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-[#050b14] border-2 border-purple-500 flex items-center justify-center text-xl font-bold text-purple-400 mb-6 shadow-[0_0_15px_rgba(168,85,247,0.5)]">2</div>
                    <h4 class="text-xl font-bold text-white mb-2">AI Processing</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Our bots crawl your pages while Gemini AI processes the HTML structure to find critical issues.</p>
                </div>
                
                <div class="relative z-10 flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-[#050b14] border-2 border-sky-500 flex items-center justify-center text-xl font-bold text-sky-400 mb-6 shadow-[0_0_15px_rgba(56,189,248,0.5)]">3</div>
                    <h4 class="text-xl font-bold text-white mb-2">Get Results</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Review the AI-generated roadmap on-screen or download it as a professional PDF report.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
