import * as THREE from 'three';

/**
 * Enterprise Digital Garment Factory & AI Software 3D Engine
 * Visually communicates: Garment Factory → Telemetry Data → AI Vision → Software Dashboard → Insights
 */
export function initHero3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(0, 2.8, 7.5);
    camera.lookAt(0, -0.2, 0);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // Studio Lighting
    const ambientLight = new THREE.AmbientLight(0xffffff, 1.4);
    scene.add(ambientLight);

    const dirLight1 = new THREE.DirectionalLight(0x38bdf8, 2.8);
    dirLight1.position.set(10, 14, 12);
    scene.add(dirLight1);

    const dirLight2 = new THREE.DirectionalLight(0x0284c7, 2.0);
    dirLight2.position.set(-10, -8, -6);
    scene.add(dirLight2);

    const mainGroup = new THREE.Group();
    scene.add(mainGroup);

    // ================= 1. INDUSTRIAL FACTORY FLOOR GRID & SEWING WORKSTATIONS =================
    const gridHelper = new THREE.GridHelper(12, 24, 0x38bdf8, 0x0284c7);
    gridHelper.position.y = -1.6;
    gridHelper.material.opacity = 0.4;
    gridHelper.material.transparent = true;
    mainGroup.add(gridHelper);

    // Main Conveyor Line Base
    const lineBaseGeo = new THREE.BoxGeometry(8, 0.14, 1.2);
    const lineBaseMat = new THREE.MeshStandardMaterial({ color: 0x0f172a, metalness: 0.85, roughness: 0.3 });
    const lineBase = new THREE.Mesh(lineBaseGeo, lineBaseMat);
    lineBase.position.set(0, -1.5, 0);
    mainGroup.add(lineBase);

    // 3D Sewing Machine Workstations
    const stationPositions = [-3.0, -1.5, 0, 1.5, 3.0];
    const stationsGroup = new THREE.Group();

    stationPositions.forEach((posX, idx) => {
        // Table Base
        const tableGeo = new THREE.BoxGeometry(0.8, 0.5, 0.8);
        const tableMat = new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.9, roughness: 0.2 });
        const table = new THREE.Mesh(tableGeo, tableMat);
        table.position.set(posX, -1.2, 0);
        stationsGroup.add(table);

        // Sewing Arm Model
        const armGeo = new THREE.BoxGeometry(0.2, 0.4, 0.5);
        const armMat = new THREE.MeshStandardMaterial({ color: 0x38bdf8, metalness: 0.8 });
        const arm = new THREE.Mesh(armGeo, armMat);
        arm.position.set(posX - 0.2, -0.75, 0);
        stationsGroup.add(arm);

        // Needle Head
        const needleGeo = new THREE.CylinderGeometry(0.02, 0.02, 0.3, 12);
        const needleMat = new THREE.MeshStandardMaterial({ color: 0xffffff, metalness: 1.0 });
        const needle = new THREE.Mesh(needleGeo, needleMat);
        needle.position.set(posX - 0.2, -0.9, 0.15);
        stationsGroup.add(needle);

        // Station Status LED Indicator Light
        const ledGeo = new THREE.SphereGeometry(0.08, 16, 16);
        const ledColor = idx === 2 ? 0x38bdf8 : 0x10b981; // Active status LED
        const ledMat = new THREE.MeshBasicMaterial({ color: ledColor });
        const led = new THREE.Mesh(ledGeo, ledMat);
        led.position.set(posX + 0.25, -0.85, 0.25);
        stationsGroup.add(led);
    });
    mainGroup.add(stationsGroup);

    // ================= 2. TELEMETRY DATA BEAMS & SIGNALS =================
    const telemetryPulses = [];
    const pulseCount = 35;
    const pulseGeo = new THREE.CylinderGeometry(0.02, 0.02, 0.4, 8);
    const pulseMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8, transparent: true, opacity: 0.9 });

    for (let i = 0; i < pulseCount; i++) {
        const pulse = new THREE.Mesh(pulseGeo, pulseMat);
        pulse.position.set(
            (Math.random() - 0.5) * 7.5,
            -1.4 + Math.random() * 3.8,
            (Math.random() - 0.5) * 2.2
        );
        pulse.userData = { speed: 0.025 + Math.random() * 0.025 };
        mainGroup.add(pulse);
        telemetryPulses.push(pulse);
    }

    // ================= 3. AI VISION INSPECTION SCANNING RIG =================
    const aiGroup = new THREE.Group();
    aiGroup.position.set(0, 0.2, 0);

    // Camera Arch Frame
    const archTopGeo = new THREE.BoxGeometry(4.2, 0.14, 0.18);
    const archFrameMat = new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.95, roughness: 0.1 });
    const archTop = new THREE.Mesh(archTopGeo, archFrameMat);
    archTop.position.set(0, 1.4, 0);
    aiGroup.add(archTop);

    const pillarGeo = new THREE.CylinderGeometry(0.07, 0.07, 2.8, 16);
    const pLeft = new THREE.Mesh(pillarGeo, archFrameMat);
    pLeft.position.set(-2.0, 0, 0);
    const pRight = new THREE.Mesh(pillarGeo, archFrameMat);
    pRight.position.set(2.0, 0, 0);
    aiGroup.add(pLeft);
    aiGroup.add(pRight);

    // AI Camera Lens Unit
    const cameraBodyGeo = new THREE.BoxGeometry(0.5, 0.35, 0.4);
    const cameraBodyMat = new THREE.MeshStandardMaterial({ color: 0x0f172a, metalness: 0.9 });
    const cameraBody = new THREE.Mesh(cameraBodyGeo, cameraBodyMat);
    cameraBody.position.set(0, 1.15, 0);
    aiGroup.add(cameraBody);

    const lensGeo = new THREE.CylinderGeometry(0.12, 0.12, 0.15, 16);
    const lensMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8 });
    const lens = new THREE.Mesh(lensGeo, lensMat);
    lens.rotation.x = Math.PI / 2;
    lens.position.set(0, 1.15, 0.2);
    aiGroup.add(lens);

    // Glowing Laser Scan Plane
    const laserGeo = new THREE.PlaneGeometry(3.8, 0.1);
    const laserMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8, side: THREE.DoubleSide, transparent: true, opacity: 0.85 });
    const laserBeam = new THREE.Mesh(laserGeo, laserMat);
    laserBeam.rotation.x = Math.PI / 2;
    laserBeam.position.set(0, 0.3, 0);
    aiGroup.add(laserBeam);

    // Moving Fabric Mesh
    const fabricGeo = new THREE.PlaneGeometry(3.2, 2.0);
    const fabricMat = new THREE.MeshStandardMaterial({
        color: 0x0284c7,
        wireframe: true,
        transparent: true,
        opacity: 0.65,
    });
    const fabricMesh = new THREE.Mesh(fabricGeo, fabricMat);
    fabricMesh.rotation.x = -Math.PI / 2.3;
    fabricMesh.position.set(0, -0.5, 0);
    aiGroup.add(fabricMesh);

    mainGroup.add(aiGroup);

    // ================= 4. SaaS ENTERPRISE DASHBOARD UI MONITOR =================
    const monitorGroup = new THREE.Group();
    monitorGroup.position.set(0, 0.3, 0);

    // Tilted Monitor Chassis
    const chassisGeo = new THREE.BoxGeometry(4.8, 2.8, 0.12);
    const chassisMat = new THREE.MeshStandardMaterial({ color: 0x0f172a, metalness: 0.9, roughness: 0.2 });
    const chassis = new THREE.Mesh(chassisGeo, chassisMat);
    monitorGroup.add(chassis);

    // Screen Display Surface
    const screenGeo = new THREE.PlaneGeometry(4.6, 2.6);
    const screenMat = new THREE.MeshBasicMaterial({ color: 0x0284c7, transparent: true, opacity: 0.3 });
    const screen = new THREE.Mesh(screenGeo, screenMat);
    screen.position.z = 0.07;
    monitorGroup.add(screen);

    // Animated Software Bar Graphs inside Monitor
    const chartBars = [];
    const heights = [0.7, 1.2, 0.9, 1.6, 1.4, 1.8, 1.5, 2.0];
    const barGeo = new THREE.BoxGeometry(0.32, 1.0, 0.04);
    const barMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8 });

    heights.forEach((h, i) => {
        const bar = new THREE.Mesh(barGeo, barMat);
        bar.scale.y = h;
        bar.position.set(-1.8 + i * 0.5, -0.4 + (h * 0.5) / 2, 0.08);
        monitorGroup.add(bar);
        chartBars.push({ mesh: bar, baseHeight: h });
    });

    monitorGroup.rotation.y = -Math.PI / 14;
    mainGroup.add(monitorGroup);

    // ================= CONTROLS & INTERACTIVITY =================
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
            targetRotationY += 0.0025;
        }

        // Rotation Interpolation
        mainGroup.rotation.y += (targetRotationY - mainGroup.rotation.y) * 0.08;
        mainGroup.rotation.x += (targetRotationX - mainGroup.rotation.x) * 0.08;

        // Telemetry Data Pulses rising
        telemetryPulses.forEach((pulse) => {
            pulse.position.y += pulse.userData.speed;
            if (pulse.position.y > 2.8) {
                pulse.position.y = -1.4;
            }
        });

        // AI Vision Laser Scan motion
        laserBeam.position.z = Math.sin(elapsedTime * 2.8) * 0.8;

        // Dynamic Dashboard Chart Bars Pulse
        chartBars.forEach((item, idx) => {
            const pulseFactor = 1 + Math.sin(elapsedTime * 3.5 + idx) * 0.14;
            item.mesh.scale.y = item.baseHeight * pulseFactor;
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


