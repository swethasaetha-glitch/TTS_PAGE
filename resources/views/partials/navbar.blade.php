<header x-data="{ productDropdown: false, mobileMenu: false }"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-sky-100 py-3 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        
        <!-- Navbar Logo Icon & Wordmark -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <img src="{{ asset('images/logo-icon.png') }}" alt="Track Tech Solutions Logo" class="h-11 sm:h-12 w-auto object-contain group-hover:scale-105 transition-transform drop-shadow-sm">
            <div class="flex flex-col">
                <span class="text-xl sm:text-2xl font-bold tracking-tight text-slate-900 font-sans leading-none">
                    Track Tech <span class="text-sky-600">Solutions</span>
                </span>
                <span class="text-[10px] font-mono font-semibold text-slate-500 uppercase tracking-wider mt-0.5">TTS &bull; APPAREL IoT</span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center gap-7 font-sans text-sm font-medium">
            <!-- Solutions Dropdown -->
            <div class="relative" @mouseenter="productDropdown = true" @mouseleave="productDropdown = false">
                <a href="{{ route('home') }}#solutions-explorer" class="flex items-center gap-1 text-slate-700 hover:text-sky-600 transition-colors py-2">
                    <span>Solutions</span>
                    <svg class="w-4 h-4 transition-transform" :class="productDropdown ? 'rotate-180 text-sky-500' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>

                <div x-show="productDropdown" x-cloak x-transition
                     class="absolute top-full left-0 w-80 p-3 bg-white/98 backdrop-blur-2xl rounded-2xl border border-sky-100 shadow-2xl">
                    <div class="flex flex-col gap-1">
                        <a href="{{ route('products.quality-control') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition-colors group">
                            <div class="p-2 rounded-lg bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold text-slate-900 font-sans group-hover:text-sky-600">Digital QMS</div>
                                <div class="text-[11px] text-slate-500">Inline tablet audits &amp; defect Pareto</div>
                            </div>
                        </a>

                        <a href="{{ route('products.production-tracking') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition-colors group">
                            <div class="p-2 rounded-lg bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold text-slate-900 font-sans group-hover:text-sky-600">FlexView WIP Tracking</div>
                                <div class="text-[11px] text-slate-500">Real-time RFID bundle &amp; line balancing</div>
                            </div>
                        </a>

                        <a href="{{ route('products.machine-maintenance') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition-colors group">
                            <div class="p-2 rounded-lg bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold text-slate-900 font-sans group-hover:text-sky-600">IoT Machine OEE</div>
                                <div class="text-[11px] text-slate-500">Needle run-time &amp; predictive maintenance</div>
                            </div>
                        </a>

                        <a href="{{ route('products.production-planning') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition-colors group">
                            <div class="p-2 rounded-lg bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold text-slate-900 font-sans group-hover:text-sky-600">Cutting Room Automation</div>
                                <div class="text-[11px] text-slate-500">Cut-order planning &amp; remnant control</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('home') }}#roi-calculator" class="text-slate-700 hover:text-sky-600 transition-colors">
                ROI Calculator
            </a>

            <a href="{{ route('home') }}#case-studies" class="text-slate-700 hover:text-sky-600 transition-colors">
                Case Studies
            </a>

            <a href="{{ route('home') }}#facility-faq" class="text-slate-700 hover:text-sky-600 transition-colors">
                About &amp; Facility
            </a>
        </nav>

        <!-- Desktop Header Buttons -->
        <div class="hidden sm:flex items-center gap-3">
            <button @click="demoModalOpen = true"
                    class="flex items-center gap-2 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-semibold text-xs px-6 py-2.5 rounded-full shadow-md shadow-sky-500/25 hover:scale-105 transition-all">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span>Book Factory Audit</span>
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
        <div class="grid grid-cols-2 gap-3 pt-2">
            <button @click="mobileMenu = false; quoteModalOpen = true" class="w-full bg-white border border-sky-300 text-sky-600 font-medium text-sm py-3 rounded-full">
                Get Quote
            </button>
            <button @click="mobileMenu = false; demoModalOpen = true" class="w-full bg-sky-500 text-white font-medium text-sm py-3 rounded-full">
                Book Demo
            </button>
        </div>
    </div>
</header>
