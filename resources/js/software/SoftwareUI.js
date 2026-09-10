/**
 * Track Tech Solution — Monday.com Style Light SaaS Software Product Boards
 * Clean, bright, modern UI dashboards with vibrant pastel status pills,
 * operator avatars, interactive progress bars, and garment manufacturing workflows.
 */

let activeIntervals = [];

function clearSoftwareIntervals() {
    activeIntervals.forEach(id => clearInterval(id));
    activeIntervals = [];
}

/**
 * 1. MONDAY.COM GARMENT PRODUCTION TRACKING BOARD (DEFAULT HERO BOARD)
 */
export function initProductionTrackingSoftware(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    clearSoftwareIntervals();

    container.innerHTML = `
        <div class="w-full h-full bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-2xl flex flex-col font-sans text-slate-800">
            <!-- Monday.com Top Navigation & Action Header -->
            <div class="px-5 py-3.5 bg-slate-50 border-b border-slate-200 flex flex-wrap items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <div class="flex gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-rose-400 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-400 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-400 inline-block"></span>
                    </div>
                    <div class="h-4 w-px bg-slate-300 mx-1"></div>
                    <span class="text-sm font-bold text-slate-800 flex items-center gap-2">
                        <span>🧵 Garment Sewing Line Production Board</span>
                        <span class="text-[10px] font-semibold bg-sky-100 text-sky-700 px-2 py-0.5 rounded-full border border-sky-200">Main Workspace</span>
                    </span>
                </div>

                <div class="flex items-center gap-2 text-xs">
                    <button class="px-3 py-1.5 rounded-lg bg-sky-600 hover:bg-sky-700 text-white font-semibold flex items-center gap-1.5 shadow-sm transition-all">
                        <span>+ New Order</span>
                    </button>
                    <div class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-slate-600 font-medium flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                        <span>Filter</span>
                    </div>
                    <div class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-slate-600 font-medium flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path></svg>
                        <span>Sort</span>
                    </div>
                </div>
            </div>

            <!-- Board Metrics Bar -->
            <div class="px-5 py-2.5 bg-slate-100/70 border-b border-slate-200 grid grid-cols-2 md:grid-cols-4 gap-4 text-xs">
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                    <span class="text-slate-600">Active Sewing Lines:</span>
                    <strong class="text-slate-900 font-bold">12 / 12 Lines</strong>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span>
                    <span class="text-slate-600">Target Output:</span>
                    <strong class="text-slate-900 font-bold">24,000 pcs</strong>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                    <span class="text-slate-600">Actual Inspected:</span>
                    <strong class="text-sky-600 font-bold font-mono" id="pts-actual-val">19,840 pcs</strong>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span>
                    <span class="text-slate-600">Shopfloor OEE:</span>
                    <strong class="text-emerald-600 font-bold font-mono">94.2% Optimal</strong>
                </div>
            </div>

            <!-- Workflow Table Grid (Monday.com Style) -->
            <div class="flex-grow p-4 overflow-x-auto overflow-y-auto">
                <table class="w-full text-left border-collapse text-xs font-sans">
                    <thead>
                        <tr class="border-b border-slate-200 text-slate-500 uppercase tracking-wider text-[11px]">
                            <th class="py-2.5 px-3 font-semibold">Order / Style Name</th>
                            <th class="py-2.5 px-3 font-semibold">Line #</th>
                            <th class="py-2.5 px-3 font-semibold">Stage</th>
                            <th class="py-2.5 px-3 font-semibold">Status</th>
                            <th class="py-2.5 px-3 font-semibold">Operator</th>
                            <th class="py-2.5 px-3 font-semibold">Line Progress</th>
                            <th class="py-2.5 px-3 font-semibold">Quality Rate</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-medium">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="py-3 px-3 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded bg-sky-500"></span>
                                <span>Polo Shirt #PO-402 (Ralph Lauren)</span>
                            </td>
                            <td class="py-3 px-3 text-slate-600 font-mono">Line 01</td>
                            <td class="py-3 px-3 text-slate-600">Sleeve Stitching</td>
                            <td class="py-3 px-3">
                                <span class="px-3 py-1 rounded-md bg-amber-500 text-white font-bold text-[11px] shadow-sm inline-block cursor-pointer hover:opacity-90">
                                    Working on it
                                </span>
                            </td>
                            <td class="py-3 px-3">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-sky-100 text-sky-700 font-bold flex items-center justify-center text-[10px] border border-sky-200">SM</span>
                                    <span class="text-slate-700">Sarah M.</span>
                                </div>
                            </td>
                            <td class="py-3 px-3">
                                <div class="w-32 bg-slate-100 h-2.5 rounded-full overflow-hidden border border-slate-200">
                                    <div class="bg-sky-500 h-full w-[84%] rounded-full"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 mt-0.5 inline-block font-mono">84% (1,840 / 2,200)</span>
                            </td>
                            <td class="py-3 px-3 font-mono font-bold text-emerald-600">99.2% Passed</td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="py-3 px-3 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded bg-emerald-500"></span>
                                <span>Denim Jacket #PO-882 (Zara)</span>
                            </td>
                            <td class="py-3 px-3 text-slate-600 font-mono">Line 04</td>
                            <td class="py-3 px-3 text-slate-600">Quality Inspection</td>
                            <td class="py-3 px-3">
                                <span class="px-3 py-1 rounded-md bg-emerald-500 text-white font-bold text-[11px] shadow-sm inline-block cursor-pointer hover:opacity-90">
                                    Done
                                </span>
                            </td>
                            <td class="py-3 px-3">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-700 font-bold flex items-center justify-center text-[10px] border border-emerald-200">AK</span>
                                    <span class="text-slate-700">Alex K.</span>
                                </div>
                            </td>
                            <td class="py-3 px-3">
                                <div class="w-32 bg-slate-100 h-2.5 rounded-full overflow-hidden border border-slate-200">
                                    <div class="bg-emerald-500 h-full w-[100%] rounded-full"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 mt-0.5 inline-block font-mono">100% (1,900 / 1,900)</span>
                            </td>
                            <td class="py-3 px-3 font-mono font-bold text-emerald-600">98.8% Passed</td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="py-3 px-3 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded bg-indigo-500"></span>
                                <span>Cotton Hoodie #PO-104 (H&M)</span>
                            </td>
                            <td class="py-3 px-3 text-slate-600 font-mono">Line 02</td>
                            <td class="py-3 px-3 text-slate-600">Embroidery & Hemming</td>
                            <td class="py-3 px-3">
                                <span class="px-3 py-1 rounded-md bg-sky-500 text-white font-bold text-[11px] shadow-sm inline-block cursor-pointer hover:opacity-90">
                                    Quality Check
                                </span>
                            </td>
                            <td class="py-3 px-3">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-700 font-bold flex items-center justify-center text-[10px] border border-indigo-200">RP</span>
                                    <span class="text-slate-700">Rajesh P.</span>
                                </div>
                            </td>
                            <td class="py-3 px-3">
                                <div class="w-32 bg-slate-100 h-2.5 rounded-full overflow-hidden border border-slate-200">
                                    <div class="bg-indigo-500 h-full w-[68%] rounded-full"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 mt-0.5 inline-block font-mono">68% (1,600 / 2,350)</span>
                            </td>
                            <td class="py-3 px-3 font-mono font-bold text-emerald-600">99.5% Passed</td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="py-3 px-3 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded bg-purple-500"></span>
                                <span>Woven Trousers #PO-902 (Tommy)</span>
                            </td>
                            <td class="py-3 px-3 text-slate-600 font-mono">Line 08</td>
                            <td class="py-3 px-3 text-slate-600">Cutting Room Spreading</td>
                            <td class="py-3 px-3">
                                <span class="px-3 py-1 rounded-md bg-purple-500 text-white font-bold text-[11px] shadow-sm inline-block cursor-pointer hover:opacity-90">
                                    High Priority
                                </span>
                            </td>
                            <td class="py-3 px-3">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-purple-100 text-purple-700 font-bold flex items-center justify-center text-[10px] border border-purple-200">ER</span>
                                    <span class="text-slate-700">Elena R.</span>
                                </div>
                            </td>
                            <td class="py-3 px-3">
                                <div class="w-32 bg-slate-100 h-2.5 rounded-full overflow-hidden border border-slate-200">
                                    <div class="bg-purple-500 h-full w-[45%] rounded-full"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 mt-0.5 inline-block font-mono">45% (900 / 2,000)</span>
                            </td>
                            <td class="py-3 px-3 font-mono font-bold text-emerald-600">100% Passed</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Board Footer -->
            <div class="px-5 py-2.5 bg-slate-50 border-t border-slate-200 flex justify-between items-center text-xs text-slate-500 font-medium">
                <span>Showing 4 Active Production Workflows</span>
                <span class="text-sky-600 font-semibold cursor-pointer hover:underline">View All 12 Lines &rarr;</span>
            </div>
        </div>
    `;

    // Dynamic Actual Counter Animation
    const actualEl = document.getElementById('pts-actual-val');
    if (actualEl) {
        let val = 19840;
        const timer = setInterval(() => {
            val += Math.floor(Math.random() * 3) + 1;
            actualEl.innerText = val.toLocaleString() + ' pcs';
        }, 2500);
        activeIntervals.push(timer);
    }

    return () => clearSoftwareIntervals();
}


