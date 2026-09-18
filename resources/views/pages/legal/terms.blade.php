@extends('layouts.app')

@section('title', 'AI SEO Auditor - Terms of Service')

@section('content')
<div class="relative w-full overflow-hidden pt-32 pb-24">
    <!-- Background Glows -->
    <div class="absolute top-40 right-10 w-72 h-72 bg-indigo-500/20 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-40 left-10 w-96 h-96 bg-sky-500/20 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white">Terms of <span class="gradient-text neon-text">Service</span></h1>
            <p class="text-slate-400 text-lg">Last updated: <span class="text-indigo-400 font-medium">{{ date('F j, Y') }}</span></p>
        </div>

        <!-- Content Cards -->
        <div class="space-y-8">
            
            <!-- Section 1 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-indigo-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-400 font-bold text-xl">1</div>
                    <h2 class="text-2xl font-bold text-white">Acceptance of Terms</h2>
                </div>
                <p class="text-slate-300 leading-relaxed">
                    By accessing or using the <strong class="text-white">AI SEO Auditor</strong> platform, you agree to be bound by these Terms of Service. If you disagree with any part of the terms, you may not access the service.
                </p>
            </div>

            <!-- Section 2 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-purple-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400 font-bold text-xl">2</div>
                    <h2 class="text-2xl font-bold text-white">Use of Service</h2>
                </div>
                <p class="text-slate-400 mb-4">Our service provides real-time SEO analysis using Google Gemini AI. You agree to use this service only for lawful purposes, and you specifically agree <strong class="text-white">NOT</strong> to:</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-red-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        <span class="text-slate-300">Use our crawler to target websites with malicious intent.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-red-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        <span class="text-slate-300">Execute denial of service (DoS) attacks via rapid polling.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-red-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        <span class="text-slate-300">Violate the target website's robots.txt or terms of service.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 3 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-sky-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 flex items-center justify-center text-sky-400 font-bold text-xl">3</div>
                    <h2 class="text-2xl font-bold text-white">AI-Generated Content</h2>
                </div>
                <div class="bg-amber-500/10 border border-amber-500/20 rounded-xl p-4 flex items-start gap-3 mb-4">
                    <svg class="w-6 h-6 text-amber-400 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm text-amber-200">
                        <strong>Disclaimer:</strong> The SEO recommendations and reports generated by our platform are powered by Artificial Intelligence (Google Gemini). While we strive for high accuracy, the reports are provided "as is" without any guarantees of exact ranking improvements.
                    </p>
                </div>
                <p class="text-slate-300">You are responsible for verifying any critical changes before implementing them on your production environments.</p>
            </div>

            <!-- Section 4 & 5 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-indigo-500/30 transition-colors" data-aos="fade-up">
                    <h2 class="text-xl font-bold text-white mb-4">4. Intellectual Property</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        The Service and its original content, features, and functionality are and will remain the exclusive property of AI SEO Auditor and its licensors. Our branding, logo, and generated PDF formats are protected by copyright, trademark, and other laws.
                    </p>
                </div>
                
                <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-purple-500/30 transition-colors" data-aos="fade-up">
                    <h2 class="text-xl font-bold text-white mb-4">5. Limitation of Liability</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        In no event shall AI SEO Auditor, nor its directors, employees, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages resulting from your access to or use of the Service.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
