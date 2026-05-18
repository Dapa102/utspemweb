<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Portfolio Personal' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body class="bg-gray-50 text-gray-900 font-['Inter'] antialiased flex flex-col min-h-screen">
        <header class="bg-white shadow">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <div class="flex-shrink-0 font-bold text-2xl text-blue-600">
                    <a href="{{ route('home') }}">MyPorto</a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <a href="{{ route('showcase') }}" class="text-gray-700 hover:text-blue-600 font-medium">Showcase</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                    <a href="/admin" target="_blank" class="text-gray-700 hover:text-blue-600 font-medium">Panel Admin</a>
                </div>
            </nav>
        </header>

        <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 w-full">
            {{ $slot }}
        </main>

        <footer class="bg-gray-800 text-white text-center py-6 mt-10">
            <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
        </footer>
    </body>
</html>
