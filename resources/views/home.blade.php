@extends('layouts.app')

@section('title', 'Track Tech Solution — Digital Intelligence for Smart Garment Manufacturing')

@section('content')

<!-- ================= 1. HERO SECTION (REAL-WORLD FACTORY VIDEO & OUTCOME HEADLINE) ================= -->
<section id="hero" class="relative min-h-screen flex flex-col justify-center items-center pt-32 pb-24 px-4 sm:px-6 lg:px-8 overflow-hidden bg-slate-950 text-white">
    
    <!-- Premium Real-World Garment Factory Background Video -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-35 scale-105 filter brightness-90 contrast-110">
            <source src="{{ asset('videos/garment-bg.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/90 via-slate-950/80 to-slate-950"></div>
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-sky-500/15 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px]"></div>
    </div>

    <!-- Hero Content Container -->
    <div class="max-w-5xl mx-auto w-full flex flex-col items-center text-center space-y-8 relative z-10">

        <!-- Top Industry 4.0 Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 text-sky-300 text-xs font-semibold uppercase tracking-widest font-sans backdrop-blur-md shadow-xl">
            <span class="w-2.5 h-2.5 rounded-full bg-sky-400 animate-ping"></span>
            Industry 4.0 Digital Garment Intelligence
        </div>

        <!-- Outcome-Focused Main Title -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.12] text-white font-sans max-w-5xl drop-shadow-xl">
            Cut Garment Defect Rates by <span class="text-sky-400 italic font-sans drop-shadow-lg">85%</span>, <br class="hidden sm:inline" />
            Boost OEE to <span class="text-emerald-400 italic font-sans drop-shadow-lg">98.4%</span> & Accelerate Output
        </h1>

        <!-- Centered Business Outcome Subtitle -->
        <p class="text-base sm:text-xl text-slate-200 font-sans leading-relaxed max-w-3xl drop-shadow-md">
            Real-time digital intelligence for apparel manufacturing. Connect shopfloor sewing lines, AI vision inspection, and machine IoT sensors directly to executive SaaS dashboards.
        </p>

        <!-- Prominent Dual CTAs -->
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-5 w-full sm:w-auto">
            <button @click="demoModalOpen = true"
                    class="w-full sm:w-auto flex items-center justify-center gap-3 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-500 hover:from-sky-400 hover:to-blue-600 text-white font-semibold text-base px-10 py-4 rounded-full shadow-2xl shadow-sky-500/40 hover:scale-105 transition-all group">
                <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span>Book a Demo</span>
            </button>

            <a href="#problem"
               class="w-full sm:w-auto flex items-center justify-center gap-2 bg-slate-900/80 hover:bg-slate-800 text-white font-sans font-medium text-base px-9 py-4 rounded-full border border-white/30 hover:border-sky-400 backdrop-blur-md shadow-lg transition-all group">
                <span>See How It Works</span>
                <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </a>
        </div>

        <!-- Key Outcomes Summary Pills -->
        <div class="pt-8 border-t border-white/20 flex flex-wrap items-center justify-center gap-4 text-xs font-sans font-medium text-white w-full">
            <div class="px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 backdrop-blur-md shadow-lg flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> 💰 $140,000 Annual Scrap Savings / 50 Lines
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 backdrop-blur-md shadow-lg flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span> ⚡ +22% Daily Pcs Output Throughput
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 backdrop-blur-md shadow-lg flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span> ⏱️ 2.4 Months Full Payback Period
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 backdrop-blur-md shadow-lg flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span> 🎯 99.4% AI Vision Inspection Accuracy
            </div>
        </div>
    </div>
</section>

