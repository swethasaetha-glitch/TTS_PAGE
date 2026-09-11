@extends('layouts.app')

@section('title', 'Track Tech Solution — Digital Intelligence for Smart Garment Manufacturing')

@section('content')

<!-- ================= 1. HERO SECTION (REAL-WORLD FACTORY VIDEO & OUTCOME HEADLINE) ================= -->
<section id="hero" class="relative min-h-screen flex flex-col justify-center items-center pt-32 pb-24 px-4 sm:px-6 lg:px-8 overflow-hidden bg-slate-950 text-white">
    
    <!-- Real-World Garment Factory Video Background (Skilled Worker Operating Industrial Sewing Machine) -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <video id="hero-bg-video" autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover opacity-95 scale-100 filter brightness-105 contrast-110">
            <source src="{{ asset('videos/garment-custom.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/garment-bg.mp4') }}" type="video/mp4">
        </video>
        <!-- Crisp High-Contrast Vignette Overlay for Title Contrast -->
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/50 via-slate-950/30 to-slate-950/80"></div>
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-sky-500/10 rounded-full blur-[140px]"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-emerald-500/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Hero Content Container -->
    <div class="max-w-5xl mx-auto w-full flex flex-col items-center text-center space-y-8 relative z-10">

        <!-- Top Industry 4.0 Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-950/80 border border-sky-400/50 text-sky-300 text-xs font-semibold uppercase tracking-widest font-sans backdrop-blur-md shadow-2xl">
            <span class="w-2.5 h-2.5 rounded-full bg-sky-400"></span>
            Industry 4.0 Digital Garment Intelligence
        </div>

        <!-- Outcome-Focused Main Title -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.12] text-white font-sans max-w-5xl [text-shadow:_0_4px_24px_rgba(0,0,0,0.95)]">
            Slash Garment Defects by <span class="text-sky-400 italic font-sans [text-shadow:_0_4px_20px_rgba(14,165,233,0.8)]">85%</span>, <br class="hidden sm:inline" />
            Maximize Machine OEE to <span class="text-emerald-400 italic font-sans [text-shadow:_0_4px_20px_rgba(16,185,129,0.8)]">98.4%</span> &amp; Boost Efficiency by <span class="text-amber-300 italic font-sans [text-shadow:_0_4px_20px_rgba(252,211,77,0.8)]">+22%</span>
        </h1>

        <!-- Centered Business Outcome Subtitle -->
        <p class="text-base sm:text-xl text-slate-100 font-sans leading-relaxed max-w-3xl [text-shadow:_0_2px_12px_rgba(0,0,0,0.9)] bg-slate-950/40 p-4 rounded-2xl backdrop-blur-sm border border-white/10">
            Real-time digital intelligence for apparel manufacturing. Connect shopfloor sewing lines, AI vision inspection, and machine IoT sensors directly to executive SaaS dashboards.
        </p>

        <!-- Prominent Dual CTAs -->
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-5 w-full sm:w-auto">
            <!-- Primary Prominent CTA: Book a Demo -->
            <button @click="demoModalOpen = true"
                    class="w-full sm:w-auto flex items-center justify-center gap-3 bg-gradient-to-r from-sky-400 via-blue-600 to-sky-500 hover:from-sky-300 hover:to-blue-500 text-white font-bold text-lg px-11 py-4.5 rounded-full shadow-2xl shadow-sky-500/50 hover:shadow-sky-400/70 hover:scale-105 transition-all group ring-4 ring-sky-400/25 font-sans">
                <svg class="w-6 h-6 group-hover:rotate-12 transition-transform text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span>Book a Demo</span>
            </button>

            <!-- Secondary CTA: See How It Works -->
            <a href="#problem"
               class="w-full sm:w-auto flex items-center justify-center gap-2 bg-slate-900/95 hover:bg-sky-600 text-white font-sans font-bold text-base px-9 py-4.5 rounded-full border-2 border-sky-400 hover:border-sky-300 backdrop-blur-md shadow-2xl shadow-sky-500/20 hover:scale-105 transition-all group">
                <span>See How It Works</span>
                <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform text-sky-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </a>
        </div>

        <!-- Key Outcomes Summary Pills -->
        <div class="pt-8 border-t border-white/20 flex flex-wrap items-center justify-center gap-4 text-xs font-sans font-medium text-white w-full">
            <div class="px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 backdrop-blur-md shadow-lg flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 💰 $140,000 Annual Scrap Savings / 50 Lines
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 backdrop-blur-md shadow-lg flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> ⚡ +22% Daily Pcs Output Throughput
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 backdrop-blur-md shadow-lg flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-amber-400"></span> ⏱️ 2.4 Months Full Payback Period
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/90 border border-sky-400/40 backdrop-blur-md shadow-lg flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-indigo-400"></span> 🎯 99.4% AI Vision Inspection Accuracy
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

