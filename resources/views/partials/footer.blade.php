<footer class="relative bg-white border-t border-slate-200 text-slate-600 overflow-hidden font-sans">
    <!-- Ambient Light Glow -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-sky-100 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            <!-- Brand Info -->
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <img src="{{ asset('images/logo-icon.png') }}" alt="Track Tech Solutions Logo" class="h-11 sm:h-12 w-auto object-contain">
                    <span class="text-2xl font-bold tracking-tight text-slate-900 font-sans">
                        Track Tech <span class="text-sky-600">Solutions</span>
                    </span>
                </a>
                <p class="text-xs text-slate-600 font-sans leading-relaxed max-w-sm">
                    Transforming Apparel Manufacturing with Digital Intelligence — From Fabric to Ship. Cut raw material waste by 4.2%, eliminate WIP line bottlenecks, and monitor sewing machines in real time.
                </p>
                <div class="pt-2 flex flex-wrap items-center gap-3 text-xs font-sans font-medium text-slate-600">
                    <span class="px-3 py-1 rounded-full bg-sky-50 border border-sky-200 text-sky-700 flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                        FlexView Ecosystem
                    </span>
                    <span class="px-3 py-1 rounded-full bg-slate-100 border border-slate-200 text-slate-700">
                        Bangalore, India
                    </span>
                </div>
            </div>

            <!-- Solutions Links -->
            <div>
                <h4 class="text-xs font-bold text-slate-900 font-sans uppercase tracking-wider mb-4">Core Modules</h4>
                <ul class="space-y-2.5 text-xs font-sans">
                    <li><a href="{{ route('products.production-planning') }}" class="hover:text-sky-600 transition-colors">Cutting Room Automation</a></li>
                    <li><a href="{{ route('products.production-tracking') }}" class="hover:text-sky-600 transition-colors">Fabric Inventory &amp; Roll QR</a></li>
                    <li><a href="{{ route('products.production-tracking') }}" class="hover:text-sky-600 transition-colors">FlexView Real-Time WIP</a></li>
                    <li><a href="{{ route('products.quality-control') }}" class="hover:text-sky-600 transition-colors">Digital QMS Tablet Audits</a></li>
                    <li><a href="{{ route('products.machine-maintenance') }}" class="hover:text-sky-600 transition-colors">IoT Machine Telemetry (OEE)</a></li>
                </ul>
            </div>

            <!-- Portals & Quick Links -->
            <div>
                <h4 class="text-xs font-bold text-slate-900 font-sans uppercase tracking-wider mb-4">Platforms &amp; ROI</h4>
                <ul class="space-y-2.5 text-xs font-sans">
                    <li><a href="https://tracktechsolutions.flexview.in/" target="_blank" class="text-sky-600 hover:text-sky-700 font-semibold flex items-center gap-1"><span>FlexView Cloud Portal</span> &nearr;</a></li>
                    <li><a href="{{ route('home') }}#roi-calculator" class="hover:text-sky-600 transition-colors">Fabric ROI Calculator</a></li>
                    <li><a href="{{ route('home') }}#case-studies" class="hover:text-sky-600 transition-colors">Customer Case Studies</a></li>
                    <li><a href="{{ route('home') }}#facility-faq" class="hover:text-sky-600 transition-colors">Facility Address &amp; FAQs</a></li>
                    <li><button @click="demoModalOpen = true" class="text-sky-600 hover:text-sky-700 transition-colors font-semibold">Book Factory Floor Audit</button></li>
                </ul>
            </div>

            <!-- Bangalore Facility Address & Helplines -->
            <div>
                <h4 class="text-xs font-bold text-slate-900 font-sans uppercase tracking-wider mb-4">Bangalore HQ &amp; Contact</h4>
                <ul class="space-y-3 text-xs font-sans">
                    <li class="text-slate-700 leading-relaxed text-[11px]">
                        <strong>Track Tech Solutions</strong><br>
                        364, 10/5 Silicon Town, Electronic City Phase 2,<br>
                        Bangalore - 560100, Karnataka, India
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-sky-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:sales@tracktechsolutions.com" class="hover:text-sky-600 transition-colors font-mono">sales@tracktechsolutions.com</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-sky-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span class="font-mono text-[11px] text-slate-800 font-semibold">+91 96506 13666 / +91 97420 60606</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-4 text-xs font-sans text-slate-500">
            <div>© {{ date('Y') }} Track Tech Solutions (TTS). All rights reserved. Flagship Platform: <a href="https://tracktechsolutions.flexview.in/" target="_blank" class="text-sky-600 hover:underline font-semibold">FlexView</a></div>
            <div class="flex items-center gap-6">
                <a href="https://tracktechsolutions.flexview.in/" target="_blank" class="hover:text-slate-800">Client Login Portal</a>
                <a href="#" class="hover:text-slate-800">Privacy Policy</a>
                <a href="#" class="hover:text-slate-800">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