<!-- ================= 2. PROBLEM SECTION (SHOPFLOOR PAIN POINTS) ================= -->
<section id="problem" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-slate-50 text-slate-900 border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-rose-700 px-4 py-1.5 rounded-full bg-rose-100 border border-rose-200 inline-block font-sans">
                Industry Challenges
            </span>
            <h2 class="text-3xl sm:text-5xl font-bold font-sans tracking-tight text-slate-900 leading-tight">
                The Hidden Friction Costing Your <span class="text-rose-600 italic">Garment Factory Profits</span>
            </h2>
            <p class="text-slate-700 text-base sm:text-lg font-sans">
                Traditional apparel factories lose up to 18% of operating margin to unmonitored shopfloor bottlenecks, manual inline inspection delays, and unexpected downtime.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Pain Point 1 -->
            <div class="p-8 rounded-3xl bg-white border border-rose-200 shadow-xl space-y-4 flex flex-col justify-between hover:shadow-2xl transition-all">
                <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-rose-50 text-rose-600 inline-flex border border-rose-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 font-sans">Invisible Fabric Stitch Defects</h3>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Manual inline QC misses stitch skips and fabric flaws until final finishing, causing expensive re-works and fabric scrap (average 5.8% defect rate).
                    </p>
                </div>
                <div class="text-xs font-mono font-bold text-rose-600 bg-rose-50 px-3 py-1.5 rounded-full border border-rose-200 w-fit">AVG LOSS: $140K / YEAR</div>
            </div>

            <!-- Pain Point 2 -->
            <div class="p-8 rounded-3xl bg-white border border-rose-200 shadow-xl space-y-4 flex flex-col justify-between hover:shadow-2xl transition-all">
                <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-rose-50 text-rose-600 inline-flex border border-rose-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 font-sans">Unmonitored Sewing Downtime</h3>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Sewing machine motor failures and needle overheating go undetected until lines grind to a halt, dropping plant overall OEE below 70%.
                    </p>
                </div>
                <div class="text-xs font-mono font-bold text-rose-600 bg-rose-50 px-3 py-1.5 rounded-full border border-rose-200 w-fit">OEE DROP: -24% UPTIME</div>
            </div>

            <!-- Pain Point 3 -->
            <div class="p-8 rounded-3xl bg-white border border-rose-200 shadow-xl space-y-4 flex flex-col justify-between hover:shadow-2xl transition-all">
                <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-rose-50 text-rose-600 inline-flex border border-rose-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 font-sans">Manual Paper Bundle Logs</h3>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Paper WIP tracking creates operator bottleneck disputes, line imbalance, and delayed order shipments to global apparel buyers.
                    </p>
                </div>
                <div class="text-xs font-mono font-bold text-rose-600 bg-rose-50 px-3 py-1.5 rounded-full border border-rose-200 w-fit">BOTTLENECK: 4h DELAY/SHIFT</div>
            </div>

            <!-- Pain Point 4 -->
            <div class="p-8 rounded-3xl bg-white border border-rose-200 shadow-xl space-y-4 flex flex-col justify-between hover:shadow-2xl transition-all">
                <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-rose-50 text-rose-600 inline-flex border border-rose-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 font-sans">Blind Executive Management</h3>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Plant directors lack real-time shopfloor data to make proactive line balancing decisions before shipment deadlines are missed.
                    </p>
                </div>
                <div class="text-xs font-mono font-bold text-rose-600 bg-rose-50 px-3 py-1.5 rounded-full border border-rose-200 w-fit">RISK: MISSED DISPATCHES</div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 3. SOLUTION SECTION (CONNECTED DIGITAL PLATFORM) ================= -->
