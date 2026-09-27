@extends('layouts.app')

@section('title', 'Production Tracking System (PTS) - Track Tech Solution')

@section('content')
<div class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto space-y-16">
    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        <span>Back to Overview</span>
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-6 space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 text-sky-800 text-xs font-sans font-bold uppercase">
                BUSINESS OUTCOME: +22% DAILY GARMENT THROUGHPUT
            </div>

            <h1 class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight leading-tight">
                Production Tracking & RFID Line Balancing
            </h1>

            <p class="text-lg text-slate-900 font-sans leading-relaxed">
                Transform physical sewing line bundles into real-time digital signals. RFID bundle tracking eliminates operator idle time, resolves workstation bottlenecks, and boosts plant daily output.
            </p>

            <ul class="space-y-3 pt-2 text-base text-slate-900 font-sans">
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> <strong>+22% Increase in daily garment throughput</strong> across sewing lines
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> <strong>100% Real-time WIP visibility</strong> from cutting room to final packing
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> Automated piece-rate tracking & worker incentive calculation
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> Eliminates paper bundle tracking disputes & shift delays
                </li>
            </ul>

            <button @click="demoModalOpen = true" class="mt-4 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base px-9 py-4 rounded-full shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all">
                Book Production Tracking Demo
            </button>
        </div>

        <div class="lg:col-span-6 h-[460px] rounded-3xl bg-slate-950 border border-sky-400/40 overflow-hidden shadow-2xl relative group p-6 flex flex-col justify-between">
            <!-- Top HUD Label Bar -->
            <div class="flex items-center justify-between z-10">
                <span class="text-xs font-sans text-sky-300 font-semibold bg-slate-900/90 px-3.5 py-1.5 rounded-full border border-sky-500/40 backdrop-blur-md flex items-center gap-2 shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                    <span>RFID LIVE WORKSTATION TELEMETRY</span>
                </span>
                <span class="text-xs font-sans font-semibold text-emerald-300 bg-slate-900/90 px-3.5 py-1.5 rounded-full border border-emerald-500/40 backdrop-blur-md shadow-lg font-mono">+22% THROUGHPUT</span>
            </div>

            <!-- Photorealistic Dedicated PTS Sewing Line Image & Overlay -->
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="{{ asset('images/products/pts-sewing-line.jpg') }}" alt="RFID Sewing Workstation Telemetry" class="w-full h-full object-cover">
                
                <!-- Laser Scan Beam -->
                <div class="laser-beam-h"></div>

                <!-- Animated RFID Active Node Trackers Overlay -->
                <div class="absolute inset-x-8 top-1/2 -translate-y-1/2 flex items-center justify-between pointer-events-none z-10">
                    <div class="p-2.5 rounded-xl bg-slate-900/90 border border-sky-400/60 text-white font-mono text-[10px] space-y-1 shadow-lg backdrop-blur-md">
                        <div class="text-sky-400 font-bold flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                            LINE 2 - WORKSTATION #14
                        </div>
                        <div class="text-slate-300">Bundle #8842 &bull; <strong class="text-emerald-400">148 pcs/hr</strong></div>
                    </div>

                    <div class="p-2.5 rounded-xl bg-slate-900/90 border border-emerald-400/60 text-white font-mono text-[10px] space-y-1 shadow-lg backdrop-blur-md">
                        <div class="text-emerald-400 font-bold flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            LINE 2 - WORKSTATION #15
                        </div>
                        <div class="text-slate-300">Bundle #8843 &bull; <strong class="text-emerald-400">BALANCED</strong></div>
                    </div>

                    <div class="p-2.5 rounded-xl bg-slate-900/90 border border-indigo-400/60 text-white font-mono text-[10px] space-y-1 shadow-lg backdrop-blur-md">
                        <div class="text-indigo-400 font-bold flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                            PACKING NODE
                        </div>
                        <div class="text-slate-300">Dispatch Batch &bull; <strong class="text-sky-300">READY</strong></div>
                    </div>
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/15 to-slate-950/40 pointer-events-none"></div>
            </div>

            <!-- Bottom Live Telemetry HUD Card -->
            <div class="relative z-10 p-4 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-emerald-400/40 text-white font-sans text-xs shadow-xl space-y-1.5 w-fit">
                <div class="flex items-center gap-2 text-emerald-400 font-bold font-mono text-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    LIVE SEWING LINE TELEMETRY: 340 HEADS CONNECTED
                </div>
                <div class="text-xs text-slate-300">Daily Output: <strong class="text-white font-mono">+22% Daily Throughput</strong> &bull; WIP Visibility: <strong class="text-emerald-400 font-mono">100% Real-Time</strong></div>
                <div class="text-[11px] font-mono text-emerald-300">Paperless RFID Bundle Tagging Active</div>
            </div>
        </div>
    </div>
</div>
@endsection
