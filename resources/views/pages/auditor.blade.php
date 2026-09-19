@extends('layouts.app')

@section('title', 'AI SEO Auditor - Audit Tool')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-20" x-data="seoAuditor()">
    
    <!-- Header -->
    <div class="text-center mb-12" data-aos="fade-down">
        <h1 class="text-4xl font-bold mb-4">Start Your <span class="gradient-text neon-text">Audit</span></h1>
        <p class="text-slate-400">Enter your website URL below to begin the real-time AI analysis.</p>
    </div>

    <!-- Input Form -->
    <div class="relative max-w-2xl mx-auto mb-16" data-aos="zoom-in">
        <form @submit.prevent="startAudit" class="relative flex items-center">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
            </div>
            <input x-model="url" type="url" required class="block w-full pl-12 pr-40 py-5 bg-[#050b14] border border-slate-700 rounded-full text-white placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/50 shadow-lg text-lg transition-all" placeholder="https://example.com">
            <button type="submit" :disabled="isProcessing" class="absolute right-2 top-2 bottom-2 px-8 btn-gradient text-white font-bold rounded-full disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-2">
                <span x-show="!isProcessing">Audit Now</span>
                <span x-show="isProcessing">Scanning...</span>
            </button>
        </form>
    </div>

    <!-- Real-time Progress Section -->
    <div x-show="isProcessing || auditComplete" x-cloak class="bg-[#08101f] border border-white/5 rounded-3xl p-8 shadow-2xl" data-aos="fade-up">
        
        <div class="flex items-center justify-between mb-8 pb-6 border-b border-white/5">
            <div>
                <h3 class="text-xl font-bold text-white mb-1" x-text="auditComplete ? 'Audit Complete' : 'Analyzing Website...'"></h3>
                <p class="text-sm text-indigo-400" x-text="statusMessage"></p>
            </div>
            
            <!-- Loader -->
            <div x-show="isProcessing" class="relative w-12 h-12">
                <div class="absolute inset-0 rounded-full border-4 border-slate-800"></div>
                <div class="absolute inset-0 rounded-full border-4 border-indigo-500 border-t-transparent animate-spin"></div>
            </div>

            <!-- Download PDF Button -->
            <div x-show="auditComplete" x-cloak>
                <a :href="'/auditor/download/' + auditId" class="px-6 py-3 rounded-full bg-indigo-500/10 text-indigo-400 font-bold border border-indigo-500/30 hover:bg-indigo-500 hover:text-white transition-colors flex items-center gap-2 shadow-[0_0_15px_rgba(99,102,241,0.2)]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Download PDF Report
                </a>
            </div>
        </div>

            <div x-show="auditFailed" x-cloak>
                <button @click="resetAudit()" class="px-6 py-3 rounded-full bg-rose-500/10 text-rose-400 font-bold border border-rose-500/30 hover:bg-rose-500 hover:text-white transition-colors flex items-center gap-2 shadow-[0_0_15px_rgba(244,63,94,0.2)]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    Try Again
                </button>
            </div>
        </div>

        <!-- Crawled Pages Log -->
        <div class="space-y-3 mb-8 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
            <template x-for="(log, index) in logs" :key="index">
                <div class="flex items-center justify-between p-4 rounded-xl bg-[#050b14] border border-white/5 animate-fade-in transition-all">
                    <div class="flex items-center gap-4 overflow-hidden w-full">
                        <div x-show="log.status === 'success'" class="text-emerald-400 shrink-0 bg-emerald-400/10 p-1.5 rounded-full">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div x-show="log.status === 'processing'" class="text-indigo-400 shrink-0 animate-spin">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        </div>
                        <span class="text-sm font-mono text-slate-300 truncate" x-text="log.url"></span>
                    </div>
                </div>
            </template>
        </div>

        <!-- AI Final Report -->
        <div x-show="finalReport" x-cloak class="mt-8 border-t border-slate-700 pt-8" data-aos="fade-in">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center" :class="auditFailed ? 'bg-rose-500/20 text-rose-400' : 'bg-indigo-500/20 text-indigo-400'">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white" x-text="auditFailed ? 'Analysis Failed' : 'Gemini AI Analysis'"></h3>
            </div>
            <div class="prose prose-invert max-w-none" :class="auditFailed ? 'prose-rose' : 'prose-sky'" x-html="finalReport"></div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<!-- Alpine JS -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    [x-cloak] { display: none !important; }
    .animate-fade-in { animation: fadeIn 0.5s ease-out forwards; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    
    .custom-scrollbar::-webkit-scrollbar { width: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: rgba(15, 23, 42, 0.5); rounded-full; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #334155; border-radius: 9999px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #475569; }
</style>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('seoAuditor', () => ({
            url: '',
            isProcessing: false,
            auditComplete: false,
            auditFailed: false,
            auditId: null,
            statusMessage: '',
            logs: [],
            finalReport: null,
            pollingInterval: null,

            resetAudit() {
                this.isProcessing = false;
                this.auditComplete = false;
                this.auditFailed = false;
                this.auditId = null;
                this.statusMessage = '';
                this.logs = [];
                this.finalReport = null;
                clearInterval(this.pollingInterval);
            },

            async startAudit() {
                if(!this.url) return;
                
                this.resetAudit();
                this.isProcessing = true;
                this.logs = [{url: 'Initializing crawler...', status: 'processing'}];
                this.statusMessage = 'Starting audit process...';

                try {
                    // Send initial request to start job
                    const response = await fetch('/api/audit/start', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ url: this.url })
                    });
                    
                    const data = await response.json();
                    
                    if(data.success) {
                        this.auditId = data.audit_id;
                        this.startPolling();
                    } else {
                        alert(data.message || 'Error starting audit');
                        this.isProcessing = false;
                    }
                } catch(e) {
                    console.error(e);
                    alert('Server error.');
                    this.isProcessing = false;
                }
            },

            startPolling() {
                this.pollingInterval = setInterval(async () => {
                    try {
                        const response = await fetch(`/api/audit/${this.auditId}/status`);
                        const data = await response.json();
                        
                        this.logs = data.logs; // Array of {url, status}
                        this.statusMessage = data.message;
                        
                        if(data.status === 'completed') {
                            clearInterval(this.pollingInterval);
                            this.isProcessing = false;
                            this.auditComplete = true;
                            this.finalReport = data.final_report; 
                        } else if(data.status === 'failed') {
                            clearInterval(this.pollingInterval);
                            this.isProcessing = false;
                            this.auditFailed = true;
                            this.statusMessage = 'Audit failed. The website could not be analyzed.';
                            this.finalReport = data.final_report;
                        }
                    } catch(e) {
                        console.error(e);
                    }
                }, 2000); // Poll every 2 seconds
            }
        }));
    });
</script>
@endpush