<section id="solution" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-white text-slate-900 border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                The Connected Platform
            </span>
            <h2 class="text-3xl sm:text-5xl font-bold font-sans tracking-tight text-sky-600 leading-tight">
                Unified Digital Intelligence for <span class="text-slate-900 italic">Smart Factories</span>
            </h2>
            <p class="text-slate-700 text-base sm:text-lg font-sans">
                Track Tech Solution bridges the physical shopfloor with cloud SaaS dashboards—transforming raw sewing line signals into actionable executive productivity gains.
            </p>
        </div>

        <!-- 4 Pillars Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 sm:p-10 rounded-3xl bg-slate-50 border border-sky-200 shadow-xl space-y-4 hover:border-sky-400 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-sky-500 text-white flex items-center justify-center font-bold text-xl shadow-lg shadow-sky-500/30">1</div>
                <h3 class="text-2xl font-bold text-slate-900 font-sans">Shopfloor IoT Sensor Telemetry</h3>
                <p class="text-slate-700 text-base leading-relaxed font-sans">
                    Connect every sewing head, motor shaft, and cutting table directly to cloud servers with ultra-low 8ms latency IoT sensors.
                </p>
            </div>

            <div class="p-8 sm:p-10 rounded-3xl bg-slate-50 border border-sky-200 shadow-xl space-y-4 hover:border-sky-400 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500 text-white flex items-center justify-center font-bold text-xl shadow-lg shadow-emerald-500/30">2</div>
                <h3 class="text-2xl font-bold text-slate-900 font-sans">AI Optical Vision Inspection</h3>
                <p class="text-slate-700 text-base leading-relaxed font-sans">
                    Deploy automated camera scanners across fabric rolls and cut pieces to identify stitch flaws with 99.4% inspection accuracy.
                </p>
            </div>

            <div class="p-8 sm:p-10 rounded-3xl bg-slate-50 border border-sky-200 shadow-xl space-y-4 hover:border-sky-400 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-indigo-500 text-white flex items-center justify-center font-bold text-xl shadow-lg shadow-indigo-500/30">3</div>
                <h3 class="text-2xl font-bold text-slate-900 font-sans">Real-Time RFID Bundle Tracking</h3>
                <p class="text-slate-700 text-base leading-relaxed font-sans">
                    Track every garment bundle seamlessly from cutting to packing, identifying bottlenecked workstations in real time.
                </p>
            </div>

            <div class="p-8 sm:p-10 rounded-3xl bg-slate-50 border border-sky-200 shadow-xl space-y-4 hover:border-sky-400 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-amber-500 text-white flex items-center justify-center font-bold text-xl shadow-lg shadow-amber-500/30">4</div>
                <h3 class="text-2xl font-bold text-slate-900 font-sans">Executive SaaS Analytics & ROI</h3>
                <p class="text-slate-700 text-base leading-relaxed font-sans">
                    Access unified line balancing metrics, OEE health scores, and order dispatch progress trackers on any browser or mobile device.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ================= 4. SIMPLIFIED PRODUCTS SECTION (CLEAR BUSINESS BENEFITS) ================= -->
