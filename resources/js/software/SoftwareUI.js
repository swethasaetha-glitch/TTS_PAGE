/**
 * Track Tech Solution — High-Tech Software UI Dashboard Animations & Simulations
 * Replaces abstract 3D shapes with realistic Garment Manufacturing Software UIs.
 */

// Global active interval handles for cleanup
let activeIntervals = [];

function clearSoftwareIntervals() {
    activeIntervals.forEach(id => clearInterval(id));
    activeIntervals = [];
}

/**
 * 1. AI QUALITY CONTROL SOFTWARE STUDIO
 */
export function initQualityControlSoftware(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    clearSoftwareIntervals();

    container.innerHTML = `
        <div class="w-full h-full bg-slate-900 rounded-2xl border border-sky-500/30 overflow-hidden shadow-2xl flex flex-col font-sans text-white">
            <!-- Software App Title Bar -->
            <div class="px-5 py-3 bg-slate-950 border-b border-slate-800 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="flex gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-500/80 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-500/80 inline-block"></span>
                    </div>
                    <span class="text-xs font-semibold tracking-wide text-slate-300">TTS Quality AI Vision Studio v4.2</span>
                </div>
                <div class="flex items-center gap-2 text-[11px] bg-sky-500/20 text-sky-400 border border-sky-500/40 px-3 py-1 rounded-full font-mono">
                    <span class="w-2 h-2 rounded-full bg-sky-400 animate-ping"></span>
                    <span>LIVE AI CAMERA STREAM — LINE 04</span>
                </div>
            </div>

            <!-- Software Main Workspace Grid -->
            <div class="flex-grow grid grid-cols-1 lg:grid-cols-12 p-4 sm:p-6 gap-4 sm:gap-6 bg-slate-900/90 overflow-y-auto">
                <!-- Left: Interactive AI Camera Viewport (Canvas) -->
                <div class="lg:col-span-7 relative bg-slate-950 rounded-xl border border-sky-500/20 overflow-hidden flex flex-col justify-between min-h-[280px]">
                    <canvas id="qc-canvas" class="absolute inset-0 w-full h-full object-cover z-0"></canvas>
                    
                    <!-- Top Overlay Info -->
                    <div class="relative z-10 p-3 flex justify-between items-start bg-gradient-to-b from-slate-950/90 to-transparent">
                        <div class="text-xs font-mono text-emerald-400 bg-slate-900/80 border border-emerald-500/30 px-2.5 py-1 rounded">
                            FPS: 60 | FPS DROP: 0 | LATENCY: 12ms
                        </div>
                        <div class="text-xs font-mono text-sky-400 bg-sky-950/80 border border-sky-500/30 px-2.5 py-1 rounded">
                            AI CONFIDENCE: 99.4%
                        </div>
                    </div>

                    <!-- Bottom Overlay Log -->
                    <div class="relative z-10 p-3 bg-gradient-to-t from-slate-950/95 to-transparent flex justify-between items-center text-xs">
                        <div class="flex items-center gap-2">
                            <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 font-bold font-mono">PASS AQL 1.5</span>
                            <span class="text-slate-300">Fabric Roll #8492-B</span>
                        </div>
                        <span id="qc-timestamp" class="text-slate-400 font-mono"></span>
                    </div>
                </div>

                <!-- Right: Analytics & Defect Stream Panel -->
                <div class="lg:col-span-5 flex flex-col justify-between space-y-4">
                    <!-- Metrics Cards -->
                    <div class="grid grid-cols-2 gap-3">
                        <div class="p-3.5 rounded-xl bg-slate-950/80 border border-slate-800">
                            <div class="text-[11px] text-slate-400 font-medium uppercase tracking-wider">Pass Rate</div>
                            <div class="text-2xl font-bold text-emerald-400 font-mono mt-0.5">98.6%</div>
                            <div class="text-[10px] text-emerald-400/80 mt-1">↑ 2.4% vs Manual Inspection</div>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-950/80 border border-slate-800">
                            <div class="text-[11px] text-slate-400 font-medium uppercase tracking-wider">Defects Prevented</div>
                            <div class="text-2xl font-bold text-sky-400 font-mono mt-0.5">1,248</div>
                            <div class="text-[10px] text-sky-400/80 mt-1">This Shift</div>
                        </div>
                    </div>

                    <!-- Live Defect Event Feed -->
                    <div class="p-4 rounded-xl bg-slate-950/90 border border-slate-800 space-y-3 flex-grow">
                        <div class="text-xs font-semibold text-slate-300 uppercase tracking-wider border-b border-slate-800 pb-2 flex justify-between">
                            <span>Real-Time Defect Log</span>
                            <span class="text-sky-400 text-[10px]">LIVE UPDATES</span>
                        </div>
                        <div id="qc-log-list" class="space-y-2 text-xs font-mono max-h-[140px] overflow-y-auto">
                            <!-- Injected by script -->
                        </div>
                    </div>

                    <!-- Action Control -->
                    <div class="p-3 rounded-xl bg-sky-950/40 border border-sky-500/30 flex items-center justify-between text-xs">
                        <span class="text-sky-300 font-medium">Auto-Stop Conveyor on Major Defect</span>
                        <div class="w-8 h-4 bg-sky-500 rounded-full relative p-0.5 cursor-pointer">
                            <div class="w-3 h-3 bg-white rounded-full ml-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;

    // Canvas Laser Scan Animation
    const canvas = document.getElementById('qc-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let scanY = 0;
    let animId;

    const resizeCanvas = () => {
        canvas.width = canvas.parentElement.clientWidth;
        canvas.height = canvas.parentElement.clientHeight;
    };
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    // Defect boxes
    const defects = [
        { x: 0.2, y: 0.3, w: 0.25, h: 0.2, label: 'STITCH FLAW 99%', color: '#ef4444' },
        { x: 0.6, y: 0.6, w: 0.2, h: 0.18, label: 'SHADE VARIANCE 97%', color: '#f59e0b' },
    ];

    function drawQC() {
        ctx.fillStyle = '#020617';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Draw Fabric Texture Grid
        ctx.strokeStyle = '#1e293b';
        ctx.lineWidth = 1;
        const step = 20;
        for (let x = 0; x < canvas.width; x += step) {
            ctx.beginPath();
            ctx.moveTo(x, 0);
            ctx.lineTo(x, canvas.height);
            ctx.stroke();
        }
        for (let y = 0; y < canvas.height; y += step) {
            ctx.beginPath();
            ctx.moveTo(0, y);
            ctx.lineTo(canvas.width, y);
            ctx.stroke();
        }

        // Draw Laser Scan Line
        scanY += 2;
        if (scanY > canvas.height) scanY = 0;

        ctx.shadowColor = '#38bdf8';
        ctx.shadowBlur = 15;
        ctx.strokeStyle = '#38bdf8';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.moveTo(0, scanY);
        ctx.lineTo(canvas.width, scanY);
        ctx.stroke();
        ctx.shadowBlur = 0;

        // Draw Laser Glow Overlay
        const grad = ctx.createLinearGradient(0, scanY - 30, 0, scanY);
        grad.addColorStop(0, 'rgba(56, 189, 248, 0)');
        grad.addColorStop(1, 'rgba(56, 189, 248, 0.25)');
        ctx.fillStyle = grad;
        ctx.fillRect(0, scanY - 30, canvas.width, 30);

        // Draw Defect Bounding Boxes
        defects.forEach(d => {
            const bx = d.x * canvas.width;
            const by = d.y * canvas.height;
            const bw = d.w * canvas.width;
            const bh = d.h * canvas.height;

            ctx.strokeStyle = d.color;
            ctx.lineWidth = 2;
            ctx.strokeRect(bx, by, bw, bh);

            ctx.fillStyle = d.color;
            ctx.fillRect(bx, by - 18, bw, 18);

            ctx.fillStyle = '#ffffff';
            ctx.font = '10px monospace';
            ctx.fillText(d.label, bx + 4, by - 5);
        });

        animId = requestAnimationFrame(drawQC);
    }
    drawQC();

    // Populate Defect Log Feed
    const logList = document.getElementById('qc-log-list');
    const logs = [
        { time: '18:42:01', type: 'Stitch Skip', line: 'Line 04', status: 'Flagged', color: 'text-red-400' },
        { time: '18:41:45', type: 'Needle Cut', line: 'Line 02', status: 'Corrected', color: 'text-amber-400' },
        { time: '18:40:12', type: 'Fabric Stain', line: 'Line 08', status: 'Logged', color: 'text-sky-400' },
        { time: '18:38:50', type: 'Thread Tension', line: 'Line 01', status: 'Passed', color: 'text-emerald-400' },
    ];

    if (logList) {
        logList.innerHTML = logs.map(l => `
            <div class="flex justify-between items-center bg-slate-900/60 p-2 rounded border border-slate-800">
                <span class="text-slate-400">${l.time}</span>
                <span class="text-slate-200 font-semibold">${l.type}</span>
                <span class="${l.color}">${l.status}</span>
            </div>
        `).join('');
    }

    const tsEl = document.getElementById('qc-timestamp');
    if (tsEl) {
        const timer = setInterval(() => {
            tsEl.innerText = new Date().toLocaleTimeString();
        }, 1000);
        activeIntervals.push(timer);
    }

    return () => {
        cancelAnimationFrame(animId);
        window.removeEventListener('resize', resizeCanvas);
        clearSoftwareIntervals();
    };
}


/**
 * 2. PRODUCTION TRACKING SYSTEM (PTS) COMMAND CENTER
 */
export function initProductionTrackingSoftware(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    clearSoftwareIntervals();

    container.innerHTML = `
        <div class="w-full h-full bg-slate-900 rounded-2xl border border-sky-500/30 overflow-hidden shadow-2xl flex flex-col font-sans text-white">
            <!-- App Header -->
            <div class="px-5 py-3 bg-slate-950 border-b border-slate-800 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold tracking-wide text-slate-300">TTS Production Control Command Center v4.2</span>
                </div>
                <div class="flex items-center gap-2 text-[11px] bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 px-3 py-1 rounded-full font-mono">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>12/12 SEWING LINES ACTIVE</span>
                </div>
            </div>

            <!-- Command Center Body -->
            <div class="flex-grow p-4 sm:p-6 space-y-4 bg-slate-900/90 overflow-y-auto">
                <!-- Top Summary Metrics -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <div class="p-3.5 rounded-xl bg-slate-950 border border-slate-800">
                        <div class="text-[11px] text-slate-400 uppercase font-medium">Target Pcs (Today)</div>
                        <div class="text-2xl font-bold text-white font-mono mt-0.5">24,000</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-slate-950 border border-slate-800">
                        <div class="text-[11px] text-slate-400 uppercase font-medium">Actual Checked</div>
                        <div class="text-2xl font-bold text-sky-400 font-mono mt-0.5" id="pts-actual">19,840</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-slate-950 border border-slate-800">
                        <div class="text-[11px] text-slate-400 uppercase font-medium">Shopfloor Efficiency</div>
                        <div class="text-2xl font-bold text-emerald-400 font-mono mt-0.5">92.4%</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-slate-950 border border-slate-800">
                        <div class="text-[11px] text-slate-400 uppercase font-medium">RFID Scan Rate</div>
                        <div class="text-2xl font-bold text-indigo-400 font-mono mt-0.5">480 scans/m</div>
                    </div>
                </div>

                <!-- Live Sewing Line Grid -->
                <div class="bg-slate-950 rounded-xl border border-slate-800 p-4 space-y-3">
                    <div class="flex justify-between items-center border-b border-slate-800 pb-2">
                        <span class="text-xs font-semibold text-slate-300 uppercase tracking-wider">Live Sewing Line Telemetry</span>
                        <span class="text-[11px] text-sky-400 font-mono">UPDATED 1 sec ago</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 text-xs font-mono">
                        <!-- Line 01 -->
                        <div class="p-3 rounded-lg bg-slate-900 border border-emerald-500/30 space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-white">LINE 01 — DENIM JACKETS</span>
                                <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 text-[10px]">96% OPTIMAL</span>
                            </div>
                            <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
                                <div class="bg-emerald-500 h-full w-[96%]"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-400">
                                <span>Output: 1,840 / 1,900 pcs</span>
                                <span>Op Eff: 94%</span>
                            </div>
                        </div>

                        <!-- Line 02 -->
                        <div class="p-3 rounded-lg bg-slate-900 border border-sky-500/30 space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-white">LINE 02 — POLO SHIRTS</span>
                                <span class="px-2 py-0.5 rounded bg-sky-500/20 text-sky-400 text-[10px]">91% RUNNING</span>
                            </div>
                            <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
                                <div class="bg-sky-400 h-full w-[91%]"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-400">
                                <span>Output: 2,100 / 2,300 pcs</span>
                                <span>Op Eff: 90%</span>
                            </div>
                        </div>

                        <!-- Line 03 -->
                        <div class="p-3 rounded-lg bg-slate-900 border border-amber-500/30 space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-white">LINE 03 — WOVEN TROUSERS</span>
                                <span class="px-2 py-0.5 rounded bg-amber-500/20 text-amber-400 text-[10px]">BOTTLENECK</span>
                            </div>
                            <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
                                <div class="bg-amber-400 h-full w-[74%]"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-400">
                                <span>Output: 1,480 / 2,000 pcs</span>
                                <span>Op Eff: 76%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RFID Live Event Log Stream -->
                <div class="p-3.5 rounded-xl bg-slate-950 border border-slate-800 text-xs font-mono flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="px-2 py-1 rounded bg-sky-500/20 text-sky-400 font-bold">RFID SCAN #90218</span>
                        <span class="text-slate-300">Bundle #4829 -> Station 14 (Sleeve Hemming)</span>
                    </div>
                    <span class="text-emerald-400 font-semibold">VERIFIED</span>
                </div>
            </div>
        </div>
    `;

    // Dynamic Actual Counter Animation
    const actualEl = document.getElementById('pts-actual');
    if (actualEl) {
        let val = 19840;
        const timer = setInterval(() => {
            val += Math.floor(Math.random() * 3) + 1;
            actualEl.innerText = val.toLocaleString();
        }, 2000);
        activeIntervals.push(timer);
    }

    return () => clearSoftwareIntervals();
}


/**
 * 3. MACHINE MAINTENANCE & OEE SOFTWARE
 */
export function initMachineMaintenanceSoftware(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    clearSoftwareIntervals();

    container.innerHTML = `
        <div class="w-full h-full bg-slate-900 rounded-2xl border border-sky-500/30 overflow-hidden shadow-2xl flex flex-col font-sans text-white">
            <!-- App Header -->
            <div class="px-5 py-3 bg-slate-950 border-b border-slate-800 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold tracking-wide text-slate-300">TTS Machine Health & OEE Telemetry v4.2</span>
                </div>
                <div class="flex items-center gap-2 text-[11px] bg-sky-500/20 text-sky-400 border border-sky-500/40 px-3 py-1 rounded-full font-mono">
                    <span>94.8% OVERALL OEE</span>
                </div>
            </div>

            <!-- Main Workspace -->
            <div class="flex-grow p-4 sm:p-6 grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-6 bg-slate-900/90 overflow-y-auto">
                <!-- Gauge & Telemetry View -->
                <div class="lg:col-span-8 bg-slate-950 rounded-xl border border-slate-800 p-5 space-y-5">
                    <div class="flex justify-between items-center border-b border-slate-800 pb-3">
                        <div>
                            <div class="text-sm font-bold text-white">SEWING MOTOR #M-408 (JUKI DDL-9000C)</div>
                            <div class="text-xs text-slate-400 font-mono">Location: Line 04 - Station 08</div>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-mono font-semibold">STATUS: HEALTHY</span>
                    </div>

                    <!-- Telemetry Gauges Row -->
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 space-y-1">
                            <div class="text-xs text-slate-400">Motor Temp</div>
                            <div class="text-2xl font-bold text-emerald-400 font-mono" id="oee-temp">42°C</div>
                            <div class="text-[10px] text-slate-500">Normal Range (&lt;65°C)</div>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 space-y-1">
                            <div class="text-xs text-slate-400">Vibration (Hz)</div>
                            <div class="text-2xl font-bold text-sky-400 font-mono">1.2 g</div>
                            <div class="text-[10px] text-slate-500">Optimal Smoothness</div>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 space-y-1">
                            <div class="text-xs text-slate-400">Run Time (Shift)</div>
                            <div class="text-2xl font-bold text-indigo-400 font-mono">7h 42m</div>
                            <div class="text-[10px] text-slate-500">Zero Unplanned Stops</div>
                        </div>
                    </div>

                    <!-- Simulated Real-Time Vibration Spectrum Graph -->
                    <div class="space-y-2">
                        <div class="flex justify-between text-xs text-slate-400">
                            <span>Vibration Spectrum Telemetry Stream</span>
                            <span class="font-mono text-sky-400">Sampling 100Hz</span>
                        </div>
                        <div class="h-24 bg-slate-900 rounded-lg border border-slate-800 relative overflow-hidden flex items-end px-2 pb-2 gap-1" id="vibe-graph">
                            <!-- Bars injected by JS -->
                        </div>
                    </div>
                </div>

                <!-- Right Predictive Alerts -->
                <div class="lg:col-span-4 space-y-4 flex flex-col justify-between">
                    <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 space-y-3">
                        <div class="text-xs font-semibold text-slate-300 uppercase tracking-wider border-b border-slate-800 pb-2">
                            Predictive Maintenance Alerts
                        </div>

                        <div class="space-y-2.5 text-xs">
                            <div class="p-3 rounded-lg bg-amber-500/10 border border-amber-500/30 text-amber-300 space-y-1">
                                <div class="font-bold flex justify-between">
                                    <span>Motor #M-102 Oil Lubrication</span>
                                    <span>In 14 hrs</span>
                                </div>
                                <div class="text-[11px] text-amber-200/80">Automated service ticket generated for Maintenance Tech Team.</div>
                            </div>

                            <div class="p-3 rounded-lg bg-slate-900 border border-slate-800 text-slate-300 space-y-1">
                                <div class="font-bold flex justify-between">
                                    <span>Needle Bar Bushing #M-204</span>
                                    <span>In 5 days</span>
                                </div>
                                <div class="text-[11px] text-slate-400">Routine wear detected via vibration harmonics.</div>
                            </div>
                        </div>
                    </div>

                    <button class="w-full py-3 rounded-xl bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-semibold text-xs shadow-lg transition-all">
                        Schedule Preventive Maintenance Shift
                    </button>
                </div>
            </div>
        </div>
    `;

    // Vibration Graph Animation
    const vibeGraph = document.getElementById('vibe-graph');
    if (vibeGraph) {
        for (let i = 0; i < 35; i++) {
            const bar = document.createElement('div');
            bar.className = 'flex-1 bg-sky-500/60 rounded-t transition-all duration-300';
            bar.style.height = `${Math.floor(Math.random() * 70) + 15}%`;
            vibeGraph.appendChild(bar);
        }

        const timer = setInterval(() => {
            Array.from(vibeGraph.children).forEach(bar => {
                bar.style.height = `${Math.floor(Math.random() * 75) + 15}%`;
            });
        }, 400);
        activeIntervals.push(timer);
    }

    return () => clearSoftwareIntervals();
}


/**
 * 4. SMART PRODUCTION PLANNING GANTT SOFTWARE
 */
export function initProductionPlanningSoftware(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    clearSoftwareIntervals();

    container.innerHTML = `
        <div class="w-full h-full bg-slate-900 rounded-2xl border border-sky-500/30 overflow-hidden shadow-2xl flex flex-col font-sans text-white">
            <!-- App Header -->
            <div class="px-5 py-3 bg-slate-950 border-b border-slate-800 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold tracking-wide text-slate-300">TTS Smart Gantt Production Planner v4.2</span>
                </div>
                <div class="flex items-center gap-2 text-[11px] bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 px-3 py-1 rounded-full font-mono">
                    <span>99.2% ON-TIME SHIPMENT CAPACITY</span>
                </div>
            </div>

            <!-- Gantt Workspace -->
            <div class="flex-grow p-4 sm:p-6 space-y-4 bg-slate-900/90 overflow-y-auto font-mono text-xs">
                <!-- Timeline Header -->
                <div class="grid grid-cols-12 gap-2 bg-slate-950 p-3 rounded-xl border border-slate-800 text-slate-400 font-semibold text-center">
                    <div class="col-span-3 text-left">LINE / ORDER STYLE</div>
                    <div class="col-span-2">MON</div>
                    <div class="col-span-2">TUE</div>
                    <div class="col-span-2">WED</div>
                    <div class="col-span-2">THU</div>
                    <div class="col-span-1">FRI</div>
                </div>

                <!-- Gantt Row 1 -->
                <div class="grid grid-cols-12 gap-2 bg-slate-950 p-3 rounded-xl border border-slate-800 items-center">
                    <div class="col-span-3 font-bold text-white font-sans">
                        LINE 01
                        <div class="text-[10px] text-slate-400 font-normal">Order #PO-9821 (Zara Denim)</div>
                    </div>
                    <div class="col-span-8 bg-sky-500/20 border border-sky-500/50 p-2 rounded-lg text-sky-300 text-[11px] flex justify-between items-center">
                        <span>Sewing & Finishing Batch (12,000 pcs)</span>
                        <span class="px-2 py-0.5 rounded bg-sky-500 text-white font-bold text-[10px]">ON SCHEDULE</span>
                    </div>
                    <div class="col-span-1 text-center text-emerald-400 font-bold">100%</div>
                </div>

                <!-- Gantt Row 2 -->
                <div class="grid grid-cols-12 gap-2 bg-slate-950 p-3 rounded-xl border border-slate-800 items-center">
                    <div class="col-span-3 font-bold text-white font-sans">
                        LINE 04
                        <div class="text-[10px] text-slate-400 font-normal">Order #PO-7740 (H&M Hoodie)</div>
                    </div>
                    <div class="col-span-6 col-start-4 bg-emerald-500/20 border border-emerald-500/50 p-2 rounded-lg text-emerald-300 text-[11px] flex justify-between items-center">
                        <span>Fabric Spreading & Cutting</span>
                        <span class="px-2 py-0.5 rounded bg-emerald-500 text-white font-bold text-[10px]">AHEAD BY 2 HOURS</span>
                    </div>
                    <div class="col-span-3 text-center text-slate-500">NEXT: PACKING</div>
                </div>

                <!-- Gantt Row 3 -->
                <div class="grid grid-cols-12 gap-2 bg-slate-950 p-3 rounded-xl border border-slate-800 items-center">
                    <div class="col-span-3 font-bold text-white font-sans">
                        LINE 08
                        <div class="text-[10px] text-slate-400 font-normal">Order #PO-4412 (Polo Ralph)</div>
                    </div>
                    <div class="col-span-7 col-start-5 bg-amber-500/20 border border-amber-500/50 p-2 rounded-lg text-amber-300 text-[11px] flex justify-between items-center">
                        <span>Needle Skill Re-allocation</span>
                        <span class="px-2 py-0.5 rounded bg-amber-500 text-white font-bold text-[10px]">CAPACITY OPTIMIZED</span>
                    </div>
                </div>

                <!-- Bottom Summary -->
                <div class="p-3.5 rounded-xl bg-slate-950 border border-slate-800 flex justify-between items-center text-slate-300 font-sans">
                    <span>AI Gantt Auto-Optimization: <strong class="text-sky-400">Enabled</strong></span>
                    <button class="px-4 py-2 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-semibold">
                        Re-balance Shopfloor Capacity
                    </button>
                </div>
            </div>
        </div>
    `;

    return () => clearSoftwareIntervals();
}
