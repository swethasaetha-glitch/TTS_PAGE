@extends('layouts.app')

@section('title', 'Track Tech Solution — Digital Intelligence for Garment Manufacturing')

@section('content')

<!-- ================= HERO SECTION (OFFICIAL TRAKWEL VIDEO & CREATIVE AMBIENT OVERLAY) ================= -->
<section class="relative min-h-screen flex flex-col justify-center items-center pt-32 pb-24 px-4 sm:px-6 lg:px-8 overflow-hidden bg-slate-950 text-white">
    
    <!-- Custom High-Tech Garment Manufacturing Video & Vignette Ambient Background -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <video autoplay loop muted playsinline preload="auto" class="w-full h-full object-cover opacity-75 scale-105 filter contrast-105 saturate-110">
            <source src="{{ asset('videos/garment-bg.mp4') }}" type="video/mp4">
        </video>

        <!-- Deep Creative Radial Vignette Overlay -->
        <div class="absolute inset-0" style="background:radial-gradient(circle at center, transparent 0%, transparent 25%, rgba(3, 7, 18, 0.35) 50%, rgba(3, 7, 18, 0.75) 80%, rgba(3, 7, 18, 0.95) 100%)"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/80 via-transparent to-slate-950/90"></div>

        <!-- Ambient Glowing Light Orbs for Futuristic Aesthetic -->
        <div class="absolute inset-0">
            <div class="absolute top-[20%] right-[10%] w-24 h-24 bg-sky-400/20 rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute bottom-[30%] left-[15%] w-32 h-32 bg-blue-500/20 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute top-[15%] left-[8%] w-12 h-12 bg-sky-300/30 rounded-full blur-lg animate-ping"></div>
            <div class="absolute top-[60%] right-[20%] w-16 h-16 bg-blue-400/25 rounded-full blur-xl"></div>
            <div class="absolute bottom-[20%] right-[8%] w-10 h-10 bg-sky-200/40 rounded-full blur-md"></div>
        </div>
    </div>

    <!-- Hero Content Container (Centered Alignment) -->
    <div class="max-w-4xl mx-auto w-full flex flex-col items-center text-center space-y-8 relative z-10">

        <!-- Centered Main Title -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.12] text-white font-sans max-w-4xl drop-shadow-lg">
            Revolutionizing <span class="text-sky-400 italic font-sans drop-shadow-lg">Garment Manufacturing</span> <br class="hidden sm:inline" />
            With Real-Time Digital Intelligence
        </h1>

        <!-- Centered Subtitle -->
        <p class="text-lg sm:text-2xl text-slate-100 font-sans leading-relaxed max-w-2xl drop-shadow-md">
            From Factory Floor to Executive Dashboard. <br />
            <span class="text-sky-400 font-sans text-xs sm:text-sm tracking-widest uppercase font-semibold">Track. Optimize. Transform.</span>
        </p>

        <!-- Centered Action Buttons (Flexbox) -->
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-5 w-full sm:w-auto">
            <button @click="demoModalOpen = true"
                    class="w-full sm:w-auto flex items-center justify-center gap-3 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-500 hover:from-sky-400 hover:to-blue-600 text-white font-semibold text-base px-10 py-4 rounded-full shadow-2xl shadow-sky-500/50 hover:scale-105 transition-all group">
                <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <span>Book Live Demo</span>
            </button>

            <a href="#products"
               class="w-full sm:w-auto flex items-center justify-center gap-2 bg-slate-900/80 hover:bg-slate-800 text-white font-sans font-medium text-base px-9 py-4 rounded-full border border-white/30 hover:border-sky-400 backdrop-blur-md shadow-lg transition-all group">
                <span>Explore Solutions</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

        <!-- Centered Features Pills -->
        <div class="pt-8 border-t border-white/20 flex flex-wrap items-center justify-center gap-4 text-xs font-sans font-medium text-white w-full">
            <div class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow-md flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> AI Quality Studio
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow-md flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> Live Sewing Line Tracking
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow-md flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> Machine OEE Telemetry
            </div>
            <div class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow-md flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> Smart Gantt Planner
            </div>
        </div>
    </div>
