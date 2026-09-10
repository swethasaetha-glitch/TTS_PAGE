<div x-data="{ telemetryModalOpen: false, data: {} }"
     @open-3d-telemetry.window="telemetryModalOpen = true; data = $event.detail || {}"
     x-show="telemetryModalOpen"
     x-cloak
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-lg"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 scale-95"
     x-transition:enter-end="opacity-100 scale-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 scale-100"
     x-transition:leave-end="opacity-0 scale-95">

    <div class="relative w-full max-w-3xl bg-slate-900 border border-sky-500/40 rounded-3xl p-6 md:p-8 shadow-2xl text-white space-y-6 max-h-[90vh] overflow-y-auto"
         @click.outside="telemetryModalOpen = false">

        <!-- Close Button -->
        <button @click="telemetryModalOpen = false" class="absolute top-5 right-5 p-2 rounded-full bg-slate-800 text-slate-400 hover:text-white hover:bg-slate-700 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <!-- Header -->
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 rounded-2xl bg-sky-500/20 border border-sky-400/40 text-sky-400 flex items-center justify-center font-bold">
                <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
            </div>
            <div>
                <div class="flex items-center gap-2 text-xs font-mono uppercase tracking-widest text-sky-400 font-semibold">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-ping"></span>
                    <span>TTS Quality AI Vision Studio v4.2</span>
                </div>
                <h3 class="text-2xl font-bold font-sans text-white" x-text="data.title || '3D Telemetry Live Studio Inspection'"></h3>
            </div>
        </div>

        <!-- Telemetry Stats Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 font-mono">
            <div class="p-4 rounded-2xl bg-slate-950/80 border border-sky-500/20 text-center">
                <div class="text-xs text-slate-400 font-sans">FPS / LATENCY</div>
                <div class="text-xl font-bold text-sky-400 mt-1">60 <span class="text-xs text-slate-400">FPS</span></div>
                <div class="text-[10px] text-green-400 mt-0.5">12ms Latency</div>
            </div>

            <div class="p-4 rounded-2xl bg-slate-950/80 border border-sky-500/20 text-center">
                <div class="text-xs text-slate-400 font-sans">AI CONFIDENCE</div>
                <div class="text-xl font-bold text-sky-400 mt-1">99.4%</div>
                <div class="text-[10px] text-sky-300 mt-0.5">PASS AQL 1.5</div>
            </div>

            <div class="p-4 rounded-2xl bg-slate-950/80 border border-sky-500/20 text-center">
                <div class="text-xs text-slate-400 font-sans">PASS RATE</div>
                <div class="text-xl font-bold text-sky-400 mt-1">98.6%</div>
                <div class="text-[10px] text-green-400 mt-0.5">↑ 2.4% vs Manual</div>
            </div>

            <div class="p-4 rounded-2xl bg-slate-950/80 border border-sky-500/20 text-center">
                <div class="text-xs text-slate-400 font-sans">DEFECTS PREVENTED</div>
                <div class="text-xl font-bold text-sky-400 mt-1">1,248</div>
                <div class="text-[10px] text-sky-300 mt-0.5">This Shift</div>
            </div>
        </div>

        <!-- Live Real-Time Log Stream Table -->
        <div class="space-y-3 font-sans">
            <div class="flex items-center justify-between text-xs font-semibold text-slate-300 uppercase tracking-wider">
                <span>Real-Time Telemetry Log</span>
                <span class="text-sky-400 font-mono">LIVE UPDATES ACTIVE</span>
            </div>

            <div class="rounded-2xl bg-slate-950 border border-sky-500/20 overflow-hidden divide-y divide-slate-800 text-xs font-mono">
                <div class="p-3.5 flex items-center justify-between hover:bg-slate-900/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <span class="text-slate-400">18:42:01</span>
                        <span class="text-sky-400 font-bold">Stitch Skip Defect</span>
                    </div>
                    <span class="px-2.5 py-1 rounded-full bg-amber-500/20 text-amber-300 border border-amber-500/30">FLAGGED & CORRECTED</span>
                </div>

                <div class="p-3.5 flex items-center justify-between hover:bg-slate-900/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <span class="text-slate-400">18:41:45</span>
                        <span class="text-sky-400 font-bold">Needle Bushing Wear</span>
                    </div>
                    <span class="px-2.5 py-1 rounded-full bg-sky-500/20 text-sky-300 border border-sky-500/30">PREDICTIVE MAINT LOGGED</span>
                </div>

                <div class="p-3.5 flex items-center justify-between hover:bg-slate-900/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <span class="text-slate-400">18:40:12</span>
                        <span class="text-sky-400 font-bold">Fabric Roll #8492-B</span>
                    </div>
                    <span class="px-2.5 py-1 rounded-full bg-green-500/20 text-green-300 border border-green-500/30">PASS AQL 1.5</span>
                </div>
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="pt-4 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-slate-400 font-sans">Experience full shopfloor digital intelligence in action.</p>
            <div class="flex items-center gap-3 w-full sm:w-auto">
                <button @click="telemetryModalOpen = false" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Close Inspection</button>
                <button @click="telemetryModalOpen = false; demoModalOpen = true" class="w-full sm:w-auto px-6 py-3 rounded-xl bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-bold text-xs shadow-lg shadow-sky-500/25 transition-all">Book Personal Walkthrough</button>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\sweth\OneDrive\Desktop\Trach_Tech_Solution\main_page\resources\views/partials/telemetry-modal.blade.php ENDPATH**/ ?>