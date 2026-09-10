import * as THREE from 'three';

/**
 * Enterprise B2B Garment Software Engine 3D Scene
 * Renders realistic SaaS Software Dashboards, AI Inspection HUDs & Telemetry Streams
 */
export function initHero3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(0, 2.2, 6.8);
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // Premium SaaS Lighting Setup
    const ambientLight = new THREE.AmbientLight(0xffffff, 1.6);
    scene.add(ambientLight);

    const dirLight1 = new THREE.DirectionalLight(0x38bdf8, 3.0);
    dirLight1.position.set(8, 12, 10);
    scene.add(dirLight1);

    const dirLight2 = new THREE.DirectionalLight(0x0284c7, 2.2);
    dirLight2.position.set(-8, -6, -4);
    scene.add(dirLight2);

    const mainGroup = new THREE.Group();
    scene.add(mainGroup);

    // ================= 1. DYNAMIC SAAS SOFTWARE MONITOR SCREEN =================
    const monitorGroup = new THREE.Group();

    // Sleek Curved Monitor Panel
    const monitorGeo = new THREE.BoxGeometry(5.2, 3.2, 0.15);
    const monitorMat = new THREE.MeshStandardMaterial({
        color: 0x0369a1,
        metalness: 0.9,
        roughness: 0.15,
    });
    const monitorMesh = new THREE.Mesh(monitorGeo, monitorMat);
    monitorGroup.add(monitorMesh);

    // Glowing Inner Screen Display Surface
    const screenGeo = new THREE.PlaneGeometry(5.0, 3.0);
    const screenMat = new THREE.MeshBasicMaterial({
        color: 0x0284c7,
        transparent: true,
        opacity: 0.35,
    });
    const screenMesh = new THREE.Mesh(screenGeo, screenMat);
    screenMesh.position.z = 0.08;
    monitorGroup.add(screenMesh);

    // Screen Bezel Border Glow Line
    const bezelGeo = new THREE.RingGeometry(2.3, 2.35, 32);
    const bezelMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8, side: THREE.DoubleSide });
    const bezel = new THREE.Mesh(bezelGeo, bezelMat);
    bezel.position.z = 0.09;
    bezel.scale.set(1.05, 0.65, 1);
    monitorGroup.add(bezel);

    // ================= 2. LIVE SOFTWARE BAR CHARTS & TELEMETRY GAUGES =================
    const chartBars = [];
    const barHeights = [0.8, 1.4, 1.1, 1.9, 1.6, 2.2, 1.8, 2.4, 2.1];
    const barGeo = new THREE.BoxGeometry(0.35, 1.0, 0.06);
    const barMat = new THREE.MeshStandardMaterial({
        color: 0x38bdf8,
        emissive: 0x0ea5e9,
        emissiveIntensity: 0.4,
        roughness: 0.2,
    });

    barHeights.forEach((h, idx) => {
        const bar = new THREE.Mesh(barGeo, barMat);
        bar.scale.y = h;
        bar.position.set(-2.0 + idx * 0.5, -0.6 + (h * 0.5) / 2, 0.1);
        monitorGroup.add(bar);
        chartBars.push({ mesh: bar, baseHeight: h });
    });

    // ================= 3. AI VISION INSPECTION SCANNER LASER PLANE =================
    const aiScanGroup = new THREE.Group();

    // Laser Beam Line across Software Screen
    const laserGeo = new THREE.PlaneGeometry(4.8, 0.08);
    const laserMat = new THREE.MeshBasicMaterial({
        color: 0x38bdf8,
        side: THREE.DoubleSide,
        transparent: true,
        opacity: 0.9,
    });
    const laserMesh = new THREE.Mesh(laserGeo, laserMat);
    laserMesh.position.z = 0.12;
    aiScanGroup.add(laserMesh);

    monitorGroup.add(aiScanGroup);

    // ================= 4. SHOPFLOOR WORKSTATION NODES & TELEMETRY PULSES =================
    const shopfloorGroup = new THREE.Group();
    shopfloorGroup.position.y = -1.8;

    // Factory Floor Base Grid
    const floorGrid = new THREE.GridHelper(10, 20, 0x38bdf8, 0x0284c7);
    floorGrid.material.opacity = 0.4;
    floorGrid.material.transparent = true;
    shopfloorGroup.add(floorGrid);

    // Workstation Node Rings & Indicators
    const nodePositions = [-3.0, -1.5, 0, 1.5, 3.0];
    nodePositions.forEach((posX, idx) => {
        const nodeGeo = new THREE.CylinderGeometry(0.25, 0.25, 0.1, 16);
        const nodeMat = new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.8 });
        const node = new THREE.Mesh(nodeGeo, nodeMat);
        node.position.set(posX, 0.05, 0);
        shopfloorGroup.add(node);

        const statusLedGeo = new THREE.SphereGeometry(0.08, 16, 16);
        const statusLedMat = new THREE.MeshBasicMaterial({ color: idx === 2 ? 0x38bdf8 : 0x10b981 });
        const statusLed = new THREE.Mesh(statusLedGeo, statusLedMat);
        statusLed.position.set(posX, 0.2, 0);
        shopfloorGroup.add(statusLed);
    });

    mainGroup.add(shopfloorGroup);

    // Telemetry Data Pulses Rising from Shopfloor to SaaS Monitor
    const telemetryPulses = [];
    const pulseCount = 30;
    const pulseGeo = new THREE.CylinderGeometry(0.02, 0.02, 0.35, 8);
    const pulseMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8, transparent: true, opacity: 0.85 });

    for (let i = 0; i < pulseCount; i++) {
        const pulse = new THREE.Mesh(pulseGeo, pulseMat);
        pulse.position.set(
            (Math.random() - 0.5) * 7.0,
            -1.7 + Math.random() * 3.2,
            (Math.random() - 0.5) * 2.0
        );
        pulse.userData = { speed: 0.02 + Math.random() * 0.025 };
        mainGroup.add(pulse);
        telemetryPulses.push(pulse);
    }

    mainGroup.add(monitorGroup);

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
            targetRotationY += deltaX * 0.008;
            targetRotationX += deltaY * 0.005;
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

        if (!isDragging) {
            targetRotationY += 0.002;
        }

        // Smooth rotation
        mainGroup.rotation.y += (targetRotationY - mainGroup.rotation.y) * 0.08;
        mainGroup.rotation.x += (targetRotationX - mainGroup.rotation.x) * 0.08;

        // Laser Scan oscillation across screen
        laserMesh.position.y = Math.sin(elapsedTime * 2.2) * 1.2;

        // Dynamic Bar Chart pulses
        chartBars.forEach((item, idx) => {
            const pulseFactor = 1 + Math.sin(elapsedTime * 3.0 + idx) * 0.12;
            item.mesh.scale.y = item.baseHeight * pulseFactor;
        });

        // Telemetry signals rising vertically
        telemetryPulses.forEach((pulse) => {
            pulse.position.y += pulse.userData.speed;
            if (pulse.position.y > 1.8) {
                pulse.position.y = -1.7;
            }
        });

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