</section>

<!-- ================= SOFTWARE & TECHNOLOGY SOLUTIONS BRAND BANNER ================= -->
<section class="relative py-12 px-4 sm:px-6 lg:px-8 bg-slate-50 text-slate-900 border-b border-slate-200">
    <div class="max-w-6xl mx-auto">
        <div class="bg-white p-8 sm:p-10 rounded-3xl border border-sky-200 shadow-xl flex flex-col md:flex-row items-center justify-between gap-8 relative z-10">
            <div class="space-y-4 max-w-3xl text-left">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-sky-100 border border-sky-200 text-sky-700 text-xs font-semibold uppercase tracking-wider font-sans">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-ping"></span>
                    Software & Technology Solutions
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold font-sans tracking-tight text-sky-600 leading-snug">
                    We Provide Enterprise Software Solutions for <span class="text-slate-900">Smart Garment Factories</span>
                </h2>
                <p class="text-slate-700 text-base sm:text-lg font-sans leading-relaxed">
                    We deliver real-time software technology that directly powers shopfloor operations—from AI quality vision inspection to RFID line tracking, machine OEE telemetry, and smart Gantt planning.
                </p>
            </div>
            <div class="shrink-0 w-full md:w-auto">
                <button @click="demoModalOpen = true" class="w-full md:w-auto px-9 py-4 rounded-full bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <span>Schedule Software Consultation</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ================= DIGITAL GARMENT MANUFACTURING PIPELINE (CLEAN LIGHT THEME) ================= -->
<section id="digital-pipeline" class="relative py-20 px-4 sm:px-6 lg:px-8 bg-slate-50 text-slate-900 overflow-hidden border-b border-slate-200">
    <div class="max-w-6xl mx-auto space-y-8 relative z-10" x-data="{ currentStage: 1 }">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                Digital Garment Technology Flow
            </span>
            <h2 class="text-3xl sm:text-5xl font-bold font-sans tracking-tight text-sky-600 leading-tight">
                How Our Software Powers <span class="text-slate-900 italic font-sans">Smart Garment Factories</span>
            </h2>
            <p class="text-slate-700 text-base sm:text-lg font-sans">
                Explore the connected technology loop: from shopfloor machines to AI vision scanning and executive SaaS dashboards.
            </p>
        </div>

        <!-- 5-Stage Stepper Navigation Bar -->
        <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 text-xs font-sans font-semibold">
            <button @click="currentStage = 1; window.setHeroStage && window.setHeroStage(1)" :class="currentStage === 1 ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-white text-slate-700 hover:bg-sky-50 border-slate-200'" class="px-4 py-2 rounded-full border transition-all flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                <span>1. Garment Factory</span>
            </button>
            <span class="text-slate-400 hidden sm:inline">→</span>
            <button @click="currentStage = 2; window.setHeroStage && window.setHeroStage(2)" :class="currentStage === 2 ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-white text-slate-700 hover:bg-sky-50 border-slate-200'" class="px-4 py-2 rounded-full border transition-all flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                <span>2. Real-Time Telemetry</span>
            </button>
            <span class="text-slate-400 hidden sm:inline">→</span>
            <button @click="currentStage = 3; window.setHeroStage && window.setHeroStage(3)" :class="currentStage === 3 ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-white text-slate-700 hover:bg-sky-50 border-slate-200'" class="px-4 py-2 rounded-full border transition-all flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                <span>3. AI Vision</span>
            </button>
            <span class="text-slate-400 hidden sm:inline">→</span>
            <button @click="currentStage = 4; window.setHeroStage && window.setHeroStage(4)" :class="currentStage === 4 ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-white text-slate-700 hover:bg-sky-50 border-slate-200'" class="px-4 py-2 rounded-full border transition-all flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                <span>4. Software Dashboard</span>
            </button>
            <span class="text-slate-400 hidden sm:inline">→</span>
            <button @click="currentStage = 5; window.setHeroStage && window.setHeroStage(5)" :class="currentStage === 5 ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md shadow-sky-500/20 border-sky-400 font-bold' : 'bg-white text-slate-700 hover:bg-sky-50 border-slate-200'" class="px-4 py-2 rounded-full border transition-all flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
                <span>5. Insights</span>
            </button>
        </div>

        <!-- Clean White 3D Viewport Box -->
        <div class="relative h-[420px] sm:h-[480px] w-full rounded-3xl overflow-hidden bg-white border border-sky-200 shadow-xl">
            <div id="hero-digital-factory-canvas" class="w-full h-full absolute inset-0 cursor-grab active:cursor-grabbing"></div>

            <!-- Dynamic Live Light HUD Card Overlay -->
            <div class="absolute bottom-6 left-6 right-6 pointer-events-none z-10">
                <div class="bg-white/95 backdrop-blur-md p-5 rounded-2xl border border-sky-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 text-left shadow-lg">
                    <div class="space-y-1">
                        <span class="text-xs font-mono font-bold text-sky-700 uppercase tracking-widest block" x-text="currentStage === 1 ? 'STAGE 1: GARMENT FACTORY FLOOR & WORKSTATIONS' : currentStage === 2 ? 'STAGE 2: REAL-TIME TELEMETRY & MACHINE DATA' : currentStage === 3 ? 'STAGE 3: AI COMPUTER VISION & DEFECT SCANNING' : currentStage === 4 ? 'STAGE 4: ENTERPRISE SOFTWARE DASHBOARD UI' : 'STAGE 5: CONNECTED DIGITAL FACTORY INSIGHTS'"></span>
                        <p class="text-xs sm:text-sm text-slate-700 font-sans leading-relaxed" x-text="currentStage === 1 ? 'Digital twin visualization of sewing workstations, conveyor line vectors, and active shopfloor operators.' : currentStage === 2 ? 'Real-time telemetry signals streaming machine RPM, temp, and RFID piece counters directly to cloud servers.' : currentStage === 3 ? 'AI vision scanning fabric rolls in real-time, detecting stitch flaws with 99.4% automated inspection accuracy.' : currentStage === 4 ? 'Unified SaaS dashboard monitoring overall line efficiency, OEE metrics, and production dispatch schedules.' : 'Complete factory intelligence loop: Garment Factory → Machines → Data → AI Vision → Software Dashboard → Insights.'"></p>
                    </div>
                    <span class="shrink-0 text-[11px] font-mono text-emerald-700 font-bold bg-emerald-50 px-4 py-2 rounded-full border border-emerald-200 shadow-sm">SYSTEM STATUS: OPTIMAL</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= INTERACTIVE 3D DIGITAL TWIN STUDIO HUB ================= -->