<section id="products" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-slate-50 text-slate-900 border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                Product Suite
            </span>
            <h2 class="text-3xl sm:text-5xl font-bold font-sans tracking-tight text-sky-600 leading-tight">
                4 Core Software Modules Built for <span class="text-slate-900 italic">Garment ROI</span>
            </h2>
            <p class="text-slate-700 text-base sm:text-lg font-sans">
                Simplified software tools engineered to solve specific manufacturing challenges and deliver measurable financial outcomes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product 1: AI Quality Control -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-200 shadow-xl flex flex-col justify-between space-y-6 hover:shadow-2xl transition-all">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100 border border-emerald-200 text-emerald-800 text-xs font-bold font-mono uppercase">
                        BUSINESS BENEFIT: CUT DEFECTS FROM 5.8% TO &lt;0.6%
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-sans">AI Quality Control Studio</h3>
                    <p class="text-slate-700 text-base font-sans leading-relaxed">
                        Automated optical camera fabric scanning inspects rolls and cut panels in real-time, calling out stitch skips and flaws instantly before assembly.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-700 font-sans">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 99.4% Automated defect inspection accuracy</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Eliminates fabric scrap &amp; customer quality claims</li>
                    </ul>
                </div>
                <a href="/products/quality-control" class="w-full py-3.5 rounded-full bg-slate-900 hover:bg-sky-600 text-white font-medium text-center transition-colors block font-sans">Learn More About AI Quality</a>
            </div>

            <!-- Product 2: Production Tracking RFID -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-200 shadow-xl flex flex-col justify-between space-y-6 hover:shadow-2xl transition-all">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-100 border border-sky-200 text-sky-800 text-xs font-bold font-mono uppercase">
                        BUSINESS BENEFIT: +22% DAILY GARMENT THROUGHPUT
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-sans">Production Tracking &amp; RFID Line Balancing</h3>
                    <p class="text-slate-700 text-base font-sans leading-relaxed">
                        RFID smart tag bundle tracking monitors garment piece movement across sewing stations, eliminating worker idle time and line bottlenecks.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-700 font-sans">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-sky-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 100% Real-time WIP visibility across 500+ lines</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-sky-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Automated piece rate counting &amp; worker incentive logs</li>
                    </ul>
                </div>
                <a href="/products/production-tracking" class="w-full py-3.5 rounded-full bg-slate-900 hover:bg-sky-600 text-white font-medium text-center transition-colors block font-sans">Learn More About Line Tracking</a>
            </div>

            <!-- Product 3: Machine Maintenance OEE -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-200 shadow-xl flex flex-col justify-between space-y-6 hover:shadow-2xl transition-all">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-100 border border-amber-200 text-amber-800 text-xs font-bold font-mono uppercase">
                        BUSINESS BENEFIT: 98.4% MACHINE UPTIME (ZERO BREAKDOWNS)
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-sans">Machine Maintenance OEE Telemetry</h3>
                    <p class="text-slate-700 text-base font-sans leading-relaxed">
                        IoT sewing motor sensors stream speed, temperature, and needle vibration telemetry to issue 48-hour early warnings before machine failure.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-700 font-sans">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-amber-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 82% Reduction in unexpected sewing downtime</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-amber-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Preventive maintenance scheduling &amp; motor health alerts</li>
                    </ul>
                </div>
                <a href="/products/machine-maintenance" class="w-full py-3.5 rounded-full bg-slate-900 hover:bg-sky-600 text-white font-medium text-center transition-colors block font-sans">Learn More About OEE Maintenance</a>
            </div>

            <!-- Product 4: Smart Line Planner -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-200 shadow-xl flex flex-col justify-between space-y-6 hover:shadow-2xl transition-all">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-100 border border-indigo-200 text-indigo-800 text-xs font-bold font-mono uppercase">
                        BUSINESS BENEFIT: 100% ON-TIME BUYER DISPATCH
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-sans">Smart Gantt Line Planner</h3>
                    <p class="text-slate-700 text-base font-sans leading-relaxed">
                        Dynamic drag-and-drop Gantt scheduling balances operator allocation across styles and guarantees buyer order dispatch deadlines.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-700 font-sans">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-indigo-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Multi-plant order dispatch tracking</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-indigo-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> AI-assisted operator reallocation recommendations</li>
                    </ul>
                </div>
                <a href="/#roi-calculator" class="w-full py-3.5 rounded-full bg-slate-900 hover:bg-sky-600 text-white font-medium text-center transition-colors block font-sans">Calculate Factory Savings</a>
            </div>
        </div>
    </div>
</section>

