<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AI SEO Auditor')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #050b14; /* Deep, professional dark */
            color: #e2e8f0;
            overflow-x: hidden;
        }
        
        .glass-nav {
            background: rgba(5, 11, 20, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .neon-text {
            text-shadow: 0 0 15px rgba(99, 102, 241, 0.5), 0 0 30px rgba(99, 102, 241, 0.3);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #a855f7, #6366f1, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-gradient {
            background: linear-gradient(to right, #6366f1, #a855f7);
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4);
            transition: all 0.3s ease;
        }
        .btn-gradient:hover {
            box-shadow: 0 6px 25px rgba(168, 85, 247, 0.5);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col relative selection:bg-indigo-500 selection:text-white">

    <!-- Animated Background Elements -->
    <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-indigo-600/10 blur-[150px] animate-pulse" style="animation-duration: 6s;"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-purple-600/10 blur-[150px]" style="animation: pulse 8s cubic-bezier(0.4, 0, 0.6, 1) infinite reverse;"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tighter flex items-center gap-3 group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white shadow-[0_0_20px_rgba(99,102,241,0.4)] group-hover:scale-105 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="gradient-text font-extrabold text-xl tracking-wide">SEO Auditor AI</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-slate-300 hover:text-white transition-all font-medium text-sm border-b-2 border-transparent hover:border-indigo-400 pb-1">Home</a>
                    <a href="{{ route('auditor.index') }}" class="text-slate-300 hover:text-white transition-all font-medium text-sm border-b-2 border-transparent hover:border-indigo-400 pb-1">Auditor Tool</a>
                    <a href="{{ route('about') }}" class="text-slate-300 hover:text-white transition-all font-medium text-sm border-b-2 border-transparent hover:border-indigo-400 pb-1">Technology</a>
                    <a href="{{ route('contact') }}" class="text-slate-300 hover:text-white transition-all font-medium text-sm border-b-2 border-transparent hover:border-indigo-400 pb-1">Contact</a>
                    
                    <a href="{{ route('auditor.index') }}" class="px-6 py-2.5 rounded-full btn-gradient text-white font-semibold text-sm">
                        Start Free Audit
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800/50 bg-[#03070d] mt-24">
        <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8">
                <!-- Brand Column -->
                <div class="col-span-1 md:col-span-1">
                    <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tighter flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 rounded bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="gradient-text font-extrabold text-lg">SEO Auditor AI</span>
                    </a>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Next-generation SEO analysis powered by Google Gemini AI. Uncover deep insights and optimize your website in real-time.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Links Column 1 -->
                <div class="col-span-1">
                    <h4 class="text-white font-semibold mb-4 text-lg">Product</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('auditor.index') }}" class="text-slate-400 hover:text-indigo-400 transition-colors">Start Audit</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-indigo-400 transition-colors">How it Works</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">Pricing</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">API Integration</a></li>
                    </ul>
                </div>

                <!-- Links Column 2 -->
                <div class="col-span-1">
                    <h4 class="text-white font-semibold mb-4 text-lg">Resources</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">SEO Guide 2026</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">Blog</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">Case Studies</a></li>
                        <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-indigo-400 transition-colors">Help Center</a></li>
                    </ul>
                </div>

                <!-- Links Column 3 -->
                <div class="col-span-1">
                    <h4 class="text-white font-semibold mb-4 text-lg">Legal</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-800/50 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm">&copy; {{ date('Y') }} AI SEO Auditor. Designed for precision.</p>
                <div class="text-slate-500 text-sm flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Systems Operational
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900,
            once: true,
            offset: 50,
            easing: 'ease-out-cubic',
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 20) {
                nav.classList.add('shadow-lg', 'bg-[#050b14]/90', 'border-slate-800');
                nav.classList.remove('bg-[#050b14]/75', 'border-white/5');
            } else {
                nav.classList.remove('shadow-lg', 'bg-[#050b14]/90', 'border-slate-800');
                nav.classList.add('bg-[#050b14]/75', 'border-white/5');
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
