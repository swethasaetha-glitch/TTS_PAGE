<footer class="relative bg-white border-t border-slate-200 text-slate-600 overflow-hidden">
    <!-- Ambient Light Glow -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-sky-100 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            <!-- Brand Info -->
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <img src="{{ asset('images/logo-icon.png') }}" alt="Track Tech Solution Logo" class="h-11 sm:h-12 w-auto object-contain drop-shadow-sm">
                    <span class="text-2xl font-bold tracking-tight text-slate-800 font-sans">
                        Track Tech <span class="text-sky-500">Solution</span>
                    </span>
                </a>
                <p class="text-sm text-slate-600 font-sans leading-relaxed max-w-sm">
                    The missing piece in your production puzzle. Transform garment manufacturing with real-time digital intelligence, AI quality control, and predictive maintenance.
                </p>
                <div class="pt-2 flex items-center gap-4 text-xs font-sans font-medium text-slate-500">
                    <span class="px-3 py-1 rounded-full bg-sky-50 border border-sky-200 text-sky-700">
                        ISO / Industry 4.0 Certified
                    </span>
                </div>
            </div>

            <!-- Solutions -->
            <div>
                <h4 class="text-sm font-semibold text-slate-900 font-sans uppercase tracking-wider mb-4">Solutions</h4>
                <ul class="space-y-2.5 text-sm font-sans">
                    <li><a href="{{ route('products.quality-control') }}" class="hover:text-sky-600 transition-colors">Quality Control AI</a></li>
                    <li><a href="{{ route('products.production-tracking') }}" class="hover:text-sky-600 transition-colors">Production Tracking</a></li>
                    <li><a href="{{ route('products.machine-maintenance') }}" class="hover:text-sky-600 transition-colors">Machine Maintenance (OEE)</a></li>
                    <li><a href="{{ route('products.production-planning') }}" class="hover:text-sky-600 transition-colors">Production Planning</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-sm font-semibold text-slate-900 font-sans uppercase tracking-wider mb-4">Company</h4>
                <ul class="space-y-2.5 text-sm font-sans">
                    <li><a href="{{ route('home') }}#impact" class="hover:text-sky-600 transition-colors">Our Impact</a></li>
                    <li><a href="{{ route('home') }}#interactive-3d" class="hover:text-sky-600 transition-colors">3D Viewport</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-sky-600 transition-colors">Contact Support</a></li>
                    <li><button @click="demoModalOpen = true" class="hover:text-sky-600 transition-colors">Book Live Demo</button></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div>
                <h4 class="text-sm font-semibold text-slate-900 font-sans uppercase tracking-wider mb-4">Get In Touch</h4>
                <ul class="space-y-3 text-sm font-sans">
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-sky-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <a href="tel:+917868925566" class="hover:text-sky-600 transition-colors font-sans font-medium">+91 78689 25566</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-sky-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:info@tracktechsolutions.com" class="hover:text-sky-600 transition-colors font-sans">info@tracktechsolutions.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-4 text-xs font-sans text-slate-500">
            <div>© {{ date('Y') }} Track Tech Solution. All rights reserved.</div>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-slate-800">Privacy Policy</a>
                <a href="#" class="hover:text-slate-800">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
