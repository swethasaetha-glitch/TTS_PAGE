import * as THREE from 'three';

/**
 * Digital Factory & Software Engine 3D Scene
 * Flow: Garment Factory → Machines & Telemetry → AI Vision Scan → Software Dashboard → Digital Insights
 */
export function initHero3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(0, 3.2, 7.8);
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // Ambient & Directional Lighting
    const ambientLight = new THREE.AmbientLight(0xffffff, 1.2);
    scene.add(ambientLight);

    const dirLight1 = new THREE.DirectionalLight(0x38bdf8, 2.5);
    dirLight1.position.set(8, 12, 10);
    scene.add(dirLight1);

    const dirLight2 = new THREE.DirectionalLight(0x0284c7, 1.8);
    dirLight2.position.set(-8, -6, -4);
    scene.add(dirLight2);

    const mainGroup = new THREE.Group();
    scene.add(mainGroup);

    // ================= 1. DIGITAL FACTORY FLOOR GRID & SEWING LINES =================
    const factoryGrid = new THREE.GridHelper(10, 20, 0x0284c7, 0x38bdf8);
    factoryGrid.position.y = -1.6;
    factoryGrid.material.opacity = 0.35;
    factoryGrid.material.transparent = true;
    mainGroup.add(factoryGrid);

    // Sewing Conveyor Line Belts
    const conveyorGroup = new THREE.Group();
    const conveyorGeo = new THREE.BoxGeometry(7, 0.12, 0.8);
    const conveyorMat = new THREE.MeshStandardMaterial({
        color: 0x0f172a,
        roughness: 0.4,
        metalness: 0.8,
    });
    const conveyorBelt = new THREE.Mesh(conveyorGeo, conveyorMat);
    conveyorBelt.position.set(0, -1.5, 0);
    conveyorGroup.add(conveyorBelt);

    // Sewing Station Workstation Nodes
    const stationMat = new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.9, roughness: 0.2 });
    const stationGeo = new THREE.BoxGeometry(0.6, 0.4, 0.6);
    
    const stationPositions = [-2.5, -1.2, 0.1, 1.4, 2.7];
    const stations = [];
    stationPositions.forEach((posX) => {
        const station = new THREE.Mesh(stationGeo, stationMat);
        station.position.set(posX, -1.25, 0);
        conveyorGroup.add(station);

        // Status Indicator LED on Machine Station
        const ledGeo = new THREE.SphereGeometry(0.06, 12, 12);
        const ledMat = new THREE.MeshBasicMaterial({ color: 0x10b981 });
        const led = new THREE.Mesh(ledGeo, ledMat);
        led.position.set(posX, -1.0, 0);
        conveyorGroup.add(led);

        stations.push(station);
    });
    mainGroup.add(conveyorGroup);

    // ================= 2. TELEMETRY DATA STREAM PULSES =================
    const telemetryCount = 40;
    const telemetryGeo = new THREE.BoxGeometry(0.04, 0.25, 0.04);
    const telemetryMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8, transparent: true, opacity: 0.85 });
    const telemetryPulses = [];

    for (let i = 0; i < telemetryCount; i++) {
        const pulse = new THREE.Mesh(telemetryGeo, telemetryMat);
        pulse.position.set(
            (Math.random() - 0.5) * 6,
            -1.4 + Math.random() * 3.5,
            (Math.random() - 0.5) * 2
        );
        pulse.userData = { speed: 0.02 + Math.random() * 0.03 };
        mainGroup.add(pulse);
        telemetryPulses.push(pulse);
    }

    // ================= 3. AI VISION INSPECTION SCANNER RIG =================
    const aiScannerGroup = new THREE.Group();
    aiScannerGroup.position.set(0, 0.3, 0);

    // Scanner Arch Structure
    const archBeamGeo = new THREE.BoxGeometry(3.6, 0.12, 0.15);
    const archMat = new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.95 });
    const archBeam = new THREE.Mesh(archBeamGeo, archMat);
    archBeam.position.set(0, 1.2, 0);
    aiScannerGroup.add(archBeam);

    const pillarGeo = new THREE.CylinderGeometry(0.06, 0.06, 2.4, 16);
    const pLeft = new THREE.Mesh(pillarGeo, archMat);
    pLeft.position.set(-1.75, 0, 0);
    const pRight = new THREE.Mesh(pillarGeo, archMat);
    pRight.position.set(1.75, 0, 0);
    aiScannerGroup.add(pLeft);
    aiScannerGroup.add(pRight);

    // Glowing AI Vision Laser Plane
    const laserPlaneGeo = new THREE.PlaneGeometry(3.4, 0.08);
    const laserPlaneMat = new THREE.MeshBasicMaterial({
        color: 0x38bdf8,
        side: THREE.DoubleSide,
        transparent: true,
        opacity: 0.85,
    });
    const laserPlane = new THREE.Mesh(laserPlaneGeo, laserPlaneMat);
    laserPlane.rotation.x = Math.PI / 2;
    laserPlane.position.set(0, 0.4, 0);
    aiScannerGroup.add(laserPlane);

    // Fabric Mesh Being Inspected Under Camera
    const fabricGeo = new THREE.PlaneGeometry(2.4, 1.6);
    const fabricMat = new THREE.MeshStandardMaterial({
        color: 0x0284c7,
        roughness: 0.5,
        wireframe: true,
        transparent: true,
        opacity: 0.6,
    });
    const fabricMesh = new THREE.Mesh(fabricGeo, fabricMat);
    fabricMesh.rotation.x = -Math.PI / 2.5;
    fabricMesh.position.set(0, -0.4, 0);
    aiScannerGroup.add(fabricMesh);

    mainGroup.add(aiScannerGroup);

    // ================= 4. ENTERPRISE SOFTWARE DASHBOARD UI MONITOR =================
    const dashboardGroup = new THREE.Group();
    dashboardGroup.position.set(0, 0.2, 0);

    // Tilted Monitor Outer Frame
    const monitorFrameGeo = new THREE.BoxGeometry(4.2, 2.5, 0.12);
    const monitorFrameMat = new THREE.MeshStandardMaterial({
        color: 0x0f172a,
        roughness: 0.2,
        metalness: 0.9,
    });
    const monitorFrame = new THREE.Mesh(monitorFrameGeo, monitorFrameMat);
    dashboardGroup.add(monitorFrame);

    // Screen Display Surface
    const screenGeo = new THREE.PlaneGeometry(4.0, 2.3);
    const screenMat = new THREE.MeshBasicMaterial({
        color: 0x0284c7,
        transparent: true,
        opacity: 0.25,
    });
    const screenMesh = new THREE.Mesh(screenGeo, screenMat);
    screenMesh.position.z = 0.07;
    dashboardGroup.add(screenMesh);

    // Software Analytics Bar Chart UI Elements inside 3D Monitor
    const chartBars = [];
    const barHeights = [0.6, 1.1, 0.8, 1.4, 1.2, 1.7, 1.5];
    const barGeo = new THREE.BoxGeometry(0.28, 1.0, 0.05);
    const barMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8 });

    barHeights.forEach((h, idx) => {
        const bar = new THREE.Mesh(barGeo, barMat);
        bar.scale.y = h;
        bar.position.set(-1.4 + idx * 0.46, -0.3 + (h * 0.5) / 2, 0.08);
        dashboardGroup.add(bar);
        chartBars.push({ mesh: bar, baseHeight: h });
    });

    dashboardGroup.rotation.y = -Math.PI / 12;
    mainGroup.add(dashboardGroup);

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
            targetRotationY += 0.0025;
        }

        // Smooth rotation interpolation
        mainGroup.rotation.y += (targetRotationY - mainGroup.rotation.y) * 0.08;
        mainGroup.rotation.x += (targetRotationX - mainGroup.rotation.x) * 0.08;

        // Telemetry Data Pulses rising vertically
        telemetryPulses.forEach((pulse) => {
            pulse.position.y += pulse.userData.speed;
            if (pulse.position.y > 2.5) {
                pulse.position.y = -1.4;
            }
        });

        // AI Scanner Laser Beam oscillations
        laserPlane.position.z = Math.sin(elapsedTime * 2.5) * 0.7;

        // Dynamic Chart Bars animation in Software Dashboard
        chartBars.forEach((item, idx) => {
            const pulseFactor = 1 + Math.sin(elapsedTime * 3 + idx) * 0.15;
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