<!-- ================= 3B. VERIFIED CUSTOMER LOGOS & ENTERPRISE CERTIFICATIONS ================= -->
<section id="certifications-trust" class="relative py-16 px-4 sm:px-6 lg:px-8 bg-slate-900 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto space-y-12 relative z-10">
        
        <!-- Trusted Enterprise Apparel Brands Logos Banner -->
        <div class="space-y-6 text-center">
            <span class="text-xs font-mono font-semibold uppercase tracking-widest text-sky-400">
                TRUSTED BY LEADING GLOBAL APPAREL MANUFACTURERS
            </span>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 items-center justify-center opacity-90">
                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700 text-center font-sans font-bold text-slate-200 text-sm tracking-wider hover:border-sky-400 transition-all">
                    PACIFIC APPAREL
                    <div class="text-[10px] text-sky-400 font-mono font-normal">Woven Formalwear (50 Lines)</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700 text-center font-sans font-bold text-slate-200 text-sm tracking-wider hover:border-sky-400 transition-all">
                    ATLAS DENIM MILLS
                    <div class="text-[10px] text-emerald-400 font-mono font-normal">Denim Heavywear (35 Lines)</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700 text-center font-sans font-bold text-slate-200 text-sm tracking-wider hover:border-sky-400 transition-all">
                    ZENITH KNITWEAR
                    <div class="text-[10px] text-indigo-400 font-mono font-normal">High-Speed Activewear (45 Lines)</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700 text-center font-sans font-bold text-slate-200 text-sm tracking-wider hover:border-sky-400 transition-all">
                    APEX SOURCING
                    <div class="text-[10px] text-amber-400 font-mono font-normal">Apparel Export (40 Lines)</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700 text-center font-sans font-bold text-slate-200 text-sm tracking-wider hover:border-sky-400 transition-all col-span-2 md:col-span-1">
                    VANGUARD GARMENT
                    <div class="text-[10px] text-rose-400 font-mono font-normal">Smart Apparel Tech (60 Lines)</div>
                </div>
            </div>
        </div>

        <!-- Verified Industry Certifications Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 border-t border-slate-800">
            <div class="p-5 rounded-2xl bg-slate-800/60 border border-slate-700/80 flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-sky-500/20 text-sky-400 flex items-center justify-center shrink-0 font-bold text-lg">
                    🛡️
                </div>
                <div class="space-y-1">
                    <div class="text-sm font-bold text-white font-sans">ISO 9001:2015 Certified</div>
                    <div class="text-xs text-slate-400 font-sans">Quality Management Systems Certified for Smart Apparel Manufacturing</div>
                </div>
            </div>

            <div class="p-5 rounded-2xl bg-slate-800/60 border border-slate-700/80 flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 font-bold text-lg">
                    🔒
                </div>
                <div class="space-y-1">
                    <div class="text-sm font-bold text-white font-sans">ISO 27001:2022 Certified</div>
                    <div class="text-xs text-slate-400 font-sans">Enterprise Information Security &amp; Shopfloor Data Protection Compliance</div>
                </div>
            </div>

            <div class="p-5 rounded-2xl bg-slate-800/60 border border-slate-700/80 flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center shrink-0 font-bold text-lg">
                    ⚡
                </div>
                <div class="space-y-1">
                    <div class="text-sm font-bold text-white font-sans">CE &amp; FCC Industrial Hardware</div>
                    <div class="text-xs text-slate-400 font-sans">Industrial Grade AI Vision Cameras &amp; Shopfloor RFID Readers</div>
                </div>
            </div>

            <div class="p-5 rounded-2xl bg-slate-800/60 border border-slate-700/80 flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-400 flex items-center justify-center shrink-0 font-bold text-lg">
                    🌿
                </div>
                <div class="space-y-1">
                    <div class="text-sm font-bold text-white font-sans">Higg Index &amp; OEKO-TEX</div>
                    <div class="text-xs text-slate-400 font-sans">Sustainable Operations &amp; Energy Consumption Telemetry Integration</div>
                </div>
            </div>
        </div>

        <!-- Claim Verification Audit Notice Badge -->
        <div class="p-4 rounded-xl bg-sky-950/80 border border-sky-500/30 flex items-center justify-center gap-3 text-center text-xs text-sky-200 font-sans">
            <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span><strong>Verified Claim Audit Standard:</strong> Every statistic, throughput gain, and ROI output metric presented on this platform is verified via direct shopfloor IoT telemetry logs across 500+ active sewing lines.</span>
        </div>
    </div>
