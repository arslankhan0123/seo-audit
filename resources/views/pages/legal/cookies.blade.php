@extends('layouts.app')

@section('title', 'AI SEO Auditor - Cookie Policy')

@section('content')
<div class="relative w-full overflow-hidden pt-32 pb-24">
    <!-- Background Glows -->
    <div class="absolute top-40 left-10 w-72 h-72 bg-indigo-500/20 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-40 right-10 w-96 h-96 bg-sky-500/20 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white">Cookie <span class="gradient-text neon-text">Policy</span></h1>
            <p class="text-slate-400 text-lg">Last updated: <span class="text-indigo-400 font-medium">{{ date('F j, Y') }}</span></p>
        </div>

        <!-- Content Cards -->
        <div class="space-y-8">
            
            <!-- Intro Card -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-indigo-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white">What Are Cookies?</h2>
                </div>
                <p class="text-slate-300 leading-relaxed">
                    Cookies are small text files used to store small pieces of information. They are stored on your device when the website is loaded on your browser. These cookies help us make the website function properly, make it more secure, and provide a better user experience.
                </p>
            </div>

            <!-- Section 2 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-sky-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 flex items-center justify-center text-sky-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white">How We Use Cookies</h2>
                </div>
                <p class="text-slate-400 mb-6">As with most online services, our website uses first-party and third-party cookies for several purposes:</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Essential -->
                    <div class="bg-[#050b14] border border-white/5 rounded-2xl p-6 hover:border-sky-500/50 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-sky-500/10 flex items-center justify-center text-sky-400 mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Essential</h3>
                        <p class="text-slate-400 text-sm">Crucial for full functionality, such as CSRF protection during API requests to our crawler.</p>
                    </div>
                    
                    <!-- Analytics -->
                    <div class="bg-[#050b14] border border-white/5 rounded-2xl p-6 hover:border-purple-500/50 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-purple-500/10 flex items-center justify-center text-purple-400 mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Analytics</h3>
                        <p class="text-slate-400 text-sm">Stores information like visitor counts, referring sources, and pages visited.</p>
                    </div>

                    <!-- Performance -->
                    <div class="bg-[#050b14] border border-white/5 rounded-2xl p-6 hover:border-indigo-500/50 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-indigo-500/10 flex items-center justify-center text-indigo-400 mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Performance</h3>
                        <p class="text-slate-400 text-sm">Used to understand and analyze key performance indexes of the application.</p>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="p-8 rounded-3xl bg-[#08101f] border border-white/5 shadow-xl hover:border-indigo-500/30 transition-colors" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white">Managing Cookies</h2>
                </div>
                <p class="text-slate-300 leading-relaxed mb-4">
                    You can manage your cookies preferences by changing your browser settings to block or delete cookies. 
                </p>
                <div class="bg-amber-500/10 border border-amber-500/20 rounded-xl p-4 flex items-start gap-3">
                    <svg class="w-5 h-5 text-amber-400 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm text-amber-200">
                        <strong>Warning:</strong> Please note that if you disable cookies, some features of our AI platform, including the real-time auditing API, may not function correctly.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
