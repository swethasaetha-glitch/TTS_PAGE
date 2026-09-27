@extends('layouts.app')

@section('title', 'Machine Maintenance (OEE) - Track Tech Solution')

@section('content')
<div class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto space-y-16">
    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        <span>Back to Overview</span>
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-6 space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-100 border border-amber-200 text-amber-800 text-xs font-sans font-bold uppercase">
                BUSINESS OUTCOME: 98.4% MACHINE UPTIME (82% DOWNTIME CUT)
            </div>

            <h1 class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight leading-tight">
                Machine Maintenance & OEE Telemetry
            </h1>

            <p class="text-lg text-slate-900 font-sans leading-relaxed">
                Prevent sudden sewing machine breakdowns before they paralyze production lines. IoT vibration and thermal sensors stream motor health metrics to predict failures up to 48 hours in advance.
            </p>

            <ul class="space-y-3 pt-2 text-base text-slate-900 font-sans">
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span> <strong>98.4% Machine Uptime Score</strong> maintained across active plants
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span> <strong>82% Reduction in unexpected sewing line downtime</strong>
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span> 48-Hour predictive early warning alerts for motor & needle bushing wear
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span> Automated preventive maintenance tickets sent to technician mobile apps
                </li>
            </ul>

            <button @click="demoModalOpen = true" class="mt-4 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base px-9 py-4 rounded-full shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all">
                Book Maintenance Demo
            </button>
        </div>

        <div class="lg:col-span-6 h-[460px] rounded-3xl bg-slate-950 border border-amber-500/40 overflow-hidden shadow-2xl relative group p-6 flex flex-col justify-between">
            <!-- Top HUD Label Bar -->
            <div class="flex items-center justify-between z-10">
                <span class="text-xs font-sans text-amber-300 font-semibold bg-slate-900/90 px-3.5 py-1.5 rounded-full border border-amber-500/40 backdrop-blur-md flex items-center gap-2 shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    <span>PREDICTIVE OEE MOTOR TELEMETRY</span>
                </span>
                <span class="text-xs font-sans font-semibold text-emerald-300 bg-slate-900/90 px-3.5 py-1.5 rounded-full border border-emerald-500/40 backdrop-blur-md shadow-lg font-mono">98.4% UPTIME</span>
            </div>

            <!-- Photorealistic Dedicated OEE Motor Telemetry Image & Overlay -->
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="{{ asset('images/products/oee-motor-telemetry.jpg') }}" alt="Predictive Gear Shaft Motor Telemetry" class="w-full h-full object-cover">
                
                <!-- Laser Scan Beam -->
                <div class="laser-beam-v"></div>

                <!-- Live Motor Vibration Spectrum Analysis Animated Overlay -->
                <div class="absolute bottom-20 right-6 z-10 p-3 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-amber-400/50 text-white font-mono text-xs shadow-xl space-y-2 w-72">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-bold text-amber-400">GEAR DRIVE TELEMETRY UNIT</span>
                        <span class="text-[9px] text-emerald-400 bg-emerald-950/80 px-1.5 py-0.5 rounded border border-emerald-500/40">BEARING: HEALTHY</span>
                    </div>

                    <!-- CSS Equalizer Spectrum Bars -->
                    <div class="flex items-end gap-1.5 h-8 pt-1">
                        <div class="w-2 bg-amber-400 rounded-t eq-bar-1"></div>
                        <div class="w-2 bg-amber-300 rounded-t eq-bar-2"></div>
                        <div class="w-2 bg-emerald-400 rounded-t eq-bar-3"></div>
                        <div class="w-2 bg-amber-400 rounded-t eq-bar-4"></div>
                        <div class="w-2 bg-emerald-300 rounded-t eq-bar-5"></div>
                        <div class="w-2 bg-amber-400 rounded-t eq-bar-2"></div>
                        <div class="w-2 bg-sky-400 rounded-t eq-bar-1"></div>
                        <div class="w-2 bg-emerald-400 rounded-t eq-bar-3"></div>
                        <div class="w-2 bg-amber-400 rounded-t eq-bar-4"></div>
                    </div>
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/15 to-slate-950/40 pointer-events-none"></div>
            </div>

            <!-- Bottom Live Telemetry HUD Card -->
            <div class="relative z-10 p-4 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-amber-400/40 text-white font-sans text-xs shadow-xl space-y-1.5 w-fit">
                <div class="flex items-center gap-2 text-amber-400 font-bold font-mono text-xs">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    OEE PREDICTIVE SENSOR: GEARBOX &amp; BUSHING DIAGNOSTICS
                </div>
                <div class="text-xs text-slate-300">Downtime Cut: <strong class="text-white font-mono">82% Breakdown Reduction</strong> &bull; Early Warning: <strong class="text-amber-400 font-mono">48 Hours Ahead</strong></div>
                <div class="text-[11px] font-mono text-amber-300">Predictive Maintenance Alerts Synced to Mobile App</div>
            </div>
        </div>
    </div>
</div>
@endsection
