@extends('layouts.app')

@section('title', 'AI SEO Auditor - Contact')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
        <!-- Contact Info -->
        <div data-aos="fade-right">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Get in <span class="gradient-text neon-text">Touch</span></h1>
            <p class="text-slate-400 text-lg mb-12 leading-relaxed">
                Have a question about our Gemini AI integration? Want to integrate our auditor into your own agency's platform? Our engineering and support teams are here to help.
            </p>
            
            <div class="space-y-8">
                <div class="flex items-start gap-6 p-6 rounded-2xl bg-[#08101f] border border-white/5 hover:border-indigo-500/30 transition-colors">
                    <div class="w-14 h-14 rounded-full bg-indigo-500/10 flex items-center justify-center text-indigo-400 shrink-0">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1">Email Support</h4>
                        <p class="text-slate-400 mb-2 text-sm">Our team typically responds within 2 hours.</p>
                        <a href="mailto:support@aiseoauditor.com" class="text-indigo-400 font-medium hover:text-indigo-300">support@aiseoauditor.com</a>
                    </div>
                </div>

                <div class="flex items-start gap-6 p-6 rounded-2xl bg-[#08101f] border border-white/5 hover:border-purple-500/30 transition-colors">
                    <div class="w-14 h-14 rounded-full bg-purple-500/10 flex items-center justify-center text-purple-400 shrink-0">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1">Enterprise Sales</h4>
                        <p class="text-slate-400 mb-2 text-sm">Looking for high-volume API access?</p>
                        <a href="#" class="text-purple-400 font-medium hover:text-purple-300">Talk to Sales &rarr;</a>
                    </div>
                </div>
                
                <div class="flex items-start gap-6 p-6 rounded-2xl bg-[#08101f] border border-white/5 hover:border-sky-500/30 transition-colors">
                    <div class="w-14 h-14 rounded-full bg-sky-500/10 flex items-center justify-center text-sky-400 shrink-0">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1">Headquarters</h4>
                        <p class="text-slate-400 text-sm">123 AI Boulevard, Tech District<br>San Francisco, CA 94105</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="p-8 md:p-10 rounded-3xl bg-[#08101f] border border-white/5 relative" data-aos="fade-left">
            <div class="absolute -top-4 -right-4 w-24 h-24 bg-indigo-500/20 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-purple-500/20 rounded-full blur-2xl"></div>
            
            <h3 class="text-2xl font-bold text-white mb-8 relative z-10">Send a Message</h3>
            
            <form action="#" class="space-y-6 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-400 mb-2">First Name</label>
                        <input type="text" class="w-full bg-[#050b14] border border-slate-800 rounded-xl px-4 py-3.5 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" placeholder="Jane">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-400 mb-2">Last Name</label>
                        <input type="text" class="w-full bg-[#050b14] border border-slate-800 rounded-xl px-4 py-3.5 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" placeholder="Doe">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-slate-400 mb-2">Work Email</label>
                    <input type="email" class="w-full bg-[#050b14] border border-slate-800 rounded-xl px-4 py-3.5 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" placeholder="jane@company.com">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-slate-400 mb-2">How can we help?</label>
                    <textarea rows="5" class="w-full bg-[#050b14] border border-slate-800 rounded-xl px-4 py-3.5 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" placeholder="Tell us about your project or inquiry..."></textarea>
                </div>
                
                <button type="button" class="w-full py-4 rounded-xl btn-gradient text-white font-bold text-lg">
                    Submit Request
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
