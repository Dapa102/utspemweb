<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Portfolio' }}</title>

    <!-- Google Fonts: Inter, Outfit & Space Grotesk -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-outfit { font-family: 'Outfit', sans-serif; }
        .font-space-grotesk { font-family: 'Space Grotesk', sans-serif; }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen selection:bg-blue-200 selection:text-blue-900">

    <!-- Navbar Layout dengan Alpine.js untuk Mobile Menu -->
    <nav x-data="{ mobileMenuOpen: false, scrolled: false }"
         @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
         :class="{'bg-white/90 backdrop-blur-md shadow-sm border-b border-slate-200': scrolled, 'bg-transparent': !scrolled}"
         class="fixed w-full top-0 z-50 transition-all duration-300 pb-1">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" wire:navigate class="font-space-grotesk text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-cyan-600 hover:opacity-80 transition duration-300 gap-2 flex items-center">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zm0 7.5l-10-5v9.5l10 5 10-5v-9.5l-10 5z"/></svg>
                        MyPorto.
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8 items-center font-medium font-outfit text-lg">
                    @php
                        $navItems = [
                            ['label' => 'Home', 'url' => '/', 'isActive' => request()->is('/')],
                            ['label' => 'Showcase', 'url' => '/showcase', 'isActive' => request()->is('showcase*')],
                            ['label' => 'Contact', 'url' => '/contact', 'isActive' => request()->is('contact*')],
                        ];
                    @endphp

                    @foreach($navItems as $item)
                        <a href="{{ $item['url'] }}" wire:navigate
                           class="relative py-2 transition-all duration-300 {{ $item['isActive'] ? 'text-blue-600 font-bold' : 'text-slate-500 hover:text-blue-600 hover:-translate-y-1' }} group">
                            {{ $item['label'] }}
                            <!-- Underline Hover Indicator -->
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform origin-left transition-transform duration-300 {{ $item['isActive'] ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                        </a>
                    @endforeach

                    <div class="pl-8 ml-4 border-l-2 border-slate-200">
                        <a href="/admin" target="_blank" class="px-6 py-2.5 bg-slate-900 text-white rounded-full hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center">
                            Admin
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-600 hover:text-blue-600 focus:outline-none p-2 rounded-lg bg-slate-100">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                        <svg x-cloak x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div x-cloak x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden bg-white border-b border-slate-100 shadow-xl absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-2 text-center font-outfit">
                @foreach($navItems as $item)
                    <a href="{{ $item['url'] }}" wire:navigate @click="mobileMenuOpen = false" class="block px-3 py-3 rounded-xl text-base font-medium {{ $item['isActive'] ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:bg-slate-50' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <div class="mt-4 pt-4 border-t border-slate-100">
                    <a href="/admin" target="_blank" class="block px-3 py-3 rounded-xl text-base font-medium bg-slate-900 text-white hover:bg-slate-800">
                        Login Admin Panel
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-28 flex flex-col relative z-10 w-full">
        <!-- Render komponen Livewire -->
        {{ $slot }}
    </main>

        <!-- Sleek Footer -->
    <footer class="bg-white border-t border-slate-200 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zm0 7.5l-10-5v9.5l10 5 10-5v-9.5l-10 5z"/></svg>
                    <span class="font-space-grotesk font-bold text-slate-800 text-lg">MyPorto.</span>
                </div>

                <p class="text-slate-500 text-sm font-outfit text-center">
                    &copy; {{ date('Y') }} Build with <span class="text-red-500">♥</span> using Laravel & Livewire.
                </p>

                <div class="flex space-x-5 items-center">
                    <span class="text-slate-500 text-sm font-outfit mr-1">Socials:</span>

                    <!-- GitHub Link (Ubah # dengan URL Anda) -->
                    <a href="https://github.com/Dapa102" target="_blank" class="text-slate-400 hover:text-slate-900 transition-colors duration-300 transform hover:-translate-y-1">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>

                    <!-- LinkedIn Link (Ubah # dengan URL Anda) -->
                    <a href="https://linkedin.com/in/Dafa Rafi Nur Wansyah" target="_blank" class="text-slate-400 hover:text-blue-700 transition-colors duration-300 transform hover:-translate-y-1">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" /></svg>
                    </a>

                    <!-- Instagram Link (Ubah # dengan URL Anda) -->
                    <a href="https://instagram.com/dafarafi_n" target="_blank" class="text-slate-400 hover:text-pink-600 transition-colors duration-300 transform hover:-translate-y-1">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
