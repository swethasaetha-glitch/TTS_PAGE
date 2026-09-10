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

    // 3D Display Monitor Chassis
    const monitorGroup = new THREE.Group();

    const frameGeo = new THREE.BoxGeometry(5.4, 3.4, 0.14);
    const frameMat = new THREE.MeshStandardMaterial({
        color: 0x0f172a,
        metalness: 0.95,
        roughness: 0.15,
    });
    const frameMesh = new THREE.Mesh(frameGeo, frameMat);
    monitorGroup.add(frameMesh);

    // Illuminated Front Screen
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
        ctx.font = 'bold 20px sans-serif';
        ctx.fillText('TRACK TECH SOLUTION — SMART GARMENT SOFTWARE SUITE', 30, 38);

        // System Live Badge
        ctx.fillStyle = '#10b981';
        ctx.beginPath();
        ctx.arc(920, 30, 6, 0, Math.PI * 2);
        ctx.fill();

        ctx.fillStyle = '#e2e8f0';
        ctx.font = 'bold 14px monospace';
        ctx.fillText('SYSTEM LIVE (10ms)', 935, 35);

        // ---------------- 4 TOP SaaS KPI CARDS ----------------
        const cards = [
            { label: 'OEE UPTIME', val: '98.4%', sub: 'Optimal Motor Health', color: '#10b981' },
            { label: 'RFID THROUGHPUT', val: '14,280 Pcs/Hr', sub: '500+ Garment Lines', color: '#38bdf8' },
            { label: 'AI QUALITY PASS', val: '99.4%', sub: 'Defects Filtered: 1,420', color: '#38bdf8' },
            { label: 'LINE BALANCE', val: '96.8%', sub: '25 Plants Synced', color: '#818cf8' },
        ];

        cards.forEach((card, idx) => {
            const x = 30 + idx * 242;
            const y = 80;

            // Card Container
            ctx.fillStyle = '#1e293b';
            ctx.fillRect(x, y, 226, 110);
            ctx.strokeStyle = '#334155';
            ctx.lineWidth = 1;
            ctx.strokeRect(x, y, 226, 110);

            // Card Accent Top Line
            ctx.fillStyle = card.color;
            ctx.fillRect(x, y, 226, 4);

            // Text
            ctx.fillStyle = '#94a3b8';
            ctx.font = 'bold 12px sans-serif';
            ctx.fillText(card.label, x + 16, y + 28);

            ctx.fillStyle = '#ffffff';
            ctx.font = 'bold 22px sans-serif';
            ctx.fillText(card.val, x + 16, y + 62);

            ctx.fillStyle = card.color;
            ctx.font = 'bold 12px sans-serif';
            ctx.fillText(card.sub, x + 16, y + 90);
        });

        // ---------------- MAIN PANEL 1: LIVE LINE OUTPUT ANALYTICS CHART ----------------
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(30, 210, 470, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(30, 210, 470, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('LIVE SEWING LINE OUTPUT & TELEMETRY', 50, 240);

        // Dynamic Line Graph Chart Area
        ctx.strokeStyle = '#0284c7';
        ctx.lineWidth = 3;
        ctx.beginPath();
        for (let i = 0; i < 10; i++) {
            const gx = 60 + i * 42;
            const gy = 520 - Math.sin(elapsedTime * 2 + i) * 60 - (i % 3) * 20;
            if (i === 0) ctx.moveTo(gx, gy);
            else ctx.lineTo(gx, gy);

            // Data Points
            ctx.fillStyle = '#38bdf8';
            ctx.fillRect(gx - 4, gy - 4, 8, 8);
        }
        ctx.stroke();

        // Dynamic Throughput Bar Indicators
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

        // ---------------- MAIN PANEL 2: AI VISION INSPECTION SCANNER HUD ----------------
        ctx.fillStyle = '#1e293b';
        ctx.fillRect(524, 210, 470, 390);
        ctx.strokeStyle = '#334155';
        ctx.strokeRect(524, 210, 470, 390);

        ctx.fillStyle = '#38bdf8';
        ctx.font = 'bold 15px sans-serif';
        ctx.fillText('AI VISION FABRIC INSPECTION SCANNER Feed', 544, 240);

        // Fabric Roll Inspection Frame
        ctx.fillStyle = '#0f172a';
        ctx.fillRect(544, 260, 430, 250);
        ctx.strokeStyle = '#0284c7';
        ctx.strokeRect(544, 260, 430, 250);

        // Animated Fabric Weave Texture Grid
        ctx.strokeStyle = 'rgba(56, 189, 248, 0.15)';
        ctx.lineWidth = 1;
        for (let gx = 544; gx < 974; gx += 20) {
            ctx.beginPath();
            ctx.moveTo(gx, 260);
            ctx.lineTo(gx, 510);
            ctx.stroke();
        }
        for (let gy = 260; gy < 510; gy += 20) {
            ctx.beginPath();
            ctx.moveTo(544, gy);
            ctx.lineTo(974, gy);
            ctx.stroke();
        }

        // Moving AI Laser Scan Line
        scanLineX += scanDir * 2.5;
        if (scanLineX > 410 || scanLineX < 10) scanDir *= -1;

        const scanX = 544 + scanLineX;
        ctx.strokeStyle = '#38bdf8';
        ctx.lineWidth = 3;
        ctx.beginPath();
        ctx.moveTo(scanX, 260);
        ctx.lineTo(scanX, 510);
        ctx.stroke();

        // AI Bounding Box Callout
        ctx.strokeStyle = '#ef4444';
        ctx.lineWidth = 2;
        ctx.strokeRect(710, 330, 120, 90);

        ctx.fillStyle = '#ef4444';
        ctx.font = 'bold 12px monospace';
        ctx.fillText('STITCH DEFECT DETECTED', 710, 320);
        ctx.fillText('CONFIDENCE: 99.4%', 710, 435);

        // Bottom Status Log Ticker
        ctx.fillStyle = '#10b981';
        ctx.font = 'bold 13px monospace';
        ctx.fillText('INLINE INSPECTION PASS RATE: 98.6% FLAWLESS | ROLL #842 ACTIVE', 544, 550);

        uiTexture.needsUpdate = true;
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





