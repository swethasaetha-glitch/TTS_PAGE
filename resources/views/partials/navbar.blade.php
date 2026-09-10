<header x-data="{ scrolled: false, productDropdown: false, mobileMenu: false }"
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'bg-white/90 backdrop-blur-md border-b border-sky-100 py-3 shadow-md' : 'bg-transparent py-5'"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        
        <!-- Navbar Logo Icon & Title -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <img src="{{ asset('images/logo-icon.png') }}" alt="Track Tech Solution Logo" class="h-11 sm:h-12 w-auto object-contain group-hover:scale-105 transition-transform drop-shadow-sm">
            <span class="text-2xl font-bold tracking-tight text-slate-800 font-sans">
                Track Tech <span class="text-sky-500">Solution</span>
            </span>
        </a>

        <!-- Desktop Flexbox Navigation -->
        <nav class="hidden md:flex items-center gap-8 font-sans">
            <!-- Products Dropdown -->
            <div class="relative" @mouseenter="productDropdown = true" @mouseleave="productDropdown = false">
                <button class="flex items-center gap-1.5 text-sm font-medium text-slate-700 hover:text-sky-600 transition-colors py-2">
                    <span>Products</span>
                    <svg class="w-4 h-4 transition-transform" :class="productDropdown ? 'rotate-180 text-sky-500' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="productDropdown" x-cloak x-transition
                     class="absolute top-full left-0 w-80 p-3 bg-white/95 backdrop-blur-2xl rounded-2xl border border-sky-100 shadow-xl">
                    <div class="flex flex-col gap-1">
                        <a href="{{ route('products.quality-control') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition-colors group">
                            <div class="p-2 rounded-lg bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 font-sans group-hover:text-sky-600">Quality Control AI</div>
                                <div class="text-xs text-slate-500">Defect prediction & automated inspection</div>
                            </div>
                        </a>

                        <a href="{{ route('products.production-tracking') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition-colors group">
                            <div class="p-2 rounded-lg bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 font-sans group-hover:text-sky-600">Production Tracking</div>
                                <div class="text-xs text-slate-500">Real-time bundle & line tracking</div>
                            </div>
                        </a>

                        <a href="{{ route('products.machine-maintenance') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition-colors group">
                            <div class="p-2 rounded-lg bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 font-sans group-hover:text-sky-600">Machine Maintenance</div>
                                <div class="text-xs text-slate-500">OEE & predictive uptime monitoring</div>
                            </div>
                        </a>

                        <a href="{{ route('products.production-planning') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition-colors group">
                            <div class="p-2 rounded-lg bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 font-sans group-hover:text-sky-600">Production Planning</div>
                                <div class="text-xs text-slate-500">Smart gantt & line scheduling</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('home') }}#impact" class="text-sm font-medium text-slate-700 hover:text-sky-600 transition-colors">
                Impact & Metrics
            </a>

            <a href="{{ route('home') }}#products" class="text-sm font-medium text-slate-700 hover:text-sky-600 transition-colors">
                3D Models
            </a>

            <a href="{{ route('contact') }}" class="text-sm font-medium text-slate-700 hover:text-sky-600 transition-colors">
                Contact Us
            </a>
        </nav>

        <!-- Desktop Sky Blue CTA Pill -->
        <div class="hidden md:flex items-center gap-4">
            <button @click="demoModalOpen = true"
                    class="flex items-center gap-2 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-sm px-6 py-2.5 rounded-full shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <span>Book Demo</span>
            </button>
        </div>

        <!-- Mobile Toggle -->
        <div class="md:hidden">
            <button @click="mobileMenu = !mobileMenu" class="p-2 rounded-lg bg-white border border-slate-200 text-slate-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileMenu" x-cloak class="md:hidden bg-white/95 border-b border-slate-200 px-4 pt-3 pb-6 flex flex-col gap-4 font-sans">
        <a href="{{ route('products.quality-control') }}" class="text-sm font-medium text-slate-700">Quality Control AI</a>
        <a href="{{ route('products.production-tracking') }}" class="text-sm font-medium text-slate-700">Production Tracking</a>
        <a href="{{ route('products.machine-maintenance') }}" class="text-sm font-medium text-slate-700">Machine Maintenance</a>
        <a href="{{ route('products.production-planning') }}" class="text-sm font-medium text-slate-700">Production Planning</a>
        <a href="{{ route('home') }}#products" class="text-sm font-medium text-slate-700">3D Models</a>
        <a href="{{ route('contact') }}" class="text-sm font-medium text-slate-700">Contact Us</a>
        <button @click="mobileMenu = false; demoModalOpen = true" class="w-full bg-sky-500 text-white font-medium text-sm py-3 rounded-full">
            Book Demo
        </button>
    </div>
</header>
