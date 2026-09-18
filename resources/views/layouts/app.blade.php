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
            background-color: #0f172a; /* Tailwind slate-900 */
            color: #f8fafc; /* Tailwind slate-50 */
            overflow-x: hidden;
        }
        
        .glass-nav {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .neon-text {
            text-shadow: 0 0 10px rgba(56, 189, 248, 0.7), 0 0 20px rgba(56, 189, 248, 0.5);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col relative selection:bg-sky-500 selection:text-white">

    <!-- Animated Background Elements -->
    <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
        <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-sky-600/20 blur-[120px] animate-pulse"></div>
        <div class="absolute top-[40%] -right-[10%] w-[40%] h-[40%] rounded-full bg-indigo-600/20 blur-[120px]" style="animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite reverse;"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tighter flex items-center gap-2 group">
                        <div class="w-8 h-8 rounded bg-gradient-to-br from-sky-400 to-indigo-500 flex items-center justify-center text-white shadow-[0_0_15px_rgba(56,189,248,0.5)] group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="gradient-text">SEO Auditor</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-slate-300 hover:text-white hover:neon-text transition-all font-medium text-sm">Home</a>
                    <a href="{{ route('auditor.index') }}" class="text-slate-300 hover:text-white hover:neon-text transition-all font-medium text-sm">SEO Auditor</a>
                    <a href="{{ route('about') }}" class="text-slate-300 hover:text-white hover:neon-text transition-all font-medium text-sm">About AI</a>
                    <a href="{{ route('contact') }}" class="text-slate-300 hover:text-white hover:neon-text transition-all font-medium text-sm">Contact</a>
                    
                    <a href="{{ route('auditor.index') }}" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-sky-500 to-indigo-500 text-white font-semibold text-sm shadow-[0_0_15px_rgba(56,189,248,0.4)] hover:shadow-[0_0_25px_rgba(56,189,248,0.6)] hover:-translate-y-0.5 transition-all">
                        Start Audit
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
    <footer class="border-t border-slate-800 bg-slate-900/50 mt-20 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-400 text-sm">&copy; {{ date('Y') }} AI SEO Auditor. Powered by Gemini.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-slate-400 hover:text-sky-400 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </a>
                <a href="#" class="text-slate-400 hover:text-sky-400 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 20) {
                nav.classList.add('shadow-lg', 'bg-slate-900/90');
                nav.classList.remove('bg-slate-900/70');
            } else {
                nav.classList.remove('shadow-lg', 'bg-slate-900/90');
                nav.classList.add('bg-slate-900/70');
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
