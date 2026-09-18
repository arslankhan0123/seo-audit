@extends('layouts.app')

@section('title', 'AI SEO Auditor - Privacy Policy')

@section('content')
<div class="relative w-full overflow-hidden pt-32 pb-24">
    <!-- Background Glows -->
    <div class="absolute top-40 left-10 w-72 h-72 bg-indigo-500/20 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-40 right-10 w-96 h-96 bg-purple-500/20 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white">Privacy <span class="gradient-text neon-text">Policy</span></h1>
            <p class="text-slate-400 text-lg">Last updated: <span class="text-indigo-400 font-medium">{{ date('F j, Y') }}</span></p>
        </div>

        <!-- Content Cards -->
        <div class="space-y-8">
            
            <!-- Intro Card -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-indigo-500/30 transition-colors" data-aos="fade-up">
                <p class="text-slate-300 leading-relaxed text-lg">
                    At <strong class="text-white">AI SEO Auditor</strong>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by our platform and how we use it to provide next-generation SEO insights.
                </p>
            </div>

            <!-- Section 1 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-indigo-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white">1. Information We Collect</h2>
                </div>
                <p class="text-slate-400 mb-4">We collect information you provide directly to us when you use our auditing tool, including:</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-2 shrink-0 shadow-[0_0_8px_rgba(99,102,241,0.8)]"></span>
                        <span class="text-slate-300"><strong>Target URLs:</strong> Websites submitted for SEO analysis and crawling.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-2 shrink-0 shadow-[0_0_8px_rgba(99,102,241,0.8)]"></span>
                        <span class="text-slate-300"><strong>Contact Information:</strong> Emails or names provided when reaching out to support.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-2 shrink-0 shadow-[0_0_8px_rgba(99,102,241,0.8)]"></span>
                        <span class="text-slate-300"><strong>Usage Metrics:</strong> Data related to the speed, performance, and volume of pages processed by our engine.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 2 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-purple-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white">2. How We Use Your Data</h2>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-purple-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-slate-300">To provide, operate, and maintain our website and high-speed crawling services.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-purple-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-slate-300">To improve, personalize, and expand our platform functionality over time.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-purple-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-slate-300">To generate dynamic, downloadable PDF reports based on AI analytics.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 3 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-sky-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 flex items-center justify-center text-sky-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white">3. Data Sharing & AI Partners</h2>
                </div>
                <p class="text-slate-300 leading-relaxed mb-4">
                    In order to provide our intelligent insights, the raw HTML data and metrics of the URLs you submit are securely transmitted to <strong class="text-white">Google Gemini AI</strong> via API for reasoning. 
                </p>
                <div class="bg-indigo-500/10 border border-indigo-500/20 rounded-xl p-4 flex items-start gap-3">
                    <svg class="w-5 h-5 text-indigo-400 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm text-indigo-200">
                        <strong>Security Guarantee:</strong> We do not share any personal identifying information with these third-party AI models. Only the public, technical metrics of the targeted website are transmitted for analysis.
                    </p>
                </div>
            </div>

            <!-- Section 4 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-indigo-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white">4. Contact Us</h2>
                </div>
                <p class="text-slate-300 leading-relaxed">
                    If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us at 
                    <a href="mailto:support@aiseoauditor.com" class="text-indigo-400 font-medium hover:text-indigo-300 hover:underline">support@aiseoauditor.com</a>.
                </p>
            </div>
            
        </div>
    </div>
</div>
@endsection
