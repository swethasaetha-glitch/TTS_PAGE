<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Track Tech Solution - Digital Intelligence for Garment Manufacturing')</title>
    <meta name="description" content="Track Tech Solution - The missing piece in your production puzzle. AI Quality Control, Real-Time Production Tracking, and Machine Maintenance.">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-icon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN Fallback -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'Roboto', 'sans-serif'],
                        serif: ['Poppins', 'Roboto', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif'],
                        body: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        sky: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Three.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Built Vite Assets -->
    @if(file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        [x-cloak] { display: none !important; }
        body, p, span, a, li, label, input, textarea, select {
            font-family: 'Roboto', 'Poppins', sans-serif !important;
        }
        h1, h2, h3, h4, h5, h6, button, .font-heading, .font-bold {
            font-family: 'Poppins', 'Roboto', sans-serif !important;
        }
        .glass-white {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(14, 165, 233, 0.15);
        }
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 22s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col antialiased" x-data="{ demoModalOpen: false }">

    @include('partials.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.demo-modal')

    <!-- Floating Quick Action Glass Dock -->
    <div class="fixed bottom-6 right-6 z-40 flex items-center gap-3 font-sans">
        <a href="tel:+917868925566" class="p-3.5 rounded-full bg-white text-sky-600 border border-sky-200 shadow-xl hover:scale-110 transition-all group" title="Call Technical Support">
            <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
        </a>

        <button @click="demoModalOpen = true" class="flex items-center gap-2.5 px-5 py-3.5 rounded-full bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 text-white font-semibold text-sm shadow-xl shadow-sky-500/30 hover:scale-105 transition-all group">
            <span class="w-2.5 h-2.5 rounded-full bg-white animate-ping"></span>
            <span>Book Live Demo</span>
        </button>
    </div>

</body>
</html>