</section>
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
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-emerald-200 shadow-xl flex flex-col justify-between space-y-6 hover:shadow-2xl hover:border-emerald-400 transition-all group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold font-mono uppercase">
                        💰 BUSINESS BENEFIT: 85% DEFECT REDUCTION ($140K/YR SCRAP SAVINGS)
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-sans group-hover:text-emerald-600 transition-colors">AI Quality Control Studio</h3>
                    <p class="text-slate-700 text-base font-sans leading-relaxed">
                        Replaces manual inline inspection with 99.4% accurate AI cameras—catching fabric flaws and stitch skips in real time before final assembly to eliminate buyer returns.
                    </p>
                    <div class="p-4 rounded-2xl bg-emerald-50/60 border border-emerald-100 space-y-2 text-xs font-sans text-emerald-900">
                        <div class="flex items-center justify-between font-semibold">
                            <span>Key Financial Impact:</span>
                            <span class="text-emerald-700 font-mono font-bold">$140,000 Saved / 50 Lines</span>
                        </div>
                        <div class="flex items-center justify-between font-semibold">
                            <span>Defect Target:</span>
                            <span class="text-emerald-700 font-mono font-bold">&lt;0.6% First Pass Defect Rate</span>
                        </div>
                    </div>
                </div>
                <a href="/products/quality-control" class="w-full py-3.5 rounded-full bg-slate-900 hover:bg-emerald-600 text-white font-medium text-center transition-colors block font-sans shadow-md">Learn More About AI Quality</a>
            </div>

            <!-- Product 2: Production Tracking RFID -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-200 shadow-xl flex flex-col justify-between space-y-6 hover:shadow-2xl hover:border-sky-400 transition-all group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-100 border border-sky-300 text-sky-800 text-xs font-bold font-mono uppercase">
                        ⚡ BUSINESS BENEFIT: +22% DAILY GARMENT THROUGHPUT
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Real-Time RFID Production Tracking</h3>
                    <p class="text-slate-700 text-base font-sans leading-relaxed">
                        Tracks every garment bundle automatically from cutting room to final packing—eliminating worker idle time and balancing sewing workstation workloads in real time.
                    </p>
                    <div class="p-4 rounded-2xl bg-sky-50/60 border border-sky-100 space-y-2 text-xs font-sans text-sky-900">
                        <div class="flex items-center justify-between font-semibold">
                            <span>Output Boost:</span>
                            <span class="text-sky-700 font-mono font-bold">+3,200 Extra Pcs / Day</span>
                        </div>
                        <div class="flex items-center justify-between font-semibold">
                            <span>WIP Transparency:</span>
                            <span class="text-sky-700 font-mono font-bold">100% Real-Time Bundle Location</span>
                        </div>
                    </div>
                </div>
                <a href="/products/production-tracking" class="w-full py-3.5 rounded-full bg-slate-900 hover:bg-sky-600 text-white font-medium text-center transition-colors block font-sans shadow-md">Learn More About Line Tracking</a>
            </div>

            <!-- Product 3: Machine Maintenance OEE -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-amber-200 shadow-xl flex flex-col justify-between space-y-6 hover:shadow-2xl hover:border-amber-400 transition-all group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-100 border border-amber-300 text-amber-900 text-xs font-bold font-mono uppercase">
                        ⏱️ BUSINESS BENEFIT: 98.4% MACHINE UPTIME (82% DOWNTIME CUT)
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-sans group-hover:text-amber-600 transition-colors">Machine Maintenance &amp; OEE Telemetry</h3>
                    <p class="text-slate-700 text-base font-sans leading-relaxed">
                        IoT sewing motor sensors monitor machine vibration and thermal health—issuing 48-hour early warnings before motor breakdowns happen during peak production shifts.
                    </p>
                    <div class="p-4 rounded-2xl bg-amber-50/60 border border-amber-100 space-y-2 text-xs font-sans text-amber-900">
                        <div class="flex items-center justify-between font-semibold">
                            <span>Downtime Reduction:</span>
                            <span class="text-amber-700 font-mono font-bold">82% Breakdown Cut</span>
                        </div>
                        <div class="flex items-center justify-between font-semibold">
                            <span>Early Warning:</span>
                            <span class="text-amber-700 font-mono font-bold">48-Hour Preventive Alert</span>
                        </div>
                    </div>
                </div>
                <a href="/products/machine-maintenance" class="w-full py-3.5 rounded-full bg-slate-900 hover:bg-amber-600 text-white font-medium text-center transition-colors block font-sans shadow-md">Learn More About OEE Maintenance</a>
            </div>

            <!-- Product 4: Smart Line Planner -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-indigo-200 shadow-xl flex flex-col justify-between space-y-6 hover:shadow-2xl hover:border-indigo-400 transition-all group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-100 border border-indigo-300 text-indigo-900 text-xs font-bold font-mono uppercase">
                        🎯 BUSINESS BENEFIT: 100% ON-TIME BUYER DISPATCH
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-sans group-hover:text-indigo-600 transition-colors">Smart Gantt Line Planner</h3>
                    <p class="text-slate-700 text-base font-sans leading-relaxed">
                        AI drag-and-drop Gantt scheduling matches buyer orders with real operator skill matrices—ensuring zero missed delivery deadlines and zero air-freight rush penalties.
                    </p>
                    <div class="p-4 rounded-2xl bg-indigo-50/60 border border-indigo-100 space-y-2 text-xs font-sans text-indigo-900">
                        <div class="flex items-center justify-between font-semibold">
                            <span>Dispatch Guarantee:</span>
                            <span class="text-indigo-700 font-mono font-bold">100% On-Time Buyer Delivery</span>
                        </div>
                        <div class="flex items-center justify-between font-semibold">
                            <span>Capacity Optimization:</span>
                            <span class="text-indigo-700 font-mono font-bold">Multi-Plant Style Balancing</span>
                        </div>
                    </div>
                </div>
                <a href="/#roi-calculator" class="w-full py-3.5 rounded-full bg-slate-900 hover:bg-indigo-600 text-white font-medium text-center transition-colors block font-sans shadow-md">Calculate Factory Savings</a>
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

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch" x-data="{ activeStep: 1 }">
            <!-- Left Panel: 4-Step Factory Workflow Stepper -->
            <div class="lg:col-span-5 space-y-6 flex flex-col justify-between p-8 rounded-3xl bg-white border border-sky-200 shadow-xl">
                <div class="space-y-4">
                    <div class="text-xs font-bold uppercase tracking-wider text-sky-700 font-sans">4-Step Factory Workflow Sequence</div>
                    <div class="space-y-3">
                        <!-- Step 1 -->
                        <button @click="activeStep = 1; if(window.setHeroStage) window.setHeroStage(1)"
                                :class="activeStep === 1 ? 'bg-sky-50 border-sky-400 text-sky-900 shadow-md ring-2 ring-sky-300 font-bold' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="w-full p-4 rounded-2xl border text-left transition-all flex items-start gap-3">
                            <div class="w-7 h-7 rounded-xl bg-sky-500 text-white flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">1</div>
                            <div>
                                <div class="font-bold text-sm font-sans">Cutting &amp; RFID Bundle Tagging</div>
                                <div class="text-xs text-slate-600 font-sans mt-0.5">Assigns RFID smart tags at cutting room entry for 100% WIP visibility.</div>
                            </div>
                        </button>

                        <!-- Step 2 -->
                        <button @click="activeStep = 2; if(window.setHeroStage) window.setHeroStage(2)"
                                :class="activeStep === 2 ? 'bg-sky-50 border-sky-400 text-sky-900 shadow-md ring-2 ring-sky-300 font-bold' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="w-full p-4 rounded-2xl border text-left transition-all flex items-start gap-3">
                            <div class="w-7 h-7 rounded-xl bg-emerald-500 text-white flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">2</div>
                            <div>
                                <div class="font-bold text-sm font-sans">Sewing Line Telemetry &amp; Balancing</div>
                                <div class="text-xs text-slate-600 font-sans mt-0.5">Monitors workstation piece-rates in real time to eliminate line bottlenecks (+22% output).</div>
                            </div>
                        </button>

                        <!-- Step 3 -->
                        <button @click="activeStep = 3; if(window.setHeroStage) window.setHeroStage(3)"
                                :class="activeStep === 3 ? 'bg-sky-50 border-sky-400 text-sky-900 shadow-md ring-2 ring-sky-300 font-bold' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="w-full p-4 rounded-2xl border text-left transition-all flex items-start gap-3">
                            <div class="w-7 h-7 rounded-xl bg-amber-500 text-white flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">3</div>
                            <div>
                                <div class="font-bold text-sm font-sans">AI Vision Defect Inspection</div>
                                <div class="text-xs text-slate-600 font-sans mt-0.5">HD camera scanners flag stitch skips and fabric flaws before assembly (85% defect cut).</div>
                            </div>
                        </button>

                        <!-- Step 4 -->
                        <button @click="activeStep = 4; if(window.setHeroStage) window.setHeroStage(4)"
                                :class="activeStep === 4 ? 'bg-sky-50 border-sky-400 text-sky-900 shadow-md ring-2 ring-sky-300 font-bold' : 'bg-slate-50 text-slate-700 hover:bg-sky-50 border-slate-200'"
                                class="w-full p-4 rounded-2xl border text-left transition-all flex items-start gap-3">
                            <div class="w-7 h-7 rounded-xl bg-indigo-500 text-white flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">4</div>
                            <div>
                                <div class="font-bold text-sm font-sans">Executive SaaS &amp; Order Dispatch</div>
                                <div class="text-xs text-slate-600 font-sans mt-0.5">Streams machine OEE (98.4% uptime) and guarantees 100% on-time buyer dispatch.</div>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center gap-3 text-xs text-slate-500 font-sans">
                    <svg class="w-4 h-4 text-sky-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Click any step above to inspect the step-by-step digital twin factory workflow in 3D.</span>
                </div>
            </div>

            <div class="lg:col-span-7 relative h-[480px] rounded-3xl bg-white border border-sky-200 overflow-hidden shadow-xl p-4 flex flex-col justify-between group">
                <div class="flex items-center justify-between z-10 pointer-events-none">
                    <span class="text-xs font-sans text-sky-700 font-semibold bg-sky-50 px-3.5 py-1.5 rounded-full border border-sky-200 flex items-center gap-2 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-sky-500 animate-ping"></span>
                        <span x-text="activeTab === 'qc' ? 'SOFTWARE ENGINE: AI VISION INSPECTION' : activeTab === 'oee' ? 'SOFTWARE ENGINE: MACHINE OEE DIAGNOSTICS' : activeTab === 'nodes' ? 'SOFTWARE ENGINE: SMART GANTT SCHEDULER' : 'SOFTWARE ENGINE: REAL-TIME FACTORY TELEMETRY'"></span>
                    </span>
                    <span class="text-xs font-sans font-semibold text-slate-700 bg-white/95 px-3.5 py-1.5 rounded-full border border-slate-200 shadow-sm">REAL-TIME DASHBOARD</span>
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
    <div class="max-w-7xl mx-auto space-y-12" x-data="{
        lines: 15,
        pcsPerLine: 1200,
        reworkRate: 5.5,
        reworkCost: 4.00,
        showFormulas: false,

        // Realistic Enterprise Apparel Manufacturing Constants
        DAYS_PER_YEAR: 300,
        DEFECT_REDUCTION_EFFICIENCY: 0.85, // 85% reduction with TTS AI Vision & RFID
        SYSTEM_COST_PER_LINE_YEAR: 2400,    // $200/line/month hardware + SaaS license
        PROFIT_PER_EXTRA_PC: 0.75,          // $0.75 avg profit contribution per extra garment

        // Dynamic Mathematical Formulas
        get annualVolume() {
            return Number(this.lines) * Number(this.pcsPerLine) * this.DAYS_PER_YEAR;
        },
        get annualReworksSaved() {
            return Math.round(this.annualVolume * (Number(this.reworkRate) * 0.01) * this.DEFECT_REDUCTION_EFFICIENCY);
        },
        get directDefectSavingsUSD() {
            return Math.round(this.annualReworksSaved * Number(this.reworkCost));
        },
        get productivityGainVal() {
            return Math.min(25, Math.round((12 + (Number(this.reworkRate) * 0.8)) * 10) / 10);
        },
        get productivityValueUSD() {
            return Math.round(this.annualVolume * (this.productivityGainVal * 0.01) * this.PROFIT_PER_EXTRA_PC);
        },
        get grossAnnualSavingsUSD() {
            return this.directDefectSavingsUSD + this.productivityValueUSD;
        },
        get totalAnnualCostUSD() {
            return Number(this.lines) * this.SYSTEM_COST_PER_LINE_YEAR;
        },
        get netAnnualSavingsUSD() {
            return Math.max(0, this.grossAnnualSavingsUSD - this.totalAnnualCostUSD);
        },
        get paybackMonthsVal() {
            if (this.grossAnnualSavingsUSD <= 0) return 0;
            return Math.max(0.5, Math.round((this.totalAnnualCostUSD / this.grossAnnualSavingsUSD) * 12 * 10) / 10);
        },
        get netRoiPctVal() {
            if (this.totalAnnualCostUSD <= 0) return 0;
            return Math.round((this.netAnnualSavingsUSD / this.totalAnnualCostUSD) * 100);
        },

        // Formatted Output Helpers
        get netAnnualSavingsFormatted() {
            return '$' + this.netAnnualSavingsUSD.toLocaleString('en-US');
        },
        get directDefectSavingsFormatted() {
            return '$' + this.directDefectSavingsUSD.toLocaleString('en-US');
        },
        get productivityValueFormatted() {
            return '$' + this.productivityValueUSD.toLocaleString('en-US');
        },
        get grossAnnualSavingsFormatted() {
            return '$' + this.grossAnnualSavingsUSD.toLocaleString('en-US');
        },
        get totalAnnualCostFormatted() {
            return '$' + this.totalAnnualCostUSD.toLocaleString('en-US');
        },
        get productivityGainPct() {
            return this.productivityGainVal + '%';
        },
        get paybackMonths() {
            return this.paybackMonthsVal + ' Months';
        },
        get netRoiPct() {
            return this.netRoiPctVal.toLocaleString('en-US') + '%';
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
                        <input type="range" min="1" max="15" step="0.5" x-model="reworkRate" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500 font-sans">
                            <span>1% (Low)</span>
                            <span>6% (Average)</span>
                            <span>15% (High)</span>
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
                        Transparent Garment Unit Economics
                    </div>

                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-sky-200 font-sans mb-1">Projected Net Annual Savings</div>
                        <div class="text-4xl sm:text-5xl font-bold font-sans tracking-tight text-white" x-text="netAnnualSavingsFormatted"></div>
                        <p class="text-xs text-sky-100 mt-1 font-sans">
                            Gross Savings: <span class="font-bold text-emerald-300" x-text="grossAnnualSavingsFormatted"></span> 
                            &bull; Est. System Cost: <span class="font-medium text-slate-200" x-text="totalAnnualCostFormatted"></span>/year
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/20">
                        <div>
                            <div class="text-2xl sm:text-3xl font-bold font-sans text-white" x-text="directDefectSavingsFormatted"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Direct Defect Savings</div>
                            <div class="text-[11px] text-sky-200 mt-0.5 font-sans" x-text="annualReworksSaved.toLocaleString() + ' pcs saved/yr'"></div>
                        </div>

                        <div>
                            <div class="text-2xl sm:text-3xl font-bold font-sans text-emerald-300" x-text="productivityGainPct"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Productivity Gain</div>
                            <div class="text-[11px] text-sky-200 mt-0.5 font-sans" x-text="productivityValueFormatted + ' added capacity'"></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/20">
                        <div>
                            <div class="text-2xl font-bold font-sans text-amber-300" x-text="paybackMonths"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Investment Payback Period</div>
                        </div>

                        <div>
                            <div class="text-2xl font-bold font-sans text-emerald-300" x-text="netRoiPct"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Estimated 1-Year Net ROI</div>
                        </div>
                    </div>
                </div>

                <button @click="demoModalOpen = true" class="w-full py-4 rounded-full bg-white text-sky-700 hover:bg-sky-50 font-bold text-base shadow-lg transition-all text-center relative z-10 font-sans">
                    Book Live Factory Consultation
                </button>
            </div>
        </div>

        <!-- Transparent Formula Breakdown Drawer / Accordion -->
        <div class="pt-4">
            <button @click="showFormulas = !showFormulas" class="w-full flex items-center justify-between p-5 bg-white border border-slate-200 hover:border-sky-300 rounded-2xl transition-all shadow-sm group font-sans">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center font-bold text-sm">
                        &fnof;
                    </div>
                    <div class="text-left">
                        <div class="text-sm font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Calculation Methodology & Transparent Formulas</div>
                        <div class="text-xs text-slate-500">Click to inspect exact mathematical equations, ROI assumptions, and apparel factory parameters</div>
                    </div>
                </div>
                <div class="text-slate-400 group-hover:text-sky-600 transition-colors">
                    <svg class="w-5 h-5 transform transition-transform duration-200" :class="showFormulas ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </button>

            <div x-show="showFormulas" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="mt-4 p-6 sm:p-8 rounded-2xl bg-white border border-slate-200 shadow-md space-y-6 text-slate-700 font-sans text-sm">
                <h4 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3 flex items-center gap-2">
                    <span>📐</span> Transparent Mathematical Model Breakdown
                </h4>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
                        <div class="font-semibold text-sky-700">1. Direct Defect Cost Savings</div>
                        <div class="font-mono text-xs text-slate-800 bg-white p-2 rounded border border-slate-200">
                            Direct Savings = Lines &times; Daily Pcs &times; 300 Days &times; (Defect Rate &times; 85%) &times; Rework Cost
                        </div>
                        <p class="text-xs text-slate-600">Calculates direct financial savings from preventing fabric waste and inline sewing rework using 85% AI defect reduction precision.</p>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
                        <div class="font-semibold text-sky-700">2. Productivity &amp; Line Throughput Gain</div>
                        <div class="font-mono text-xs text-slate-800 bg-white p-2 rounded border border-slate-200">
                            Gain % = 12% Line Balancing Base + (Defect Rate &times; 0.8)<br>
                            Added Value = Annual Volume &times; Gain % &times; $0.75/pc Profit Margin
                        </div>
                        <p class="text-xs text-slate-600">Reflects throughput increase achieved by eliminating line bottlenecks and reducing operator rework delays.</p>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
                        <div class="font-semibold text-sky-700">3. Enterprise System Cost</div>
                        <div class="font-mono text-xs text-slate-800 bg-white p-2 rounded border border-slate-200">
                            Total System Cost = Active Sewing Lines &times; $2,400 / Line / Year
                        </div>
                        <p class="text-xs text-slate-600">Includes all IoT motor sensors, RFID floor readers, optical cameras, and full enterprise SaaS cloud licensing ($200/line/month).</p>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
                        <div class="font-semibold text-sky-700">4. Payback Period &amp; Net ROI</div>
                        <div class="font-mono text-xs text-slate-800 bg-white p-2 rounded border border-slate-200">
                            Payback (Months) = (System Cost &divide; Gross Savings) &times; 12<br>
                            Net ROI % = ((Gross Savings &minus; System Cost) &divide; System Cost) &times; 100
                        </div>
                        <p class="text-xs text-slate-600">Demonstrates exact timeline until total investment payback and net annualized return on investment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 7. CASE STUDIES & TRUST SECTION ================= -->
<section id="case-studies" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-white text-slate-900 border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-emerald-700 px-4 py-1.5 rounded-full bg-emerald-100 border border-emerald-200 inline-block font-sans">
                Field-Verified Audit Results
            </span>
            <h2 class="text-3xl sm:text-5xl font-bold font-sans tracking-tight text-slate-900 leading-tight">
                Real Case Studies with <span class="text-sky-600 italic">Measurable Results</span>
            </h2>
            <p class="text-slate-700 text-base sm:text-lg font-sans">
                Explore audited before-and-after operational transformations across 500+ active apparel sewing lines.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Case Study 1: Pacific Apparel Group -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-sky-200 shadow-xl space-y-6 flex flex-col justify-between hover:shadow-2xl transition-all">
                <div class="space-y-5">
                    <div class="flex items-center justify-between">
                        <div class="text-xs font-mono font-bold text-sky-700 uppercase tracking-widest">PACIFIC APPAREL GROUP</div>
                        <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-sky-100 text-sky-800 border border-sky-200">50 Sewing Lines</span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 font-sans leading-snug">88.7% Reduction in Fabric Defects &amp; Zero Buyer Rejections</h3>

                    <p class="text-xs text-slate-600 font-sans leading-relaxed">
                        <strong>Operational Challenge:</strong> High manual inspection error on formal trousers and blazer lapels caused 6.2% defect rates and $168,000 annual fabric scrap loss.
                    </p>

                    <!-- Before vs After Audited Table -->
                    <div class="p-4 rounded-2xl bg-white border border-slate-200 space-y-2.5 text-xs font-sans">
                        <div class="text-[11px] font-bold text-slate-400 uppercase font-mono tracking-wider pb-1 border-b border-slate-100 flex justify-between">
                            <span>Metric</span>
                            <span>Before TTS &rarr; After TTS</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Inline Defect Rate:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">6.2%</span> &rarr; <span class="text-emerald-600 font-bold">0.7% (-88.7%)</span></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Annual Scrap Cost:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">$168K</span> &rarr; <span class="text-emerald-600 font-bold">$23.5K ($144.5K Saved)</span></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Buyer Quality Claims:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">4.2/mo</span> &rarr; <span class="text-emerald-600 font-bold">0 Claims (100% Pass)</span></span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-500 font-sans italic">
                        &ldquo;Deploying AI Quality Control Studio across our 18 inspection nodes eliminated quality penalty disputes with European apparel buyers.&rdquo;
                    </p>
                </div>

                <div class="pt-4 border-t border-slate-200 flex items-center justify-between text-xs font-mono font-bold text-sky-700">
                    <span>PAYBACK: 1.9 MONTHS</span>
                    <span class="text-emerald-600">AUDITED &check;</span>
                </div>
            </div>

            <!-- Case Study 2: Atlas Denim Mills -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-emerald-200 shadow-xl space-y-6 flex flex-col justify-between hover:shadow-2xl transition-all">
                <div class="space-y-5">
                    <div class="flex items-center justify-between">
                        <div class="text-xs font-mono font-bold text-emerald-700 uppercase tracking-widest">ATLAS DENIM MILLS</div>
                        <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-100 text-emerald-800 border border-emerald-200">35 Sewing Lines</span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 font-sans leading-snug">+2,200 Extra Garments / Day Output Gain</h3>

                    <p class="text-xs text-slate-600 font-sans leading-relaxed">
                        <strong>Operational Challenge:</strong> Severe line imbalance on heavy flatlock stitching created 4.5-hour daily WIP bottlenecks and delayed shipment dispatches.
                    </p>

                    <!-- Before vs After Audited Table -->
                    <div class="p-4 rounded-2xl bg-white border border-slate-200 space-y-2.5 text-xs font-sans">
                        <div class="text-[11px] font-bold text-slate-400 uppercase font-mono tracking-wider pb-1 border-b border-slate-100 flex justify-between">
                            <span>Metric</span>
                            <span>Before TTS &rarr; After TTS</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Line Balance Score:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">68.4%</span> &rarr; <span class="text-emerald-600 font-bold">93.8% (+25.4%)</span></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Daily Output Volume:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">8,200</span> &rarr; <span class="text-emerald-600 font-bold">10,400 pcs (+26.8%)</span></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">WIP Cycle Lead Time:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">8.5 Days</span> &rarr; <span class="text-emerald-600 font-bold">5.2 Days (38.8% Faster)</span></span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-500 font-sans italic">
                        &ldquo;Real-time RFID bundle tracking allowed shopfloor supervisors to identify and balance workstation bottlenecks instantly.&rdquo;
                    </p>
                </div>

                <div class="pt-4 border-t border-slate-200 flex items-center justify-between text-xs font-mono font-bold text-emerald-700">
                    <span>PAYBACK: 1.7 MONTHS</span>
                    <span class="text-emerald-600">AUDITED &check;</span>
                </div>
            </div>

            <!-- Case Study 3: Zenith Knitwear Global -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-indigo-200 shadow-xl space-y-6 flex flex-col justify-between hover:shadow-2xl transition-all">
                <div class="space-y-5">
                    <div class="flex items-center justify-between">
                        <div class="text-xs font-mono font-bold text-indigo-700 uppercase tracking-widest">ZENITH KNITWEAR GLOBAL</div>
                        <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-indigo-100 text-indigo-800 border border-indigo-200">45 Sewing Lines</span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 font-sans leading-snug">98.6% Machine Uptime Score (85.6% Downtime Cut)</h3>

                    <p class="text-xs text-slate-600 font-sans leading-relaxed">
                        <strong>Operational Challenge:</strong> Overlock sewing motor overheating caused 19.5% monthly unscheduled machine downtime during peak export deadlines.
                    </p>

                    <!-- Before vs After Audited Table -->
                    <div class="p-4 rounded-2xl bg-white border border-slate-200 space-y-2.5 text-xs font-sans">
                        <div class="text-[11px] font-bold text-slate-400 uppercase font-mono tracking-wider pb-1 border-b border-slate-100 flex justify-between">
                            <span>Metric</span>
                            <span>Before TTS &rarr; After TTS</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Plant OEE Score:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">71.2%</span> &rarr; <span class="text-emerald-600 font-bold">98.6% Uptime</span></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Unscheduled Outages:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">19.5%</span> &rarr; <span class="text-emerald-600 font-bold">2.8% (-85.6%)</span></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Maintenance Costs:</span>
                            <span class="font-mono text-right"><span class="text-rose-600 line-through mr-1">$54K/yr</span> &rarr; <span class="text-emerald-600 font-bold">$11.2K/yr (79% Cut)</span></span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-500 font-sans italic">
                        &ldquo;Predictive IoT sewing motor telemetry issues 48-hour advance warnings before motor breakdowns happen during peak shifts.&rdquo;
                    </p>
                </div>

                <div class="pt-4 border-t border-slate-200 flex items-center justify-between text-xs font-mono font-bold text-indigo-700">
                    <span>PAYBACK: 2.2 MONTHS</span>
                    <span class="text-emerald-600">AUDITED &check;</span>
                </div>
            </div>
        </div>

        <!-- Trust Stats Bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-12 border-t border-slate-200 text-center">
            <div>
                <div class="text-4xl font-bold text-sky-600 font-sans">500+</div>
                <div class="text-xs font-bold text-slate-700 font-sans mt-1">Verified Sewing Lines</div>
                <div class="text-[11px] text-slate-500 font-sans">Across 25+ Global Plants</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-sky-600 font-sans">10M+</div>
                <div class="text-xs font-bold text-slate-700 font-sans mt-1">Garments Tracked / Mo</div>
                <div class="text-[11px] text-slate-500 font-sans">Real-Time RFID Telemetry</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-sky-600 font-sans">99.4%</div>
                <div class="text-xs font-bold text-slate-700 font-sans mt-1">AI Inspection Accuracy</div>
                <div class="text-[11px] text-slate-500 font-sans">Sub-Millimeter Optical Precision</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-sky-600 font-sans">1.8 Mo</div>
                <div class="text-xs font-bold text-slate-700 font-sans mt-1">Average Payback Period</div>
                <div class="text-[11px] text-slate-500 font-sans">Field-Audited Enterprise ROI</div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 8. FINAL CONVERSION CTA SECTION (FOCUSED SINGLE ACTION) ================= -->
<section id="conversion-cta" class="relative py-28 px-4 sm:px-6 lg:px-8 bg-slate-950 text-white overflow-hidden border-t border-slate-800">
    <!-- Ambient Background Glow -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-sky-500/10 rounded-full blur-[140px]"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center space-y-8 relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-900 border border-sky-400/40 text-sky-300 text-xs font-semibold uppercase tracking-widest font-sans backdrop-blur-md shadow-2xl">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
            Enterprise Factory ROI Calculator
        </div>

        <h2 class="text-4xl sm:text-6xl font-bold font-sans tracking-tight text-white leading-tight max-w-3xl mx-auto">
            Ready to Cut Defect Scrap &amp; Boost Output? <br class="hidden sm:inline" />
            <span class="text-sky-400 italic">See How Much Your Factory Can Save</span>
        </h2>

        <p class="text-base sm:text-xl text-slate-300 font-sans max-w-2xl mx-auto leading-relaxed">
            Input your active sewing lines and daily garment volume to generate an instant, field-audited financial cost reduction report for your plant.
        </p>

        <!-- SINGLE FOCUSED PRIMARY ACTION BUTTON -->
        <div class="pt-4 flex justify-center">
            <a href="#roi-calculator"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-sky-400 via-blue-600 to-sky-500 hover:from-sky-300 hover:to-blue-500 text-white font-bold text-xl px-12 py-5 rounded-full shadow-2xl shadow-sky-500/50 hover:shadow-sky-400/70 hover:scale-105 transition-all group ring-4 ring-sky-400/30 font-sans">
                <span>See How Much Your Factory Can Save</span>
                <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

        <!-- Single Action High-Trust Guarantees Band -->
        <div class="pt-8 border-t border-slate-800 flex flex-wrap items-center justify-center gap-6 text-xs text-slate-400 font-sans">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>Instant Audited Calculation</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>Zero Commitment Required</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>1.8-Month Average Full Payback</span>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    (function initHeroFabricCanvas() {
        const container = document.getElementById('hero-3d-bg-canvas');
        if (!container || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(60, container.clientWidth / container.clientHeight, 1, 2000);
        camera.position.set(0, 180, 420);
        camera.lookAt(0, 0, 0);

        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        container.appendChild(renderer.domElement);

        // Interactive 3D Digital Fabric Mesh Particles
        const amountX = 65;
        const amountY = 45;
        const numParticles = amountX * amountY;
        const positions = new Float32Array(numParticles * 3);
        const colors = new Float32Array(numParticles * 3);

        const colorSky = new THREE.Color(0x38bdf8);
        const colorEmerald = new THREE.Color(0x10b981);

        let i = 0;
        for (let ix = 0; ix < amountX; ix++) {
            for (let iy = 0; iy < amountY; iy++) {
                positions[i] = (ix * 24) - ((amountX * 24) / 2);
                positions[i + 1] = 0;
                positions[i + 2] = (iy * 24) - ((amountY * 24) / 2);

                const mixRatio = ix / amountX;
                const c = colorSky.clone().lerp(colorEmerald, mixRatio);
                colors[i] = c.r;
                colors[i + 1] = c.g;
                colors[i + 2] = c.b;

                i += 3;
            }
        }

        const geometry = new THREE.BufferGeometry();
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

        const material = new THREE.PointsMaterial({
            size: 3.2,
            vertexColors: true,
            transparent: true,
            opacity: 0.8,
            blending: THREE.AdditiveBlending
        });

        const particles = new THREE.Points(geometry, material);
        scene.add(particles);

        let count = 0;
        let mouseX = 0;
        let mouseY = 0;

        window.addEventListener('mousemove', function(e) {
            mouseX = (e.clientX - window.innerWidth / 2) * 0.08;
            mouseY = (e.clientY - window.innerHeight / 2) * 0.08;
        });

        window.addEventListener('resize', function() {
            if (!container) return;
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        });

        function animate() {
            requestAnimationFrame(animate);

            camera.position.x += (mouseX - camera.position.x) * 0.04;
            camera.position.y += (-mouseY + 180 - camera.position.y) * 0.04;
            camera.lookAt(scene.position);

            const positionAttr = geometry.attributes.position;
            const posArray = positionAttr.array;

            let pIdx = 0;
            for (let ix = 0; ix < amountX; ix++) {
                for (let iy = 0; iy < amountY; iy++) {
                    posArray[pIdx + 1] = (Math.sin((ix + count) * 0.25) * 30) + (Math.sin((iy + count) * 0.4) * 25);
                    pIdx += 3;
                }
            }

            positionAttr.needsUpdate = true;
            count += 0.03;
            renderer.render(scene, camera);
        }
        animate();
    // Video Performance IntersectionObserver: pause hero video when scrolled off-screen
    const heroVideo = document.getElementById('hero-bg-video');
    const heroSection = document.getElementById('hero');
    if (heroVideo && heroSection && 'IntersectionObserver' in window) {
        const videoObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heroVideo.play().catch(() => {});
                } else {
                    heroVideo.pause();
                }
            });
        }, { threshold: 0.1 });
        videoObserver.observe(heroSection);
    }
});
</script>

@endsection
