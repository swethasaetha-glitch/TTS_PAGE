@extends('layouts.app')

@section('title', 'Machine Maintenance (OEE) - Track Tech Solution')

@section('content')
<div class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto space-y-16">
    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        <span>Back to Overview</span>
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 text-sky-700 text-xs font-serif font-semibold uppercase">
                Machine Maintenance (OEE)
            </div>

            <h1 class="text-4xl sm:text-5xl font-bold text-sky-600 font-serif tracking-tight leading-tight">
                Predictive Maintenance & OEE Tracking
            </h1>

            <p class="text-lg text-slate-900 font-serif leading-relaxed">
                Maximized Uptime: Unlock the full potential of your sewing machines, cutting equipment, and finishing units. Monitor Overall Equipment Effectiveness (OEE) with predictive maintenance.
            </p>

            <ul class="space-y-3 pt-2 text-base text-slate-900 font-serif">
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> Real-time machine run-hour & vibration telemetry
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> Predictive motor & needle failure prevention
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> Instant technician work-order dispatch
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> 37% overall equipment effectiveness (OEE) boost
                </li>
            </ul>

            <button @click="demoModalOpen = true" class="mt-4 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base px-9 py-4 rounded-full shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all">
                Book Maintenance Demo
            </button>
        </div>

        <div class="lg:col-span-5 h-[440px] rounded-3xl bg-white border border-sky-200 p-6 overflow-hidden shadow-xl">
            <div class="text-xs font-serif text-sky-700 font-semibold mb-2">3D INTERLOCKED GEAR SYSTEM</div>
            <div id="oee-3d-canvas" class="w-full h-full cursor-grab active:cursor-grabbing"></div>
        </div>
    </div>
</div>
@endsection
