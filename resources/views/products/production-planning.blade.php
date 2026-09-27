@extends('layouts.app')

@section('title', 'Production Planning - Track Tech Solution')

@section('content')
<div class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto space-y-16">
    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        <span>Back to Overview</span>
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-6 space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-100 border border-indigo-200 text-indigo-800 text-xs font-sans font-bold uppercase">
                BUSINESS OUTCOME: 100% ON-TIME BUYER DISPATCH
            </div>

            <h1 class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight leading-tight">
                Smart Gantt Production Line Planner
            </h1>

            <p class="text-lg text-slate-900 font-sans leading-relaxed">
                Guaranteed buyer order delivery dates. Drag-and-drop dynamic Gantt scheduling balances line loading against real operator skill matrices to avoid bottleneck delays and costly air-freight penalties.
            </p>

            <ul class="space-y-3 pt-2 text-base text-slate-900 font-sans">
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span> <strong>100% On-Time Dispatch Rate</strong> for global apparel buyer orders
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span> <strong>Zero Late Delivery Penalties & Air-Freight Rush Costs</strong>
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span> AI-assisted operator skill matrix matching across style changeovers
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span> Multi-factory order capacity allocation & dispatch milestone tracking
                </li>
            </ul>

            <button @click="demoModalOpen = true" class="mt-4 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base px-9 py-4 rounded-full shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all">
                Book Planning Demo
            </button>
        </div>

        <div class="lg:col-span-6 h-[460px] rounded-3xl bg-slate-950 border border-indigo-500/40 overflow-hidden shadow-2xl relative group p-6 flex flex-col justify-between">
            <!-- Top HUD Label Bar -->
            <div class="flex items-center justify-between z-10">
                <span class="text-xs font-sans text-indigo-300 font-semibold bg-slate-900/90 px-3.5 py-1.5 rounded-full border border-indigo-500/40 backdrop-blur-md flex items-center gap-2 shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
                    <span>SAAS MULTI-FACILITY GANTT DISPATCH PLANNER</span>
                </span>
                <span class="text-xs font-sans font-semibold text-emerald-300 bg-slate-900/90 px-3.5 py-1.5 rounded-full border border-emerald-500/40 backdrop-blur-md shadow-lg font-mono">100% ON-TIME</span>
            </div>

            <!-- Photorealistic Dedicated Planning Command Center Image & Overlay -->
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="{{ asset('images/products/planning-command-center.jpg') }}" alt="Multi-Facility Production Planning Command Center" class="w-full h-full object-cover">
                
                <!-- Laser Scan Beam -->
                <div class="laser-beam-cyan"></div>

                <!-- Animated Multi-Factory Dispatch Grid Overlay -->
                <div class="absolute top-1/3 right-6 z-10 p-3.5 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-indigo-400/50 text-white font-mono text-xs shadow-xl space-y-2 w-72">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-bold text-indigo-400">GANTT CAPACITY ALLOCATION</span>
                        <span class="text-[9px] text-emerald-400 font-bold bg-emerald-950/80 px-1.5 py-0.5 rounded border border-emerald-500/40">0 DELAYS</span>
                    </div>

                    <div class="space-y-1.5 text-[10px]">
                        <div class="flex items-center justify-between text-slate-300">
                            <span>PLANT A (HANOI):</span>
                            <span class="text-indigo-300 font-bold">100% LOADED</span>
                        </div>
                        <div class="w-full bg-slate-800 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-indigo-500 h-full w-full"></div>
                        </div>

                        <div class="flex items-center justify-between text-slate-300 pt-1">
                            <span>PLANT B (COLOMBO):</span>
                            <span class="text-emerald-400 font-bold">DISPATCH READY</span>
                        </div>
                        <div class="w-full bg-slate-800 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-emerald-400 h-full w-[94%]"></div>
                        </div>
                    </div>
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/15 to-slate-950/40 pointer-events-none"></div>
            </div>

            <!-- Bottom Live Telemetry HUD Card -->
            <div class="relative z-10 p-4 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-indigo-400/40 text-white font-sans text-xs shadow-xl space-y-1.5 w-fit">
                <div class="flex items-center gap-2 text-indigo-400 font-bold font-mono text-xs">
                    <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
                    EXECUTIVE COMMAND CENTER: 25 GLOBAL HUBS SYNCED
                </div>
                <div class="text-xs text-slate-300">Buyer Delivery: <strong class="text-white font-mono">0 Late Deliveries</strong> &bull; Penalties: <strong class="text-emerald-400 font-mono">$0 Air Freight Rush</strong></div>
                <div class="text-[11px] font-mono text-indigo-300">Order Dispatch Batch #EXP-2026 Scheduled</div>
            </div>
        </div>
    </div>
</div>
@endsection