<section id="3d-studio" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-slate-50 text-slate-900 overflow-hidden border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-12 relative z-10">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                Interactive 3D Digital Twin Studio
            </span>
            <h2 class="text-3xl sm:text-5xl font-bold font-sans tracking-tight text-sky-600 leading-tight">
                Touch & Inspect Our <span class="text-slate-900 italic">Real-Time 3D Models</span>
            </h2>
            <p class="text-slate-700 text-base sm:text-lg font-sans">
                Tap or drag any 3D viewport below to inspect real-time factory telemetry, vision inspection, and gear health.
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
                            <span class="font-bold text-sky-700 block">Touch / Tap 3D Viewport</span>
                            <span>Tap 3D model to jump to Smart Garment Factory Solutions.</span>
                        </div>
                    </div>

                    <button @click="document.getElementById('products')?.scrollIntoView({ behavior: 'smooth' })"
                            class="w-full py-4 rounded-full bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        <span>Explore Solutions Below</span>
                    </button>
                </div>
            </div>

            <div class="lg:col-span-7 relative h-[480px] rounded-3xl bg-white border border-sky-200 overflow-hidden shadow-xl p-4 flex flex-col justify-between cursor-pointer group"
                 @click="document.getElementById('products')?.scrollIntoView({ behavior: 'smooth' })">

                <div class="flex items-center justify-between z-10 pointer-events-none">
                    <span class="text-xs font-sans text-sky-700 font-semibold bg-sky-50 px-3.5 py-1.5 rounded-full border border-sky-200 flex items-center gap-2 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-sky-500 animate-ping"></span>
                        <span x-text="activeTab === 'qc' ? 'SOFTWARE ENGINE: AI VISION INSPECTION' : activeTab === 'oee' ? 'SOFTWARE ENGINE: MACHINE OEE DIAGNOSTICS' : activeTab === 'nodes' ? 'SOFTWARE ENGINE: SMART GANTT SCHEDULER' : 'SOFTWARE ENGINE: REAL-TIME FACTORY TELEMETRY'"></span>
                    </span>
                    <span class="text-xs font-mono font-semibold text-slate-600 bg-white/90 px-3 py-1 rounded-full border border-slate-200 shadow-sm">60 FPS | LIVE DATA HUD</span>
                </div>

                <!-- 3D WebGL Canvas Container -->
                <div id="interactive-3d-viewport" class="w-full h-full absolute inset-0 cursor-grab active:cursor-grabbing"></div>

                <!-- Software UI HUD Overlay Elements -->
                <div class="absolute inset-0 pointer-events-none z-10 p-6 flex flex-col justify-between">
                    <!-- Top Software Metric Badges -->
                    <div class="flex items-start justify-end gap-3 mt-10">
                        <!-- QC HUD Badge -->
                        <div x-show="activeTab === 'qc'" class="bg-white/90 backdrop-blur-md p-3.5 rounded-2xl border border-emerald-300 shadow-lg text-left max-w-xs space-y-1 animate-fade-in">
                            <div class="flex items-center gap-2 text-emerald-700 font-bold text-xs font-sans uppercase">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                                AI Vision Inspection UI
                            </div>
                            <div class="text-[11px] font-mono text-slate-700 space-y-0.5">
                                <p><span class="text-slate-400">Scan Status:</span> <span class="text-emerald-600 font-bold">Scanning Fabric Roll #842</span></p>
                                <p><span class="text-slate-400">Stitch Flaws:</span> <span class="text-rose-600 font-bold">1 Defect Detected (99.4%)</span></p>
                                <p><span class="text-slate-400">Inline Pass Rate:</span> <span class="text-emerald-600 font-bold">98.6% Flawless</span></p>
                            </div>
                        </div>

                        <!-- OEE HUD Badge -->
                        <div x-show="activeTab === 'oee'" class="bg-white/90 backdrop-blur-md p-3.5 rounded-2xl border border-sky-300 shadow-lg text-left max-w-xs space-y-1 animate-fade-in">
                            <div class="flex items-center gap-2 text-sky-700 font-bold text-xs font-sans uppercase">
                                <span class="w-2 h-2 rounded-full bg-sky-500 animate-pulse"></span>
                                Machine Maintenance OEE HUD
                            </div>
                            <div class="text-[11px] font-mono text-slate-700 space-y-0.5">
                                <p><span class="text-slate-400">Motor Speed:</span> <span class="text-sky-600 font-bold">4,200 RPM</span></p>
                                <p><span class="text-slate-400">Motor Temp:</span> <span class="text-amber-600 font-bold">38.2°C (Optimal)</span></p>
                                <p><span class="text-slate-400">Overall OEE:</span> <span class="text-emerald-600 font-bold">98.4% Uptime</span></p>
                            </div>
                        </div>

                        <!-- Core HUD Badge -->
                        <div x-show="activeTab === 'core'" class="bg-white/90 backdrop-blur-md p-3.5 rounded-2xl border border-blue-300 shadow-lg text-left max-w-xs space-y-1 animate-fade-in">
                            <div class="flex items-center gap-2 text-blue-700 font-bold text-xs font-sans uppercase">
                                <span class="w-2 h-2 rounded-full bg-blue-500 animate-ping"></span>
                                Real-Time RFID Telemetry HUD
                            </div>
                            <div class="text-[11px] font-mono text-slate-700 space-y-0.5">
                                <p><span class="text-slate-400">Active Lines:</span> <span class="text-blue-600 font-bold">500+ Garment Lines</span></p>
                                <p><span class="text-slate-400">Throughput:</span> <span class="text-blue-600 font-bold">14,280 Pcs/Hr</span></p>
                                <p><span class="text-slate-400">Telemetry Sync:</span> <span class="text-emerald-600 font-bold">Real-Time (10ms)</span></p>
                            </div>
                        </div>

                        <!-- Nodes HUD Badge -->
                        <div x-show="activeTab === 'nodes'" class="bg-white/90 backdrop-blur-md p-3.5 rounded-2xl border border-indigo-300 shadow-lg text-left max-w-xs space-y-1 animate-fade-in">
                            <div class="flex items-center gap-2 text-indigo-700 font-bold text-xs font-sans uppercase">
                                <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
                                Smart Gantt Planner UI
                            </div>
                            <div class="text-[11px] font-mono text-slate-700 space-y-0.5">
                                <p><span class="text-slate-400">Connected Hubs:</span> <span class="text-indigo-600 font-bold">25 Plants Worldwide</span></p>
                                <p><span class="text-slate-400">Line Balance:</span> <span class="text-emerald-600 font-bold">96.8% Optimized</span></p>
                                <p><span class="text-slate-400">Order Dispatch:</span> <span class="text-indigo-600 font-bold">On Schedule</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="z-10 pointer-events-none text-center py-2 bg-white/90 backdrop-blur-md rounded-2xl border border-sky-200 text-xs font-sans text-sky-700 font-semibold shadow-sm">
                    👈 Drag to rotate software 3D view • Tap viewport to explore product module 👉
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= IMPACT METRICS ================= -->
<section id="impact" class="relative py-28 px-4 sm:px-6 lg:px-8 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100/80 border border-sky-200 inline-block font-sans">
                Our Impact
            </span>
            <h2 class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight leading-tight">
                Beyond borders, beyond limits
            </h2>
            <p class="text-slate-900 text-base sm:text-lg font-sans max-w-2xl mx-auto leading-relaxed">
                Empowering manufacturers worldwide with cutting-edge technology and innovative solutions
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="relative p-8 rounded-3xl bg-slate-50 border border-sky-200 shadow-lg hover:shadow-xl hover:scale-[1.03] transition-all group text-center">
                <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 inline-flex mb-4 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <div class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight mb-2">500+</div>
                <p class="text-sm font-semibold text-slate-900 font-sans">Active lines</p>
            </div>

            <div class="relative p-8 rounded-3xl bg-slate-50 border border-sky-200 shadow-lg hover:shadow-xl hover:scale-[1.03] transition-all group text-center">
                <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 inline-flex mb-4 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight mb-2">10M+</div>
                <p class="text-sm font-semibold text-slate-900 font-sans">Users</p>
            </div>

            <div class="relative p-8 rounded-3xl bg-slate-50 border border-sky-200 shadow-lg hover:shadow-xl hover:scale-[1.03] transition-all group text-center">
                <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 inline-flex mb-4 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight mb-2">50M+</div>
                <p class="text-sm font-semibold text-slate-900 font-sans">Pieces checked/month</p>
            </div>

            <div class="relative p-8 rounded-3xl bg-slate-50 border border-sky-200 shadow-lg hover:shadow-xl hover:scale-[1.03] transition-all group text-center">
                <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 inline-flex mb-4 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5a2.5 2.5 0 002.5-2.5V11a2 2 0 012-2h1.055M11 20.055V18a2 2 0 00-2-2h-1a2 2 0 00-2 2v2.055"></path></svg>
                </div>
                <div class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight mb-2">25</div>
                <p class="text-sm font-semibold text-slate-900 font-sans">Countries</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= PRODUCTS SECTION ================= -->