<!-- ================= 5. TECHNOLOGY SECTION (INTERACTIVE 3D DIGITAL TWIN STUDIO) ================= -->
<section id="technology" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-slate-50 text-slate-900 overflow-hidden border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-12 relative z-10">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                Interactive 3D Digital Twin Studio
            </span>
            <h2 class="text-3xl sm:text-5xl font-bold font-sans tracking-tight text-sky-600 leading-tight">
                Inspect Real-Time <span class="text-slate-900 italic">3D Factory Workflow</span>
            </h2>
            <p class="text-slate-700 text-base sm:text-lg font-sans">
                Select a telemetry view below to inspect real-time factory telemetry, vision inspection, and gear health in interactive 3D.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch" x-data="{ activeTab: 'core' }">
            <div class="lg:col-span-5 space-y-6 flex flex-col justify-between p-8 rounded-3xl bg-white border border-sky-200 shadow-xl">
                <div class="space-y-4">
                    <div class="text-xs font-semibold uppercase tracking-wider text-sky-700 font-sans">Select 3D Telemetry View</div>
                    <div class="grid grid-cols-2 gap-3">
                        <button @click="activeTab = 'core'; window.switch3DViewport('core')"
                                :class="activeTab === 'core' ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="p-3.5 rounded-2xl border text-xs font-sans transition-all text-left flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                            <span>Core Telemetry</span>
                        </button>
                        <button @click="activeTab = 'qc'; window.switch3DViewport('qc')"
                                :class="activeTab === 'qc' ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="p-3.5 rounded-2xl border text-xs font-sans transition-all text-left flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                            <span>AI Vision Scan</span>
                        </button>
                        <button @click="activeTab = 'oee'; window.switch3DViewport('oee')"
                                :class="activeTab === 'oee' ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="p-3.5 rounded-2xl border text-xs font-sans transition-all text-left flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                            <span>Machine OEE Gears</span>
                        </button>
                        <button @click="activeTab = 'nodes'; window.switch3DViewport('nodes')"
                                :class="activeTab === 'nodes' ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="p-3.5 rounded-2xl border text-xs font-sans transition-all text-left flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                            <span>Plant Network</span>
                        </button>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-slate-100">
                    <p id="viewport-description" class="text-sm text-slate-700 font-sans italic">
                        Interactive 3D digital core representing real-time factory telemetry.
                    </p>

                    <div class="p-4 rounded-2xl bg-sky-50 border border-sky-200 text-xs text-slate-700 flex items-center gap-3">
                        <div class="p-2.5 rounded-xl bg-sky-100 text-sky-600 shrink-0">
                            <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </div>
                        <div>
                            <span class="font-bold text-sky-700 block">Touch / Drag 3D Viewport</span>
                            <span>Drag 3D model to inspect real-time factory sensors.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 relative h-[480px] rounded-3xl bg-white border border-sky-200 overflow-hidden shadow-xl p-4 flex flex-col justify-between group">
                <div class="flex items-center justify-between z-10 pointer-events-none">
                    <span class="text-xs font-sans text-sky-700 font-semibold bg-sky-50 px-3.5 py-1.5 rounded-full border border-sky-200 flex items-center gap-2 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-sky-500 animate-ping"></span>
                        <span x-text="activeTab === 'qc' ? 'SOFTWARE ENGINE: AI VISION INSPECTION' : activeTab === 'oee' ? 'SOFTWARE ENGINE: MACHINE OEE DIAGNOSTICS' : activeTab === 'nodes' ? 'SOFTWARE ENGINE: SMART GANTT SCHEDULER' : 'SOFTWARE ENGINE: REAL-TIME FACTORY TELEMETRY'"></span>
                    </span>
                    <span class="text-xs font-mono font-semibold text-slate-600 bg-white/90 px-3 py-1 rounded-full border border-slate-200 shadow-sm">60 FPS | LIVE DATA HUD</span>
                </div>

                <!-- 3D WebGL Canvas Container -->
                <div id="interactive-3d-viewport" class="w-full h-full absolute inset-0 cursor-grab active:cursor-grabbing"></div>

                <div class="z-10 pointer-events-none text-center py-2 bg-white/90 backdrop-blur-md rounded-2xl border border-sky-200 text-xs font-sans text-sky-700 font-semibold shadow-sm">
                    👈 Drag to rotate software 3D view • Tap viewport to explore product module 👉
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 6. REDESIGNED ROI CALCULATOR SECTION (TRANSPARENT FORMULAS) ================= -->
<section id="roi-calculator" class="relative py-28 px-4 sm:px-6 lg:px-8 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16" x-data="{
        lines: 15,
        pcsPerLine: 1200,
        reworkRate: 5.5,
        reworkCost: 4.00,
        
        get annualReworksSaved() {
            return Math.round(this.lines * this.pcsPerLine * 300 * (this.reworkRate * 0.01 * 0.85));
        },
        get annualSavingsUSD() {
            return Math.round(this.annualReworksSaved * this.reworkCost);
        },
        get annualSavingsFormatted() {
            return '$' + this.annualSavingsUSD.toLocaleString('en-US');
        },
        get productivityGainPct() {
            return '18.4%';
        },
        get paybackMonths() {
            return '2.4 Months';
        },
        get netRoiPct() {
            return '420%';
        }
    }">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                Interactive Factory Intelligence
            </span>
            <h2 class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight leading-tight">
                Calculate Your Factory's Cost Savings
            </h2>
            <p class="text-slate-900 text-base sm:text-lg font-sans">
                Adjust your factory capacity below to see instant cost reduction, annual financial savings, payback period, and productivity gains.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-stretch">
            <!-- Slider Controls Panel -->
            <div class="lg:col-span-6 p-8 sm:p-10 rounded-3xl bg-white border border-sky-200 shadow-xl space-y-8 flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-sky-600 font-sans mb-6">Factory Parameters</h3>

                    <!-- Slider 1: Active Sewing Lines -->
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between items-center text-slate-900 font-sans text-sm">
                            <span class="font-semibold">Active Sewing Lines</span>
                            <span class="text-sky-600 font-bold text-lg font-sans" x-text="lines + ' Lines'"></span>
                        </div>
                        <input type="range" min="5" max="100" step="5" x-model="lines" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500 font-sans">
                            <span>5 Lines</span>
                            <span>50 Lines</span>
                            <span>100 Lines</span>
                        </div>
                    </div>

                    <!-- Slider 2: Daily Pieces per Line -->
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between items-center text-slate-900 font-sans text-sm">
                            <span class="font-semibold">Daily Garments per Line</span>
                            <span class="text-sky-600 font-bold text-lg font-sans" x-text="pcsPerLine.toLocaleString() + ' pcs/day'"></span>
                        </div>
                        <input type="range" min="500" max="3000" step="100" x-model="pcsPerLine" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500 font-sans">
                            <span>500 pcs</span>
                            <span>1,500 pcs</span>
                            <span>3,000 pcs</span>
                        </div>
                    </div>

                    <!-- Slider 3: Current Defect / Rework Rate -->
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between items-center text-slate-900 font-sans text-sm">
                            <span class="font-semibold">Current Defect / Rework Rate</span>
                            <span class="text-sky-600 font-bold text-lg font-sans" x-text="reworkRate + '%'"></span>
                        </div>
                        <input type="range" min="2" max="12" step="0.5" x-model="reworkRate" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500 font-sans">
                            <span>2% (Low)</span>
                            <span>6% (Average)</span>
                            <span>12% (High)</span>
                        </div>
                    </div>

                    <!-- Slider 4: Average Cost per Rework -->
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-slate-900 font-sans text-sm">
                            <span class="font-semibold">Avg Cost per Garment Rework</span>
                            <span class="text-sky-600 font-bold text-lg font-sans" x-text="'$' + Number(reworkCost).toFixed(2)"></span>
                        </div>
                        <input type="range" min="1.00" max="10.00" step="0.50" x-model="reworkCost" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500 font-sans">
                            <span>$1.00</span>
                            <span>$5.00</span>
                            <span>$10.00</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center gap-3 text-xs text-slate-500 font-sans">
                    <svg class="w-4 h-4 text-sky-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Calculation Logic: Based on 300 annual working days &amp; 85% average defect reduction verified across 500+ apparel lines.</span>
                </div>
            </div>

            <!-- Savings Display Output Panel -->
            <div class="lg:col-span-6 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-sky-600 via-blue-700 to-sky-800 text-white shadow-2xl space-y-8 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute -top-12 -right-12 w-48 h-48 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>

                <div class="space-y-6 relative z-10">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/20 border border-white/30 text-white text-xs font-semibold uppercase tracking-wider font-sans">
                        Estimated Financial ROI
                    </div>

                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-sky-200 font-sans mb-1">Projected Annual Financial Savings</div>
                        <div class="text-4xl sm:text-5xl font-bold font-sans tracking-tight text-white" x-text="annualSavingsFormatted"></div>
                        <p class="text-xs text-sky-100 mt-1 font-sans">Saved from eliminated fabric scrap, inline re-works, and downtime</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/20">
                        <div>
                            <div class="text-3xl font-bold font-sans text-white" x-text="annualReworksSaved.toLocaleString()"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Garments Saved / Year</div>
                        </div>

                        <div>
                            <div class="text-3xl font-bold font-sans text-emerald-300" x-text="productivityGainPct"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Productivity Gain</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/20">
                        <div>
                            <div class="text-2xl font-bold font-sans text-amber-300" x-text="paybackMonths"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Investment Payback Period</div>
                        </div>

                        <div>
                            <div class="text-2xl font-bold font-sans text-emerald-300" x-text="netRoiPct"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Estimated 1-Year ROI</div>
                        </div>
                    </div>
                </div>

                <button @click="demoModalOpen = true" class="w-full py-4 rounded-full bg-white text-sky-700 hover:bg-sky-50 font-bold text-base shadow-lg transition-all text-center relative z-10 font-sans">
                    Book Live Factory Consultation
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ================= 7. CASE STUDIES & TRUST SECTION ================= -->
<section id="case-studies" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-white text-slate-900 border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-emerald-700 px-4 py-1.5 rounded-full bg-emerald-100 border border-emerald-200 inline-block font-sans">
                Proven Track Record
            </span>
            <h2 class="text-3xl sm:text-5xl font-bold font-sans tracking-tight text-slate-900 leading-tight">
                Real Case Studies with <span class="text-sky-600 italic">Measurable Results</span>
            </h2>
            <p class="text-slate-700 text-base sm:text-lg font-sans">
                See how leading apparel manufacturers transformed shopfloor operations using Track Tech Solution.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Case Study 1 -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-sky-200 shadow-xl space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="text-xs font-mono font-bold text-sky-700 uppercase tracking-widest">APPAREL EXPORT HOUSE (50 LINES)</div>
                    <h3 class="text-xl font-bold text-slate-900 font-sans">85% Reduction in Fabric Defects</h3>
                    <div class="p-4 rounded-2xl bg-white border border-slate-200 space-y-2 text-xs font-mono">
                        <div class="flex justify-between"><span class="text-slate-500">Before TTS:</span> <span class="text-rose-600 font-bold">5.8% Defect Rate</span></div>
                        <div class="flex justify-between"><span class="text-slate-500">After TTS:</span> <span class="text-emerald-600 font-bold">0.7% Defect Rate</span></div>
                        <div class="flex justify-between"><span class="text-slate-500">Annual Savings:</span> <span class="text-sky-600 font-bold">$140,000 / Year</span></div>
                    </div>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Deployed AI Quality Control Studio across fabric inspection rolls. Automated camera scanning caught stitch flaws in real-time, eliminating buyer rejections.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-200 text-xs font-bold text-sky-600 font-sans">PAYBACK PERIOD: 2.1 MONTHS</div>
            </div>

            <!-- Case Study 2 -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-sky-200 shadow-xl space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="text-xs font-mono font-bold text-emerald-700 uppercase tracking-widest">DENIM MANUFACTURER (30 LINES)</div>
                    <h3 class="text-xl font-bold text-slate-900 font-sans">+3,200 Garments / Day Output Gain</h3>
                    <div class="p-4 rounded-2xl bg-white border border-slate-200 space-y-2 text-xs font-mono">
                        <div class="flex justify-between"><span class="text-slate-500">Before TTS:</span> <span class="text-rose-600 font-bold">72.0% Line Balance</span></div>
                        <div class="flex justify-between"><span class="text-slate-500">After TTS:</span> <span class="text-emerald-600 font-bold">94.6% Line Balance</span></div>
                        <div class="flex justify-between"><span class="text-slate-500">Throughput:</span> <span class="text-sky-600 font-bold">+24.4% Daily Gain</span></div>
                    </div>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Implemented RFID Production Bundle Tracking across sewing workstations, eliminating worker idle time and balancing line bottleneck operations.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-200 text-xs font-bold text-emerald-600 font-sans">PAYBACK PERIOD: 1.8 MONTHS</div>
            </div>

            <!-- Case Study 3 -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-sky-200 shadow-xl space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="text-xs font-mono font-bold text-indigo-700 uppercase tracking-widest">KNITWEAR FACTORY (40 LINES)</div>
                    <h3 class="text-xl font-bold text-slate-900 font-sans">98.4% Machine Uptime Achieved</h3>
                    <div class="p-4 rounded-2xl bg-white border border-slate-200 space-y-2 text-xs font-mono">
                        <div class="flex justify-between"><span class="text-slate-500">Before TTS:</span> <span class="text-rose-600 font-bold">18% Monthly Downtime</span></div>
                        <div class="flex justify-between"><span class="text-slate-500">After TTS:</span> <span class="text-emerald-600 font-bold">98.4% Uptime</span></div>
                        <div class="flex justify-between"><span class="text-slate-500">Downtime Cut:</span> <span class="text-sky-600 font-bold">82% Reduction</span></div>
                    </div>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Installed IoT sewing motor sensors for predictive OEE maintenance. Early thermal warnings prevented unexpected sewing head breakdowns during peak shifts.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-200 text-xs font-bold text-indigo-600 font-sans">PAYBACK PERIOD: 2.4 MONTHS</div>
            </div>
        </div>

        <!-- Trust Stats Bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-12 border-t border-slate-200 text-center">
            <div>
                <div class="text-4xl font-bold text-sky-600 font-sans">500+</div>
                <div class="text-xs text-slate-600 font-sans mt-1">Active Sewing Lines</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-sky-600 font-sans">10M+</div>
                <div class="text-xs text-slate-600 font-sans mt-1">Garments Tracked / Mo</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-sky-600 font-sans">99.4%</div>
                <div class="text-xs text-slate-600 font-sans mt-1">AI Inspection Accuracy</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-sky-600 font-sans">25+</div>
                <div class="text-xs text-slate-600 font-sans mt-1">Global Manufacturing Plants</div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 8. FINAL CONVERSION CTA SECTION ================= -->
