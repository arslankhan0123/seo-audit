@extends('layouts.app')

@section('title', 'AI SEO Auditor - Contact')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div data-aos="fade-right">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Get in <span class="gradient-text neon-text">Touch</span></h1>
            <p class="text-slate-400 text-lg mb-8">Have a question or want to integrate our AI auditor into your own platform? Drop us a message.</p>
            
            <div class="space-y-6">
                <div class="flex items-center gap-4 text-slate-300">
                    <div class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-sky-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500">Email Us</p>
                        <p class="font-medium">hello@aiseoauditor.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-8 rounded-3xl bg-slate-800/50 border border-slate-700/50 backdrop-blur-md" data-aos="fade-left">
            <form action="#" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Name</label>
                    <input type="text" class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition-colors" placeholder="John Doe">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Email</label>
                    <input type="email" class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition-colors" placeholder="john@example.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Message</label>
                    <textarea rows="4" class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition-colors" placeholder="How can we help?"></textarea>
                </div>
                <button type="button" class="w-full py-4 rounded-xl bg-gradient-to-r from-sky-500 to-indigo-600 text-white font-bold text-lg hover:shadow-[0_0_20px_rgba(56,189,248,0.5)] transition-all">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
