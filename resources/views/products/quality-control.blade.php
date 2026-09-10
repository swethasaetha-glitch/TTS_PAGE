@extends('layouts.app')

@section('title', 'Quality Control AI Studio - Track Tech Solution')

@section('content')
<div class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto space-y-16">
    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-600 hover:text-sky-700">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        <span>Back to Overview</span>
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-6 space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 text-sky-700 text-xs font-sans font-semibold uppercase">
                Quality Control AI Software Studio
            </div>

            <h1 class="text-4xl sm:text-5xl font-bold text-sky-600 font-sans tracking-tight leading-tight">
                AI Vision Inspection & Defect Prevention Software
            </h1>

            <p class="text-lg text-slate-900 font-sans leading-relaxed">
                Eliminate re-works and customer rejections with automated vision AI inspection software. Our live software studio detects stitching flaws, fabric defects, and measurement deviations in real time.
            </p>

            <ul class="space-y-3 pt-2 text-base text-slate-900 font-sans">
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> Real-time AI fabric roll inspection logging
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> Automated AQL 1.5 pass/fail scoring engine
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> Instant defect alerts sent to shopfloor mobile tablets
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span> 35% reduction in overall garment re-works
                </li>
            </ul>

            <button @click="demoModalOpen = true" class="mt-4 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base px-9 py-4 rounded-full shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all">
                Book Quality Control Software Demo
            </button>
        </div>

        <div class="lg:col-span-6 h-[460px] rounded-3xl bg-slate-950 border border-sky-500/30 p-2 overflow-hidden shadow-2xl">
            <div id="qc-software-canvas" class="w-full h-full"></div>
            <div id="qc-3d-canvas" class="hidden"></div>
        </div>
    </div>
</div>
@endsection
