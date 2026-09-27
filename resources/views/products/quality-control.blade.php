@extends('layouts.app')

@section('title', 'Quality Control AI - Track Tech Solution')

@section('content')
<div class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto space-y-16">
    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        <span>Back to Overview</span>
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-6 space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-100 border border-emerald-200 text-emerald-800 text-xs font-sans font-bold uppercase">
                BUSINESS OUTCOME: 85% DEFECT REDUCTION ($140K/YR SAVINGS)
            </div>

            <h1 class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight leading-tight">
                AI Quality Control & Defect Prevention
            </h1>

            <p class="text-lg text-slate-900 font-sans leading-relaxed">
                Eliminate expensive fabric scrap, re-works, and buyer claims with automated vision AI inspection. Detect stitching flaws, skipped stitches, and fabric defects with 99.4% accuracy before final assembly.
            </p>

            <ul class="space-y-3 pt-2 text-base text-slate-900 font-sans">
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span> <strong>85% Defect Rate Reduction</strong> across 500+ active apparel lines
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span> <strong>99.4% Automated AI optical camera</strong> inspection accuracy
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span> Instant defect alerts & automated cutting bed flaw markers
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span> Saves an average of <strong>$140,000 / year</strong> in fabric scrap per 50 lines
                </li>
            </ul>

            <button @click="demoModalOpen = true" class="mt-4 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base px-9 py-4 rounded-full shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all">
                Book Quality Control Demo
            </button>
        </div>

        <div class="lg:col-span-6 h-[460px] rounded-3xl bg-slate-950 border border-rose-500/40 overflow-hidden shadow-2xl relative group p-6 flex flex-col justify-between">
            <!-- Top HUD Label Bar -->
            <div class="flex items-center justify-between z-10">
                <span class="text-xs font-sans text-rose-300 font-semibold bg-slate-900/90 px-3.5 py-1.5 rounded-full border border-rose-500/40 backdrop-blur-md flex items-center gap-2 shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-rose-500"></span>
                    <span>AI OPTICAL CAMERA DEFECT SCANNER</span>
                </span>
                <span class="text-xs font-sans font-semibold text-emerald-300 bg-slate-900/90 px-3.5 py-1.5 rounded-full border border-emerald-500/40 backdrop-blur-md shadow-lg font-mono">99.4% ACCURACY</span>
            </div>

            <!-- Photorealistic Dedicated QC AI Scanner Image & Scan Overlay -->
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="{{ asset('images/products/qc-ai-scanner.jpg') }}" alt="AI Optical Camera Defect Scanner" class="w-full h-full object-cover">
                
                <!-- Laser Scan Beam -->
                <div class="laser-beam-red"></div>

                <!-- Animated AI Defect Detection Reticle Locking Box -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-52 h-40 border-2 border-rose-500/80 rounded-xl ai-target-box pointer-events-none flex flex-col justify-between p-2.5 shadow-[0_0_25px_rgba(244,63,94,0.5)]">
                    <div class="flex justify-between items-center">
                        <span class="w-3.5 h-3.5 border-t-2 border-l-2 border-rose-400"></span>
                        <span class="text-[9px] font-mono text-rose-300 bg-rose-950/85 px-2 py-0.5 rounded border border-rose-500/50">TARGET: FABRIC SCAN UNIT #17</span>
                        <span class="w-3.5 h-3.5 border-t-2 border-r-2 border-rose-400"></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="w-3.5 h-3.5 border-b-2 border-l-2 border-rose-400"></span>
                        <span class="text-[9px] font-mono text-emerald-400 font-bold bg-slate-950/85 px-2 py-0.5 rounded border border-emerald-500/40">STATUS: 0 STAINS / 0 SKIPS</span>
                        <span class="w-3.5 h-3.5 border-b-2 border-r-2 border-rose-400"></span>
                    </div>
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/15 to-slate-950/40 pointer-events-none"></div>
            </div>

            <!-- Bottom Live Telemetry HUD Card -->
            <div class="relative z-10 p-4 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-rose-400/40 text-white font-sans text-xs shadow-xl space-y-1.5 w-fit">
                <div class="flex items-center gap-2 text-rose-400 font-bold font-mono text-xs">
                    <span class="w-2 h-2 rounded-full bg-rose-400"></span>
                    OPTICAL VISION AI: STITCH &amp; FABRIC FLAW DETECTOR
                </div>
                <div class="text-xs text-slate-300">Throughput: <strong class="text-white font-mono">60 FPS Camera</strong> &bull; Scrap Savings: <strong class="text-emerald-400 font-mono">$140,000 / Year</strong></div>
                <div class="text-[11px] font-mono text-rose-300">Flaw Marker #QC-8821 Active Scanning</div>
            </div>
        </div>
    </div>
</div>
@endsection