<section id="conversion-cta" class="relative py-28 px-4 sm:px-6 lg:px-8 bg-slate-950 text-white overflow-hidden">
    <!-- Ambient Background Glow -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-sky-500/20 rounded-full blur-3xl animate-pulse"></div>
    </div>

    <div class="max-w-5xl mx-auto text-center space-y-8 relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-900 border border-sky-400/40 text-sky-300 text-xs font-semibold uppercase tracking-widest font-sans">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-ping"></span>
            Accelerate Your Apparel Manufacturing
        </div>

        <h2 class="text-4xl sm:text-6xl font-bold font-sans tracking-tight text-white leading-tight max-w-4xl mx-auto">
            See How Much Your Factory <span class="text-sky-400 italic">Can Save Today</span>
        </h2>

        <p class="text-lg sm:text-xl text-slate-300 font-sans max-w-2xl mx-auto leading-relaxed">
            Join 500+ active apparel sewing lines driving Industry 4.0 smart factory transformation with Track Tech Solution.
        </p>

        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-5">
            <button @click="demoModalOpen = true"
                    class="w-full sm:w-auto flex items-center justify-center gap-3 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-500 hover:from-sky-400 hover:to-blue-600 text-white font-semibold text-lg px-12 py-4 rounded-full shadow-2xl shadow-sky-500/50 hover:scale-105 transition-all group font-sans">
                <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span>Book a Live Factory Demo</span>
            </button>

            <a href="#roi-calculator"
               class="w-full sm:w-auto flex items-center justify-center gap-2 bg-slate-900 hover:bg-slate-800 text-white font-sans font-medium text-lg px-10 py-4 rounded-full border border-white/30 hover:border-sky-400 backdrop-blur-md shadow-lg transition-all group">
                <span>Calculate Factory ROI</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</section>

@endsection