<section id="products" class="relative py-28 px-4 sm:px-6 lg:px-8 bg-slate-50">
    <div class="max-w-7xl mx-auto space-y-20">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                Comprehensive Software Suite
            </span>
            <h2 class="text-4xl sm:text-5xl font-bold text-slate-900 font-sans tracking-tight">
                Designed for <span class="text-sky-600 italic">Smart Garment Factories</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Quality Control -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-100 hover:border-sky-300 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-700 px-3 py-1 rounded-full bg-sky-50 border border-sky-200 font-sans">AI Powered</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Quality Control AI</h3>
                        <p class="text-xs font-medium text-slate-500 mt-1 font-sans">Predict & Prevent Defects Inline</p>
                    </div>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Flawless quality assurance powered by vision AI. Automate fabric roll inspection, stitching flaw detection, and inline quality logging to reduce defects by up to 35%.
                    </p>
                </div>
                <div class="pt-8 mt-8 border-t border-slate-100">
                    <a href="{{ route('products.quality-control') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700 font-sans">
                        <span>Explore Quality Control Module</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Production Tracking -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-100 hover:border-sky-300 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-700 px-3 py-1 rounded-full bg-sky-50 border border-sky-200 font-sans">Live Telemetry</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Production Tracking</h3>
                        <p class="text-xs font-medium text-slate-500 mt-1 font-sans">End-to-End Real Time Visibility</p>
                    </div>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Gain 100% transparent tracking across all production stages—from cutting room and sewing lines to finishing and final dispatch.
                    </p>
                </div>
                <div class="pt-8 mt-8 border-t border-slate-100">
                    <a href="{{ route('products.production-tracking') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700 font-sans">
                        <span>Explore Production Tracking</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Machine Maintenance -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-100 hover:border-sky-300 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-700 px-3 py-1 rounded-full bg-sky-50 border border-sky-200 font-sans">IoT Connected</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Machine Maintenance (OEE)</h3>
                        <p class="text-xs font-medium text-slate-500 mt-1 font-sans">Equipment Health & Downtime Prevention</p>
                    </div>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Maximize overall equipment effectiveness (OEE). Monitor machine run hours, predict motor failures, and schedule servicing automatically.
                    </p>
                </div>
                <div class="pt-8 mt-8 border-t border-slate-100">
                    <a href="{{ route('products.machine-maintenance') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700 font-sans">
                        <span>Explore Machine Maintenance</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Production Planning -->
            <div class="p-8 sm:p-10 rounded-3xl bg-white border border-sky-100 hover:border-sky-300 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-700 px-3 py-1 rounded-full bg-sky-50 border border-sky-200 font-sans">Smart Gantt</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Production Planning</h3>
                        <p class="text-xs font-medium text-slate-500 mt-1 font-sans">Intelligent Scheduling & Line Optimization</p>
                    </div>
                    <p class="text-sm text-slate-600 font-sans leading-relaxed">
                        Schedule customer orders against exact line capacities, section skills, and delivery deadlines with an intuitive digital planner.
                    </p>
                </div>
                <div class="pt-8 mt-8 border-t border-slate-100">
                    <a href="{{ route('products.production-planning') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700 font-sans">
                        <span>Explore Production Planning</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Garment Manufacturing Industry Modules Grid -->
        <div class="mt-16 pt-16 border-t border-slate-200/80 space-y-12">
            <div class="text-center space-y-3 max-w-2xl mx-auto">
                <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                    Garment Industry Modules
                </span>
                <h3 class="text-3xl font-bold text-slate-900 font-sans">
                    End-to-End Digitalization for Apparel Factories
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Module 1: Quality Management System -->
                <div class="bg-white rounded-2xl border border-sky-100 overflow-hidden shadow-md hover:shadow-xl transition-all group">
                    <div class="h-44 relative overflow-hidden bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&q=80" alt="Quality Management System" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-xs font-semibold font-sans text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">QMS AI</span>
                    </div>
                    <div class="p-5 space-y-2">
                        <h4 class="text-lg font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Quality Management System</h4>
                        <p class="text-xs text-slate-600 font-sans leading-relaxed">
                            Inline fabric inspection, stitch defect tagging, and AQL automated scoring dashboards.
                        </p>
                    </div>
                </div>

                <!-- Module 2: Production Tracking System -->
                <div class="bg-white rounded-2xl border border-sky-100 overflow-hidden shadow-md hover:shadow-xl transition-all group">
                    <div class="h-44 relative overflow-hidden bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=600&q=80" alt="Production Tracking System" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-xs font-semibold font-sans text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">RFID & Barcode</span>
                    </div>
                    <div class="p-5 space-y-2">
                        <h4 class="text-lg font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Production Tracking System</h4>
                        <p class="text-xs text-slate-600 font-sans leading-relaxed">
                            Real-time bundle tracking across sewing lines with real-time WIP updates and operator efficiency metrics.
                        </p>
                    </div>
                </div>

                <!-- Module 3: Cutting Room Digitisation -->
                <div class="bg-white rounded-2xl border border-sky-100 overflow-hidden shadow-md hover:shadow-xl transition-all group">
                    <div class="h-44 relative overflow-hidden bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1604014237800-1c9102c219da?auto=format&fit=crop&w=600&q=80" alt="Cutting Room Digitisation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-xs font-semibold font-sans text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">Smart Spreading</span>
                    </div>
                    <div class="p-5 space-y-2">
                        <h4 class="text-lg font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Cutting Room Digitisation</h4>
                        <p class="text-xs text-slate-600 font-sans leading-relaxed">
                            Digital marker planning, fabric roll optimization, and automated ply-count tracking.
                        </p>
                    </div>
                </div>

                <!-- Module 4: Fabric Inventory Management -->
                <div class="bg-white rounded-2xl border border-sky-100 overflow-hidden shadow-md hover:shadow-xl transition-all group">
                    <div class="h-44 relative overflow-hidden bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1528459801416-a9e53bbf4e17?auto=format&fit=crop&w=600&q=80" alt="Fabric Inventory Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-xs font-semibold font-sans text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">Warehouse IoT</span>
                    </div>
                    <div class="p-5 space-y-2">
                        <h4 class="text-lg font-bold text-slate-900 font-sans group-hover:text-sky-600 transition-colors">Fabric Inventory Management</h4>
                        <p class="text-xs text-slate-600 font-sans leading-relaxed">
                            Barcode-driven roll allocation, shade grouping, shrinkage matching, and zero-loss fabric storage.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= INTERACTIVE FACTORY ROI & COST SAVINGS CALCULATOR ================= -->