/**
 * 2. AI QUALITY CONTROL STUDIO (LIGHT MONDAY.COM STYLE)
 */
export function initQualityControlSoftware(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    clearSoftwareIntervals();

    container.innerHTML = `
        <div class="w-full h-full bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-2xl flex flex-col font-sans text-slate-800">
            <!-- App Header -->
            <div class="px-5 py-3 bg-slate-50 border-b border-slate-200 flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <span class="text-sm font-bold text-slate-900">✨ AI Quality Vision Studio</span>
                    <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-bold border border-emerald-200">PASS AQL 1.5</span>
                </div>
                <div class="text-xs text-slate-500 font-mono">Live Line 04 Camera Feed</div>
            </div>

            <!-- Workspace Body -->
            <div class="flex-grow p-4 sm:p-6 grid grid-cols-1 lg:grid-cols-12 gap-6 bg-slate-50/60 overflow-y-auto">
                <!-- Left Inspection Canvas -->
                <div class="lg:col-span-7 bg-white rounded-xl border border-slate-200 p-4 shadow-sm relative overflow-hidden flex flex-col justify-between min-h-[260px]">
                    <canvas id="qc-canvas-light" class="absolute inset-0 w-full h-full object-cover"></canvas>
                    <div class="relative z-10 flex justify-between items-start">
                        <span class="px-2.5 py-1 rounded bg-slate-900/80 text-white text-[11px] font-mono">AI MATCH: 99.4%</span>
                        <span class="px-2.5 py-1 rounded bg-emerald-500 text-white text-[11px] font-bold">AQL PASSED</span>
                    </div>
                    <div class="relative z-10 text-xs font-mono text-slate-600 bg-white/90 p-2 rounded border border-slate-200 flex justify-between">
                        <span>Fabric Roll: #8492-B</span>
                        <span id="qc-clock" class="text-sky-600 font-bold"></span>
                    </div>
                </div>

                <!-- Right Defect Summary & Cards -->
                <div class="lg:col-span-5 space-y-4 flex flex-col justify-between text-xs">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="p-3.5 rounded-xl bg-white border border-slate-200 shadow-sm">
                            <div class="text-slate-500">First Time Pass</div>
                            <div class="text-2xl font-bold text-emerald-600 font-mono mt-0.5">98.6%</div>
                        </div>
                        <div class="p-3.5 rounded-xl bg-white border border-slate-200 shadow-sm">
                            <div class="text-slate-500">Defects Saved</div>
                            <div class="text-2xl font-bold text-sky-600 font-mono mt-0.5">1,248 pcs</div>
                        </div>
                    </div>

                    <!-- Defect Breakdown Cards -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 shadow-sm space-y-2.5">
                        <div class="font-bold text-slate-800 border-b border-slate-100 pb-2">AI Defect Detection Summary</div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Stitch Skip Flaws:</span>
                            <span class="px-2 py-0.5 rounded bg-emerald-100 text-emerald-700 font-bold">0.2% (Low)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Shade Variance:</span>
                            <span class="px-2 py-0.5 rounded bg-emerald-100 text-emerald-700 font-bold">0.1% (Optimal)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600">Needle Cut Alerts:</span>
                            <span class="px-2 py-0.5 rounded bg-amber-100 text-amber-700 font-bold">1 Corrected</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;

    // Light Canvas Laser Animation
    const canvas = document.getElementById('qc-canvas-light');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let scanY = 0;
        let animId;

        const resize = () => {
            canvas.width = canvas.parentElement.clientWidth;
            canvas.height = canvas.parentElement.clientHeight;
        };
        resize();
        window.addEventListener('resize', resize);

        function draw() {
            ctx.fillStyle = '#f8fafc';
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            // Light Grid
            ctx.strokeStyle = '#e2e8f0';
            ctx.lineWidth = 1;
            for (let x = 0; x < canvas.width; x += 25) {
                ctx.beginPath(); ctx.moveTo(x, 0); ctx.lineTo(x, canvas.height); ctx.stroke();
            }
            for (let y = 0; y < canvas.height; y += 25) {
                ctx.beginPath(); ctx.moveTo(0, y); ctx.lineTo(canvas.width, y); ctx.stroke();
            }

            // Laser Scan Line
            scanY += 2;
            if (scanY > canvas.height) scanY = 0;

            ctx.shadowColor = '#0284c7';
            ctx.shadowBlur = 10;
            ctx.strokeStyle = '#0284c7';
            ctx.lineWidth = 3;
            ctx.beginPath(); ctx.moveTo(0, scanY); ctx.lineTo(canvas.width, scanY); ctx.stroke();
            ctx.shadowBlur = 0;

            // Green Bounding Box
            const bx = canvas.width * 0.25;
            const by = canvas.height * 0.3;
            const bw = canvas.width * 0.45;
            const bh = canvas.height * 0.4;
            ctx.strokeStyle = '#10b981';
            ctx.lineWidth = 2;
            ctx.strokeRect(bx, by, bw, bh);

            ctx.fillStyle = '#10b981';
            ctx.fillRect(bx, by - 18, bw, 18);
            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 10px sans-serif';
            ctx.fillText('STITCH PATTERN VERIFIED - PASS', bx + 6, by - 5);

            animId = requestAnimationFrame(draw);
        }
        draw();

        const clockEl = document.getElementById('qc-clock');
        if (clockEl) {
            const timer = setInterval(() => clockEl.innerText = new Date().toLocaleTimeString(), 1000);
            activeIntervals.push(timer);
        }

        return () => {
            cancelAnimationFrame(animId);
            window.removeEventListener('resize', resize);
            clearSoftwareIntervals();
        };
    }
}


/**
 * 3. MACHINE MAINTENANCE & OEE BOARD
 */
export function initMachineMaintenanceSoftware(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    clearSoftwareIntervals();

    container.innerHTML = `
        <div class="w-full h-full bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-2xl flex flex-col font-sans text-slate-800">
            <div class="px-5 py-3 bg-slate-50 border-b border-slate-200 flex justify-between items-center">
                <span class="text-sm font-bold text-slate-900">⚙️ Machine Telemetry & OEE Dashboard</span>
                <span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold border border-emerald-200">94.8% OEE OPTIMAL</span>
            </div>

            <div class="flex-grow p-4 sm:p-6 grid grid-cols-1 lg:grid-cols-12 gap-6 bg-slate-50/60 overflow-y-auto">
                <div class="lg:col-span-8 bg-white rounded-xl border border-slate-200 p-5 shadow-sm space-y-4">
                    <div class="font-bold text-slate-900 text-sm border-b border-slate-100 pb-2">
                        SEWING MOTOR #M-408 (JUKI DDL-9000C)
                    </div>

                    <div class="grid grid-cols-3 gap-4 text-center text-xs">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                            <div class="text-slate-500">Motor Temp</div>
                            <div class="text-2xl font-bold text-emerald-600 font-mono mt-1">42°C</div>
                            <div class="text-[10px] text-emerald-600 mt-0.5">Healthy (&lt;65°C)</div>
                        </div>

                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                            <div class="text-slate-500">Vibration</div>
                            <div class="text-2xl font-bold text-sky-600 font-mono mt-1">1.2 g</div>
                            <div class="text-[10px] text-sky-600 mt-0.5">Optimal</div>
                        </div>

                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                            <div class="text-slate-500">Shift Run Time</div>
                            <div class="text-2xl font-bold text-indigo-600 font-mono mt-1">7h 42m</div>
                            <div class="text-[10px] text-indigo-600 mt-0.5">Zero Downtime</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 bg-white rounded-xl border border-slate-200 p-4 shadow-sm space-y-3 text-xs">
                    <div class="font-bold text-slate-900 border-b border-slate-100 pb-2">Preventive Service Alerts</div>
                    <div class="p-3 rounded-lg bg-amber-50 border border-amber-200 text-amber-800 space-y-1">
                        <div class="font-bold flex justify-between">
                            <span>Motor Lubrication</span>
                            <span>In 14 hrs</span>
                        </div>
                        <div class="text-[11px] text-amber-700">Auto ticket assigned to Technician Team.</div>
                    </div>
                </div>
            </div>
        </div>
    `;

    return () => clearSoftwareIntervals();
}


/**
 * 4. SMART PRODUCTION PLANNING GANTT
 */
export function initProductionPlanningSoftware(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    clearSoftwareIntervals();

    container.innerHTML = `
        <div class="w-full h-full bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-2xl flex flex-col font-sans text-slate-800">
            <div class="px-5 py-3 bg-slate-50 border-b border-slate-200 flex justify-between items-center">
                <span class="text-sm font-bold text-slate-900">📅 Smart Gantt Production Planner</span>
                <span class="px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-xs font-bold border border-sky-200">99.2% ON-TIME SHIPMENT</span>
            </div>

            <div class="flex-grow p-4 sm:p-6 space-y-4 bg-slate-50/60 overflow-y-auto text-xs">
                <div class="bg-white rounded-xl border border-slate-200 p-4 shadow-sm space-y-3">
                    <div class="flex justify-between items-center border-b border-slate-100 pb-2 font-bold text-slate-800">
                        <span>LINE / ORDER TIMELINE</span>
                        <span class="text-sky-600 font-mono">THIS WEEK SCHEDULE</span>
                    </div>

                    <!-- Row 1 -->
                    <div class="space-y-1">
                        <div class="flex justify-between font-semibold text-slate-700">
                            <span>LINE 01 — Polo Shirt #PO-402 (Ralph Lauren)</span>
                            <span class="text-emerald-600 font-mono">100% On Schedule</span>
                        </div>
                        <div class="w-full bg-slate-100 h-6 rounded-lg overflow-hidden p-1 flex items-center border border-slate-200">
                            <div class="bg-sky-500 h-full rounded-md w-[85%] text-white text-[10px] font-bold px-2 flex items-center">
                                Sewing & Finishing Batch (12,000 pcs)
                            </div>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="space-y-1 pt-2">
                        <div class="flex justify-between font-semibold text-slate-700">
                            <span>LINE 04 — Denim Jacket #PO-882 (Zara)</span>
                            <span class="text-emerald-600 font-mono">Ahead by 2 hrs</span>
                        </div>
                        <div class="w-full bg-slate-100 h-6 rounded-lg overflow-hidden p-1 flex items-center border border-slate-200">
                            <div class="bg-emerald-500 h-full rounded-md w-[92%] text-white text-[10px] font-bold px-2 flex items-center">
                                Fabric Spreading & Cutting
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;

    return () => clearSoftwareIntervals();
}
