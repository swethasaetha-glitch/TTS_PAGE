import * as THREE from 'three';

/**
 * Enterprise B2B Garment Software Engine 3D Scene
 * Renders high-definition SaaS Software Dashboards with dynamic AI Vision Inspection & Live Telemetry metrics
 */
export function initHero3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(42, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(0, 0.2, 6.2);
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // Studio Lighting
    const ambientLight = new THREE.AmbientLight(0xffffff, 2.0);
    scene.add(ambientLight);

    const dirLight1 = new THREE.DirectionalLight(0x38bdf8, 2.5);
    dirLight1.position.set(8, 12, 10);
    scene.add(dirLight1);

    const dirLight2 = new THREE.DirectionalLight(0x0284c7, 1.8);
    dirLight2.position.set(-8, -6, -4);
    scene.add(dirLight2);

    const mainGroup = new THREE.Group();
    scene.add(mainGroup);

    // ================= 1. DYNAMIC HIGH-RESOLUTION SaaS SOFTWARE UI CANVAS =================
    const uiCanvas = document.createElement('canvas');
    uiCanvas.width = 1024;
    uiCanvas.height = 640;
    const ctx = uiCanvas.getContext('2d');

    const uiTexture = new THREE.CanvasTexture(uiCanvas);
    uiTexture.anisotropy = renderer.capabilities.getMaxAnisotropy();

    // Sleek 3D Display Monitor Chassis
    const monitorGroup = new THREE.Group();

    const frameGeo = new THREE.BoxGeometry(5.4, 3.4, 0.14);
    const frameMat = new THREE.MeshStandardMaterial({
        color: 0x0f172a,
        metalness: 0.95,
        roughness: 0.15,
    });
    const frameMesh = new THREE.Mesh(frameGeo, frameMat);
    monitorGroup.add(frameMesh);

    // Illuminated Front Screen Plane
    const screenGeo = new THREE.PlaneGeometry(5.2, 3.2);
    const screenMat = new THREE.MeshBasicMaterial({
        map: uiTexture,
        side: THREE.FrontSide,
    });
    const screenMesh = new THREE.Mesh(screenGeo, screenMat);
    screenMesh.position.z = 0.08;
    monitorGroup.add(screenMesh);

    // Sleek Pedestal Stand Base
    const standGeo = new THREE.BoxGeometry(1.2, 0.4, 0.8);
    const standMat = new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.9, roughness: 0.2 });
    const stand = new THREE.Mesh(standGeo, standMat);
    stand.position.set(0, -1.9, 0);
    monitorGroup.add(stand);

    const poleGeo = new THREE.CylinderGeometry(0.1, 0.1, 0.8, 16);
    const pole = new THREE.Mesh(poleGeo, standMat);
    pole.position.set(0, -1.5, 0);
    monitorGroup.add(pole);

    mainGroup.add(monitorGroup);

    // ================= 2. DYNAMIC 2D SaaS DASHBOARD CANVAS RENDERER =================
    let scanLineX = 50;
    let scanDir = 1;
    let currentHeroStage = 1;

    // Expose global controller for Alpine.js stepper clicks
    window.setHeroStage = function(stageNum) {
        if (stageNum >= 1 && stageNum <= 5) {
            currentHeroStage = stageNum;
        }
    };

    function renderSaaSUI(elapsedTime) {
        if (!ctx) return;

        // Background Glass Panel Gradient
        const bgGrad = ctx.createLinearGradient(0, 0, 1024, 640);
        bgGrad.addColorStop(0, '#030712');
        bgGrad.addColorStop(0.5, '#0b1329');
        bgGrad.addColorStop(1, '#030712');
        ctx.fillStyle = bgGrad;
        ctx.fillRect(0, 0, 1024, 640);

        // Header Navigation Bar
        ctx.fillStyle = '#0f172a';
        ctx.fillRect(0, 0, 1024, 60);

        // App Title
        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 18px sans-serif';
        ctx.fillText('TRACK TECH SOLUTION — SMART GARMENT SOFTWARE SUITE', 30, 36);

        // Active Stage Badge
        const stageTitles = [
            'STAGE 1: GARMENT FACTORY FLOOR & LINES',
            'STAGE 2: REAL-TIME TELEMETRY & IOT DATA',
            'STAGE 3: AI COMPUTER VISION INSPECTION',
            'STAGE 4: ENTERPRISE SOFTWARE DASHBOARD',
            'STAGE 5: SMART MANUFACTURING INSIGHTS'
        ];
        ctx.fillStyle = '#0284c7';
        ctx.fillRect(580, 14, 280, 32);
        ctx.fillStyle = '#ffffff';
        ctx.font = 'bold 11px sans-serif';
        ctx.fillText(stageTitles[currentHeroStage - 1], 592, 34);

        // System Live Badge
        ctx.fillStyle = '#10b981';
        ctx.beginPath();
        ctx.arc(885, 30, 5, 0, Math.PI * 2);
        ctx.fill();

        ctx.fillStyle = '#e2e8f0';
        ctx.font = 'bold 12px monospace';
        ctx.fillText('LIVE (10ms)', 898, 34);

        // RENDER STAGE-SPECIFIC UI VIEWS
        if (currentHeroStage === 1) {
            renderStage1Factory(elapsedTime);
        } else if (currentHeroStage === 2) {
            renderStage2Telemetry(elapsedTime);
        } else if (currentHeroStage === 3) {
            renderStage3AIVision(elapsedTime);
        } else if (currentHeroStage === 4) {
            renderStage4Dashboard(elapsedTime);
        } else if (currentHeroStage === 5) {
            renderStage5Insights(elapsedTime);
        }

        uiTexture.needsUpdate = true;
    }

    // --- STAGE 1: GARMENT FACTORY SHOPFLOOR & SEWING LINES ---
    function renderStage1Factory(elapsedTime) {
        const cards = [
            { label: 'ACTIVE SEWING LINES', val: '12 Lines Online', sub: '100% Operational', color: '#38bdf8' },
            { label: 'SHOPFLOOR WORKERS', val: '340 Operators', sub: 'Line Balance: 94.2%', color: '#10b981' },
            { label: 'TOTAL BUNDLES', val: '4,850 Pcs/Shift', sub: 'RFID Tagged & Tracked', color: '#818cf8' },
            { label: 'CUTTING & SEWING', val: 'Active Lines', sub: 'Shift 1 Live', color: '#f59e0b' },
        ];
        drawKPICards(cards);

        // Main Center Panel: Sewing Line Map
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(30, 210, 964, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(30, 210, 964, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('DIGITAL TWIN: GARMENT FACTORY SEWING LINES & WORKSTATION MAP', 50, 240);

        const lines = [
            { name: 'LINE A: T-SHIRT ASSEMBLY', prog: 88, color: '#38bdf8', stations: ['W1: Fabric Cut', 'W2: Sleeve Stitch', 'W3: Collar Attach', 'W4: QC Check'] },
            { name: 'LINE B: DENIM JEANS LINE', prog: 94, color: '#10b981', stations: ['W1: Pocket Stitch', 'W2: Zipper Lock', 'W3: Waistband', 'W4: Line QC'] },
            { name: 'LINE C: FORMAL SHIRTS', prog: 78, color: '#818cf8', stations: ['W1: Placket Stitch', 'W2: Cuff Assembly', 'W3: Buttonhole', 'W4: Pressing'] },
            { name: 'LINE D: JACKETS & OUTERWEAR', prog: 85, color: '#f59e0b', stations: ['W1: Lining Attach', 'W2: Main Seam', 'W3: Zipper Lock', 'W4: Final QC'] }
        ];

        lines.forEach((line, lIdx) => {
            const ly = 265 + lIdx * 80;
            ctx.fillStyle = '#0f172a';
            ctx.fillRect(50, ly, 924, 70);
            ctx.strokeStyle = line.color;
            ctx.lineWidth = 1;
            ctx.strokeRect(50, ly, 924, 70);

            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 13px sans-serif';
            ctx.fillText(line.name, 65, ly + 25);

            // Progress bar
            ctx.fillStyle = '#1e293b';
            ctx.fillRect(65, ly + 36, 180, 14);
            ctx.fillStyle = line.color;
            ctx.fillRect(65, ly + 36, 180 * (line.prog / 100), 14);

            ctx.fillStyle = '#e2e8f0';
            ctx.font = 'bold 10px monospace';
            ctx.fillText(`${line.prog}% DONE`, 255, ly + 47);

            // Workstation nodes
            line.stations.forEach((st, sIdx) => {
                const sx = 340 + sIdx * 145;
                const sy = ly + 15;

                ctx.fillStyle = '#1e293b';
                ctx.fillRect(sx, sy, 130, 40);
                ctx.strokeStyle = '#475569';
                ctx.strokeRect(sx, sy, 130, 40);

                ctx.fillStyle = line.color;
                ctx.beginPath();
                ctx.arc(sx + 15, sy + 20, 6, 0, Math.PI * 2);
                ctx.fill();

                ctx.fillStyle = '#cbd5e1';
                ctx.font = 'bold 10px sans-serif';
                ctx.fillText(st, sx + 28, sy + 24);

                // Animated bundle dots moving on conveyor line
                const dotPos = (elapsedTime * 60 + sIdx * 30 + lIdx * 20) % 130;
                ctx.fillStyle = '#38bdf8';
                ctx.fillRect(sx + dotPos, sy + 36, 6, 4);
            });
        });
    }

    // --- STAGE 2: REAL-TIME TELEMETRY & IOT DATA ---
    function renderStage2Telemetry(elapsedTime) {
        const cards = [
            { label: 'CONNECTED SENSORS', val: '500+ Sewing Heads', sub: 'IoT Mesh Network Live', color: '#38bdf8' },
            { label: 'AVG MOTOR RPM', val: '4,250 RPM', sub: 'Optimal Sewing Speed', color: '#10b981' },
            { label: 'MOTOR TEMP', val: '38.4 °C', sub: 'Normal Thermal Range', color: '#f59e0b' },
            { label: 'TELEMETRY LATENCY', val: '8 ms Sync', sub: 'Real-Time Telemetry', color: '#818cf8' },
        ];
        drawKPICards(cards);

        // Left Panel: Oscilloscope / Motor Waveform
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(30, 210, 470, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(30, 210, 470, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('LIVE SEWING MOTOR RPM & WAVEFORM SENSOR', 50, 240);

        // Graph grid
        ctx.strokeStyle = 'rgba(56, 189, 248, 0.1)';
        ctx.lineWidth = 1;
        for (let gx = 50; gx < 480; gx += 30) {
            ctx.beginPath(); ctx.moveTo(gx, 260); ctx.lineTo(gx, 550); ctx.stroke();
        }
        for (let gy = 260; gy < 550; gy += 30) {
            ctx.beginPath(); ctx.moveTo(50, gy); ctx.lineTo(480, gy); ctx.stroke();
        }

        // Waveform plot 1
        ctx.strokeStyle = '#10b981';
        ctx.lineWidth = 3;
        ctx.beginPath();
        for (let x = 0; x < 420; x += 5) {
            const y = 350 + Math.sin((x + elapsedTime * 120) * 0.05) * 45 + Math.sin(x * 0.1) * 15;
            if (x === 0) ctx.moveTo(50 + x, y);
            else ctx.lineTo(50 + x, y);
        }
        ctx.stroke();

        // Waveform plot 2
        ctx.strokeStyle = '#38bdf8';
        ctx.lineWidth = 2;
        ctx.beginPath();
        for (let x = 0; x < 420; x += 5) {
            const y = 470 + Math.cos((x + elapsedTime * 80) * 0.04) * 35;
            if (x === 0) ctx.moveTo(50 + x, y);
            else ctx.lineTo(50 + x, y);
        }
        ctx.stroke();

        ctx.fillStyle = '#10b981';
        ctx.font = 'bold 12px monospace';
        ctx.fillText('SIGNAL A: MOTOR SPEED (4,250 RPM)', 50, 580);
        ctx.fillStyle = '#38bdf8';
        ctx.fillText('SIGNAL B: THREAD TENSION (4.2 N)', 280, 580);

        // Right Panel: Smart Sewing Machine Spec
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(524, 210, 470, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(524, 210, 470, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('SMART SEWING HEAD #42 — TELEMETRY SPEC', 544, 240);

        const specs = [
            { name: 'SEWING MOTOR VELOCITY', val: '4,250 RPM', color: '#10b981' },
            { name: 'NEEDLE HEAT SENSOR', val: '36.8 °C (SAFE)', color: '#38bdf8' },
            { name: 'THREAD TENSION LOAD', val: '4.2 N (OPTIMAL)', color: '#818cf8' },
            { name: 'RFID BUNDLE TAG SCANNER', val: 'TAG #8841-A ACTIVE', color: '#f59e0b' }
        ];

        specs.forEach((sp, idx) => {
            const sy = 265 + idx * 75;
            ctx.fillStyle = '#0f172a';
            ctx.fillRect(544, sy, 430, 62);
            ctx.strokeStyle = '#334155';
            ctx.strokeRect(544, sy, 430, 62);

            ctx.fillStyle = '#94a3b8';
            ctx.font = 'bold 11px sans-serif';
            ctx.fillText(sp.name, 560, sy + 24);

            ctx.fillStyle = sp.color;
            ctx.font = 'bold 18px sans-serif';
            ctx.fillText(sp.val, 560, sy + 50);
        });

        // Live streaming ticker
        ctx.fillStyle = '#10b981';
        ctx.font = 'bold 12px monospace';
        ctx.fillText('LOG: [09:32:15] RFID Tag #8841-A -> Operator #14 (Passed)', 544, 582);
    }

    // --- STAGE 3: AI VISION COMPUTER INSPECTION ---
    function renderStage3AIVision(elapsedTime) {
        const cards = [
            { label: 'AI CAM SCANNER', val: 'HD Optical 60FPS', sub: 'Active Scan Feed', color: '#38bdf8' },
            { label: 'AI ACCURACY', val: '99.4% Confidence', sub: 'ResNet-99 Model', color: '#10b981' },
            { label: 'DEFECTS DETECTED', val: '1 Flaw Detected', sub: 'Stitch Skip Flagged', color: '#ef4444' },
            { label: 'INLINE PASS RATE', val: '98.6% Flawless', sub: 'Auto-Filtered Roll', color: '#818cf8' },
        ];
        drawKPICards(cards);

        // Main Panel 1: Live Optical Camera Viewport
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(30, 210, 560, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(30, 210, 560, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('LIVE OPTICAL FABRIC ROLL AI CAMERA SCANNER', 50, 240);

        ctx.fillStyle = '#0f172a';
        ctx.fillRect(50, 260, 520, 290);
        ctx.strokeStyle = '#0284c7';
        ctx.strokeRect(50, 260, 520, 290);

        // Weave Grid
        ctx.strokeStyle = 'rgba(56, 189, 248, 0.15)';
        ctx.lineWidth = 1;
        for (let gx = 50; gx < 570; gx += 20) {
            ctx.beginPath(); ctx.moveTo(gx, 260); ctx.lineTo(gx, 550); ctx.stroke();
        }
        for (let gy = 260; gy < 550; gy += 20) {
            ctx.beginPath(); ctx.moveTo(50, gy); ctx.lineTo(570, gy); ctx.stroke();
        }

        // Moving AI Laser Line
        scanLineX += scanDir * 2.5;
        if (scanLineX > 500 || scanLineX < 10) scanDir *= -1;
        const scanX = 50 + scanLineX;
        ctx.strokeStyle = '#38bdf8';
        ctx.lineWidth = 3;
        ctx.beginPath(); ctx.moveTo(scanX, 260); ctx.lineTo(scanX, 550); ctx.stroke();

        // AI Bounding Box
        ctx.strokeStyle = '#ef4444';
        ctx.lineWidth = 2;
        ctx.strokeRect(260, 340, 140, 100);

        ctx.fillStyle = '#ef4444';
        ctx.font = 'bold 12px monospace';
        ctx.fillText('STITCH DEFECT DETECTED', 260, 330);
        ctx.fillText('CONFIDENCE: 99.4%', 260, 458);

        ctx.fillStyle = '#10b981';
        ctx.font = 'bold 12px monospace';
        ctx.fillText('STATUS: AUTO-MARK DEFECT ON CUTTING BED', 50, 580);

        // Right Panel: AI Classification Histogram
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(610, 210, 384, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(610, 210, 384, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('AI FLAW CLASSIFICATION', 630, 240);

        const defects = [
            { name: 'Flawless Weave', pct: 97.6, color: '#10b981' },
            { name: 'Stitch Skip', pct: 1.4, color: '#ef4444' },
            { name: 'Tension Error', pct: 0.8, color: '#f59e0b' },
            { name: 'Oil / Color Stain', pct: 0.2, color: '#818cf8' },
        ];

        defects.forEach((df, idx) => {
            const dy = 275 + idx * 72;
            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 12px sans-serif';
            ctx.fillText(df.name, 630, dy);

            ctx.fillStyle = '#0f172a';
            ctx.fillRect(630, dy + 10, 344, 20);
            ctx.fillStyle = df.color;
            ctx.fillRect(630, dy + 10, 344 * (df.pct / 100), 20);

            ctx.fillStyle = '#e2e8f0';
            ctx.font = 'bold 11px monospace';
            ctx.fillText(`${df.pct}%`, 630, dy + 46);
        });
    }

    // --- STAGE 4: ENTERPRISE SOFTWARE DASHBOARD UI ---
    function renderStage4Dashboard(elapsedTime) {
        const cards = [
            { label: 'OEE UPTIME', val: '98.4%', sub: 'Optimal Motor Health', color: '#10b981' },
            { label: 'RFID THROUGHPUT', val: '14,280 Pcs/Hr', sub: '500+ Garment Lines', color: '#38bdf8' },
            { label: 'AI QUALITY PASS', val: '99.4%', sub: 'Defects Filtered: 1,420', color: '#38bdf8' },
            { label: 'LINE BALANCE', val: '96.8%', sub: '25 Plants Synced', color: '#818cf8' },
        ];
        drawKPICards(cards);

        // Panel 1: Live Sewing Line Output
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(30, 210, 470, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(30, 210, 470, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('LIVE SEWING LINE OUTPUT & TELEMETRY', 50, 240);

        ctx.strokeStyle = '#0284c7';
        ctx.lineWidth = 3;
        ctx.beginPath();
        for (let i = 0; i < 10; i++) {
            const gx = 60 + i * 42;
            const gy = 520 - Math.sin(elapsedTime * 2 + i) * 60 - (i % 3) * 20;
            if (i === 0) ctx.moveTo(gx, gy);
            else ctx.lineTo(gx, gy);
            ctx.fillStyle = '#38bdf8';
            ctx.fillRect(gx - 4, gy - 4, 8, 8);
        }
        ctx.stroke();

        for (let b = 0; b < 7; b++) {
            const bx = 60 + b * 60;
            const bh = 80 + Math.sin(elapsedTime * 3 + b) * 45;
            const by = 550 - bh;
            const barGrad = ctx.createLinearGradient(bx, by, bx, 550);
            barGrad.addColorStop(0, '#38bdf8');
            barGrad.addColorStop(1, '#0284c7');
            ctx.fillStyle = barGrad;
            ctx.fillRect(bx, by, 36, bh);
        }

        // Panel 2: Order Dispatch Progress
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(524, 210, 470, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(524, 210, 470, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('FACTORY ORDER DISPATCH PROGRESS TRACKER', 544, 240);

        const orders = [
            { buyer: 'Zara Order #8841', prog: 88, color: '#38bdf8' },
            { buyer: 'H&M Order #9021', prog: 74, color: '#10b981' },
            { buyer: 'Uniqlo Order #4109', prog: 92, color: '#818cf8' },
            { buyer: 'Nike Order #1104', prog: 65, color: '#f59e0b' }
        ];

        orders.forEach((ord, idx) => {
            const oy = 265 + idx * 75;
            ctx.fillStyle = '#0f172a';
            ctx.fillRect(544, oy, 430, 62);
            ctx.strokeStyle = '#334155';
            ctx.strokeRect(544, oy, 430, 62);

            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 12px sans-serif';
            ctx.fillText(ord.buyer, 560, oy + 24);

            ctx.fillStyle = '#1e293b';
            ctx.fillRect(560, oy + 32, 330, 16);
            ctx.fillStyle = ord.color;
            ctx.fillRect(560, oy + 32, 330 * (ord.prog / 100), 16);

            ctx.fillStyle = '#e2e8f0';
            ctx.font = 'bold 12px monospace';
            ctx.fillText(`${ord.prog}%`, 900, oy + 45);
        });

        ctx.fillStyle = '#10b981';
        ctx.font = 'bold 12px monospace';
        ctx.fillText('STATUS: ALL DISPATCH SCHEDULES ON TIME', 544, 582);
    }

    // --- STAGE 5: SMART MANUFACTURING INSIGHTS & AI ADVISORY ---
    function renderStage5Insights(elapsedTime) {
        const cards = [
            { label: 'PREDICTIVE OEE', val: '+14.2% Gain', sub: 'AI Line Balancing', color: '#10b981' },
            { label: 'FABRIC SAVINGS', val: '-28% Waste', sub: 'Smart Marker Cut', color: '#38bdf8' },
            { label: 'PREVENTIVE MAINT', val: '2 Heads Flagged', sub: '48h Early Warning', color: '#f59e0b' },
            { label: 'MONTHLY ROI', val: '$42,500/Mo', sub: 'Net Plant Productivity', color: '#818cf8' },
        ];
        drawKPICards(cards);

        // Panel 1: AI Recommendations & Advisory
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(30, 210, 470, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(30, 210, 470, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('AI PREDICTIVE INSIGHTS & BOTTLENECK ADVISORY', 50, 240);

        const insights = [
            { icon: '💡', title: 'LINE BALANCING RECOMMENDATION', desc: 'Line B Workstation #2 is bottlenecked. Re-assign 2 operators to Collar Assembly to boost throughput by 14.2%.' },
            { icon: '🛠️', title: 'PREVENTIVE MAINTENANCE WARNING', desc: 'Juki Motor #18 bearing vibration increased by 8%. Service recommended within 48 hours to prevent line halt.' },
            { icon: '✂️', title: 'SMART FABRIC NESTING YIELD', desc: 'Nesting Efficiency reached 94.6% (+3.2% fabric saved on denim roll cutting).' }
        ];

        insights.forEach((ins, idx) => {
            const iy = 265 + idx * 105;
            ctx.fillStyle = '#0f172a';
            ctx.fillRect(50, iy, 430, 92);
            ctx.strokeStyle = '#334155';
            ctx.strokeRect(50, iy, 430, 92);

            ctx.fillStyle = '#38bdf8';
            ctx.font = 'bold 12px sans-serif';
            ctx.fillText(`${ins.icon} ${ins.title}`, 65, iy + 24);

            ctx.fillStyle = '#cbd5e1';
            ctx.font = '11px sans-serif';
            wrapText(ctx, ins.desc, 65, iy + 44, 400, 16);
        });

        // Panel 2: Efficiency Before vs After Chart
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(524, 210, 470, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(524, 210, 470, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('BEFORE vs AFTER TTS SOFTWARE EFFICIENCY', 544, 240);

        const comparisons = [
            { metric: 'Line Balance Efficiency', before: 72, after: 96, color: '#10b981' },
            { metric: 'AI Vision Quality Pass Rate', before: 84, after: 99, color: '#38bdf8' },
            { metric: 'Machine OEE Uptime', before: 78, after: 98, color: '#818cf8' },
            { metric: 'On-Time Order Delivery', before: 68, after: 95, color: '#f59e0b' }
        ];

        comparisons.forEach((cmp, idx) => {
            const cy = 265 + idx * 75;
            ctx.fillStyle = '#0f172a';
            ctx.fillRect(544, cy, 430, 62);
            ctx.strokeStyle = '#334155';
            ctx.strokeRect(544, cy, 430, 62);

            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 11px sans-serif';
            ctx.fillText(cmp.metric, 560, cy + 20);

            // Before bar
            ctx.fillStyle = '#475569';
            ctx.fillRect(560, cy + 28, 300 * (cmp.before / 100), 10);
            ctx.fillStyle = '#94a3b8';
            ctx.font = 'bold 10px monospace';
            ctx.fillText(`Before: ${cmp.before}%`, 870, cy + 36);

            // After bar
            ctx.fillStyle = cmp.color;
            ctx.fillRect(560, cy + 42, 300 * (cmp.after / 100), 12);
            ctx.fillStyle = cmp.color;
            ctx.font = 'bold 10px monospace';
            ctx.fillText(`TTS: ${cmp.after}%`, 870, cy + 52);
        });

        ctx.fillStyle = '#10b981';
        ctx.font = 'bold 12px monospace';
        ctx.fillText('SYSTEM ADVISORY: +24.4% TOTAL PLANT EFFICIENCY INCREASE', 544, 582);
    }

    // Helper: Draw 4 Top KPI Cards
    function drawKPICards(cards) {
        cards.forEach((card, idx) => {
            const x = 30 + idx * 242;
            const y = 80;

            ctx.fillStyle = '#1e293b';
            ctx.fillRect(x, y, 226, 110);
            ctx.strokeStyle = '#334155';
            ctx.lineWidth = 1;
            ctx.strokeRect(x, y, 226, 110);

            ctx.fillStyle = card.color;
            ctx.fillRect(x, y, 226, 4);

            ctx.fillStyle = '#94a3b8';
            ctx.font = 'bold 12px sans-serif';
            ctx.fillText(card.label, x + 16, y + 28);

            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 20px sans-serif';
            ctx.fillText(card.val, x + 16, y + 62);

            ctx.fillStyle = card.color;
            ctx.font = 'bold 11px sans-serif';
            ctx.fillText(card.sub, x + 16, y + 90);
        });
    }

    // Helper: Wrap text inside canvas boxes
    function wrapText(context, text, x, y, maxWidth, lineHeight) {
        const words = text.split(' ');
        let line = '';
        for (let n = 0; n < words.length; n++) {
            const testLine = line + words[n] + ' ';
            const metrics = context.measureText(testLine);
            const testWidth = metrics.width;
            if (testWidth > maxWidth && n > 0) {
                context.fillText(line, x, y);
                line = words[n] + ' ';
                y += lineHeight;
            } else {
                line = testLine;
            }
        }
        context.fillText(line, x, y);
    }

    // ================= INTERACTION CONTROLS =================
    container.style.touchAction = 'none';

    let isDragging = false;
    let previousPointerPos = { x: 0, y: 0 };
    let targetRotationY = 0;
    let targetRotationX = 0;
    let totalDragDistance = 0;

    const getPointerPos = (e) => {
        if (e.touches && e.touches.length > 0) {
            return { x: e.touches[0].clientX, y: e.touches[0].clientY };
        }
        return { x: e.clientX, y: e.clientY };
    };

    const onPointerDown = (e) => {
        e.stopPropagation();
        isDragging = true;
        totalDragDistance = 0;
        previousPointerPos = getPointerPos(e);
    };

    const onPointerMove = (e) => {
        e.stopPropagation();
        const pos = getPointerPos(e);
        if (isDragging) {
            const deltaX = pos.x - previousPointerPos.x;
            const deltaY = pos.y - previousPointerPos.y;
            totalDragDistance += Math.abs(deltaX) + Math.abs(deltaY);
            targetRotationY += deltaX * 0.006;
            targetRotationX += deltaY * 0.004;
            previousPointerPos = pos;
        }
    };

    const onPointerUp = (e) => {
        if (e) e.stopPropagation();
        isDragging = false;
    };

    const onClick = (e) => {
        e.preventDefault();
        e.stopPropagation();
        if (totalDragDistance < 8) {
            const productsEl = document.getElementById('products');
            if (productsEl) {
                productsEl.scrollIntoView({ behavior: 'smooth' });
            } else {
                window.location.href = '/#products';
            }
        }
    };

    container.addEventListener('mousedown', onPointerDown);
    container.addEventListener('mousemove', onPointerMove);
    container.addEventListener('click', onClick);
    window.addEventListener('mouseup', onPointerUp);

    container.addEventListener('touchstart', onPointerDown, { passive: false });
    container.addEventListener('touchmove', onPointerMove, { passive: false });
    container.addEventListener('touchend', onPointerUp);
    window.addEventListener('touchend', onPointerUp);

    // ANIMATION LOOP
    let animationFrameId;
    const clock = new THREE.Clock();

    const animate = () => {
        animationFrameId = requestAnimationFrame(animate);
        const elapsedTime = clock.getElapsedTime();

        // Render dynamic 2D SaaS interface onto screen texture
        renderSaaSUI(elapsedTime);

        // Lock screen front-facing when not dragging
        if (!isDragging) {
            targetRotationY *= 0.92;
            targetRotationX *= 0.92;
        }

        // Smooth rotation
        mainGroup.rotation.y += (targetRotationY - mainGroup.rotation.y) * 0.1;
        mainGroup.rotation.x += (targetRotationX - mainGroup.rotation.x) * 0.1;

        // Subtle floating motion
        mainGroup.position.y = Math.sin(elapsedTime * 1.5) * 0.06;

        renderer.render(scene, camera);
    };

    animate();

    const onResize = () => {
        if (!container) return;
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
    };

    window.addEventListener('resize', onResize);

    return () => {
        cancelAnimationFrame(animationFrameId);
        container.removeEventListener('mousedown', onPointerDown);
        container.removeEventListener('mousemove', onPointerMove);
        window.removeEventListener('mouseup', onPointerUp);
        container.removeEventListener('touchstart', onPointerDown);
        container.removeEventListener('touchmove', onPointerMove);
        window.removeEventListener('touchend', onPointerUp);
        window.removeEventListener('resize', onResize);
    };
}