<section id="roi-calculator" class="relative py-28 px-4 sm:px-6 lg:px-8 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16" x-data="{
        lines: 15,
        pcsPerLine: 1200,
        reworkRate: 5,
        get monthlySavings() {
            return (this.lines * this.pcsPerLine * 25 * (this.reworkRate * 0.01) * 38).toLocaleString('en-IN');
        },
        get garmentsSaved() {
            return Math.round(this.lines * this.pcsPerLine * 25 * (this.reworkRate * 0.01) * 0.48).toLocaleString();
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
                Adjust your factory capacity below to see instant cost reduction and productivity gains.
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
                            <span class="text-sky-600 font-bold text-lg font-sans" x-text="pcsPerLine + ' pcs/day'"></span>
                        </div>
                        <input type="range" min="500" max="3000" step="100" x-model="pcsPerLine" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500 font-sans">
                            <span>500 pcs</span>
                            <span>1,500 pcs</span>
                            <span>3,000 pcs</span>
                        </div>
                    </div>

                    <!-- Slider 3: Rework Rate -->
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-slate-900 font-sans text-sm">
                            <span class="font-semibold">Current Defect / Re-work Rate</span>
                            <span class="text-sky-600 font-bold text-lg font-sans" x-text="reworkRate + '%'"></span>
                        </div>
                        <input type="range" min="2" max="12" step="1" x-model="reworkRate" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500 font-sans">
                            <span>2% (Low)</span>
                            <span>6% (Average)</span>
                            <span>12% (High)</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center gap-3 text-xs text-slate-500 font-sans">
                    <svg class="w-4 h-4 text-sky-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Based on real shopfloor benchmarks across 500+ active apparel manufacturing lines.</span>
                </div>
            </div>

            <!-- Savings Display Output Panel -->
            <div class="lg:col-span-6 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-sky-600 via-blue-700 to-sky-800 text-white shadow-2xl space-y-8 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute -top-12 -right-12 w-48 h-48 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>

                <div class="space-y-6 relative z-10">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/20 border border-white/30 text-white text-xs font-semibold uppercase tracking-wider font-sans">
                        Estimated ROI Results
                    </div>

                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-sky-200 font-sans mb-1">Projected Monthly Savings</div>
                        <div class="text-4xl sm:text-5xl font-bold font-sans tracking-tight text-white">
                            ₹ <span x-text="monthlySavings"></span>
                        </div>
                        <p class="text-xs text-sky-100 mt-1 font-sans">Saved from fabric scrap, inline re-works, and downtime</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/20">
                        <div>
                            <div class="text-3xl font-bold font-sans text-white" x-text="garmentsSaved"></div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Garments Saved / Month</div>
                        </div>

                        <div>
                            <div class="text-3xl font-bold font-sans text-white">+37%</div>
                            <div class="text-xs text-sky-100 font-sans mt-0.5">Overall Line OEE Boost</div>
                        </div>
                    </div>
                </div>

                <div class="pt-6 relative z-10">
                    <button @click="demoModalOpen = true" class="w-full bg-white hover:bg-sky-50 text-sky-700 font-bold text-base py-4 rounded-full shadow-xl transition-all hover:scale-[1.02] flex items-center justify-center gap-3">
                        <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Claim Your Custom Factory ROI Audit</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= TRUSTED CLIENTS ================= -->
<section class="relative py-28 px-4 sm:px-6 lg:px-8 bg-slate-50 border-t border-slate-200 overflow-hidden">
    <div class="max-w-7xl mx-auto space-y-16">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-sans">
                Global Network
            </span>
            <h2 class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight leading-tight">
                Trusted by Industry Leaders
            </h2>
            <p class="text-slate-900 text-base sm:text-lg font-sans">
                Partnering with world-class textile & garment manufacturing pioneers
            </p>
        </div>

        <!-- Continuous Rotating / Moving Marquee Container -->
        <div class="relative w-full overflow-hidden py-4">
            <!-- Left & Right Gradient Fade Vignettes for Seamless Moving Effect -->
            <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-slate-50 to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-slate-50 to-transparent z-10 pointer-events-none"></div>

            <div class="flex space-x-6 animate-marquee">
                <!-- Partner Cards Block (Set 1) -->
                <div class="flex space-x-6 shrink-0">
                    <!-- Shahi Exports -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/shahi.png') }}" alt="Shahi Exports Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Shahi Exports</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Arvind Ltd -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/arvind.png') }}" alt="Arvind Ltd Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Arvind Ltd</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- PDS -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/pds.png') }}" alt="PDS Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">PDS</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Modelama Exports -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/modelama.png') }}" alt="Modelama Exports Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Modelama Exports</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Armstrong -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/armstrong.png') }}" alt="Armstrong Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Armstrong</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Penguin Apparels -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/penguin.png') }}" alt="Penguin Apparels Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Penguin Apparels</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Sahana -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/sahana.png') }}" alt="Sahana Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Sahana</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Trendy Fits -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/trendyfits.png') }}" alt="Trendy Fits Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Trendy Fits</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Mehala -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/mehala.png') }}" alt="Mehala Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Mehala</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Partner Cards Block (Set 2 for Seamless Loop) -->
                <div class="flex space-x-6 shrink-0" aria-hidden="true">
                    <!-- Shahi Exports -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/shahi.png') }}" alt="Shahi Exports Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Shahi Exports</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Arvind Ltd -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/arvind.png') }}" alt="Arvind Ltd Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Arvind Ltd</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- PDS -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/pds.png') }}" alt="PDS Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">PDS</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Modelama Exports -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/modelama.png') }}" alt="Modelama Exports Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Modelama Exports</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Armstrong -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/armstrong.png') }}" alt="Armstrong Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Armstrong</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Penguin Apparels -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/penguin.png') }}" alt="Penguin Apparels Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Penguin Apparels</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Sahana -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/sahana.png') }}" alt="Sahana Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Sahana</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Trendy Fits -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/trendyfits.png') }}" alt="Trendy Fits Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Trendy Fits</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>

                    <!-- Mehala -->
                    <div class="w-64 h-36 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-md hover:shadow-xl hover:scale-105 transition-all text-center group flex flex-col items-center justify-center space-y-2 shrink-0">
                        <div class="h-10 flex items-center justify-center">
                            <img src="{{ asset('images/partners/mehala.png') }}" alt="Mehala Logo" class="max-h-9 w-auto object-contain group-hover:scale-110 transition-transform">
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-sky-600 font-sans group-hover:text-sky-700 transition-colors">Mehala</h3>
                            <p class="text-xs font-semibold text-slate-900 font-sans mt-0.5">Strategic Partner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
