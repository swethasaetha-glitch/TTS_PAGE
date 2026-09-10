import * as THREE from 'three';

/**
 * 360° Dual-Sided B2B Garment Software Engine 3D Scene
 * Renders complete front & back SaaS Software Interfaces with Orbital Telemetry Data Rings
 */
export function initHero3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(0, 1.8, 6.5);
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // Studio Lighting
    const ambientLight = new THREE.AmbientLight(0xffffff, 1.8);
    scene.add(ambientLight);

    const dirLight1 = new THREE.DirectionalLight(0x38bdf8, 3.2);
    dirLight1.position.set(10, 14, 12);
    scene.add(dirLight1);

    const dirLight2 = new THREE.DirectionalLight(0x0284c7, 2.5);
    dirLight2.position.set(-10, -8, -6);
    scene.add(dirLight2);

    const mainGroup = new THREE.Group();
    scene.add(mainGroup);

    // ================= 1. DUAL-SIDED 360° SOFTWARE DISPLAY MONITOR =================
    const monitorGroup = new THREE.Group();

    // Metallic Outer Frame Chassis
    const chassisGeo = new THREE.BoxGeometry(5.2, 3.2, 0.16);
    const chassisMat = new THREE.MeshStandardMaterial({
        color: 0x0f172a,
        metalness: 0.9,
        roughness: 0.15,
    });
    const chassis = new THREE.Mesh(chassisGeo, chassisMat);
    monitorGroup.add(chassis);

    // Illuminated Bezel Trim
    const bezelGeo = new THREE.RingGeometry(2.3, 2.35, 32);
    const bezelMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8, side: THREE.DoubleSide });
    
    const bezelFront = new THREE.Mesh(bezelGeo, bezelMat);
    bezelFront.position.z = 0.09;
    bezelFront.scale.set(1.05, 0.65, 1);
    monitorGroup.add(bezelFront);

    const bezelBack = new THREE.Mesh(bezelGeo, bezelMat);
    bezelBack.position.z = -0.09;
    bezelBack.rotation.y = Math.PI;
    bezelBack.scale.set(1.05, 0.65, 1);
    monitorGroup.add(bezelBack);

    // ---------------- FRONT DISPLAY (SaaS Executive Analytics Dashboard) ----------------
    const frontScreenGeo = new THREE.PlaneGeometry(5.0, 3.0);
    const frontScreenMat = new THREE.MeshBasicMaterial({
        color: 0x0284c7,
        transparent: true,
        opacity: 0.35,
        side: THREE.FrontSide,
    });
    const frontScreen = new THREE.Mesh(frontScreenGeo, frontScreenMat);
    frontScreen.position.z = 0.09;
    monitorGroup.add(frontScreen);

    // Front Software Analytics Bar Charts
    const frontBars = [];
    const heights = [0.8, 1.4, 1.1, 1.9, 1.6, 2.2, 1.8, 2.4, 2.1];
    const barGeo = new THREE.BoxGeometry(0.35, 1.0, 0.05);
    const barMat = new THREE.MeshStandardMaterial({
        color: 0x38bdf8,
        emissive: 0x0ea5e9,
        emissiveIntensity: 0.5,
        roughness: 0.2,
    });

    heights.forEach((h, idx) => {
        const bar = new THREE.Mesh(barGeo, barMat);
        bar.scale.y = h;
        bar.position.set(-2.0 + idx * 0.5, -0.6 + (h * 0.5) / 2, 0.11);
        monitorGroup.add(bar);
        frontBars.push({ mesh: bar, baseHeight: h });
    });

    // ---------------- BACK DISPLAY (AI Vision & Multi-Plant Network Hub) ----------------
    const backScreenGeo = new THREE.PlaneGeometry(5.0, 3.0);
    const backScreenMat = new THREE.MeshBasicMaterial({
        color: 0x0f172a,
        side: THREE.FrontSide,
    });
    const backScreen = new THREE.Mesh(backScreenGeo, backScreenMat);
    backScreen.rotation.y = Math.PI;
    backScreen.position.z = -0.09;
    monitorGroup.add(backScreen);

    // Back Screen Circuit/Network Lines
    const backNetworkGroup = new THREE.Group();
    backNetworkGroup.rotation.y = Math.PI;
    backNetworkGroup.position.z = -0.11;

    const backNodePositions = [
        [-1.8, 0.8], [-0.8, 0.4], [0.2, 0.9], [1.2, 0.3], [1.8, 0.8],
        [-1.4, -0.6], [-0.2, -0.4], [0.8, -0.7], [1.6, -0.5]
    ];

    backNodePositions.forEach(([x, y]) => {
        const nodeGeo = new THREE.SphereGeometry(0.12, 16, 16);
        const nodeMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8 });
        const node = new THREE.Mesh(nodeGeo, nodeMat);
        node.position.set(x, y, 0);
        backNetworkGroup.add(node);

        const ringGeo = new THREE.RingGeometry(0.16, 0.2, 16);
        const ringMat = new THREE.MeshBasicMaterial({ color: 0x0284c7, side: THREE.DoubleSide });
        const ring = new THREE.Mesh(ringGeo, ringMat);
        ring.position.set(x, y, 0.01);
        backNetworkGroup.add(ring);
    });
    monitorGroup.add(backNetworkGroup);

    // ================= 2. 360° ORBITAL TELEMETRY DATA RINGS =================
    const orbitGroup = new THREE.Group();

    // Orbital Ring 1 (Inner Tilted Ring)
    const ring1Geo = new THREE.TorusGeometry(3.6, 0.03, 16, 100);
    const ring1Mat = new THREE.MeshStandardMaterial({
        color: 0x38bdf8,
        emissive: 0x0284c7,
        emissiveIntensity: 0.6,
        roughness: 0.1,
    });
    const ring1 = new THREE.Mesh(ring1Geo, ring1Mat);
    ring1.rotation.x = Math.PI / 3;
    ring1.rotation.y = Math.PI / 6;
    orbitGroup.add(ring1);

    // Orbital Ring 2 (Outer Horizontal Ring)
    const ring2Geo = new THREE.TorusGeometry(4.2, 0.025, 16, 100);
    const ring2Mat = new THREE.MeshStandardMaterial({
        color: 0x0ea5e9,
        emissive: 0x0369a1,
        emissiveIntensity: 0.5,
        roughness: 0.15,
    });
    const ring2 = new THREE.Mesh(ring2Geo, ring2Mat);
    ring2.rotation.x = Math.PI / 2.2;
    orbitGroup.add(ring2);

    // Orbiting Data Node Particles around rings
    const orbitParticles = [];
    const particleGeo = new THREE.SphereGeometry(0.08, 12, 12);
    const particleMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8 });

    for (let i = 0; i < 8; i++) {
        const particle = new THREE.Mesh(particleGeo, particleMat);
        const angle = (i / 8) * Math.PI * 2;
        particle.position.set(Math.cos(angle) * 3.6, Math.sin(angle) * 1.8, Math.sin(angle) * 1.5);
        particle.userData = { angle, radius: 3.6, speed: 0.015 + (i % 3) * 0.005 };
        orbitGroup.add(particle);
        orbitParticles.push(particle);
    }

    mainGroup.add(orbitGroup);

    // ================= 3. POLISHED INDUSTRIAL BASE GRID =================
    const baseGrid = new THREE.GridHelper(12, 24, 0x38bdf8, 0x0284c7);
    baseGrid.position.y = -1.8;
    baseGrid.material.opacity = 0.4;
    baseGrid.material.transparent = true;
    mainGroup.add(baseGrid);

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
            targetRotationY += 0.003;
        }

        // Smooth rotation
        mainGroup.rotation.y += (targetRotationY - mainGroup.rotation.y) * 0.08;
        mainGroup.rotation.x += (targetRotationX - mainGroup.rotation.x) * 0.08;

        // Orbit Rings Motion
        ring1.rotation.z = elapsedTime * 0.25;
        ring2.rotation.z = -elapsedTime * 0.2;

        // Orbiting Particles Motion
        orbitParticles.forEach((p) => {
            p.userData.angle += p.userData.speed;
            p.position.x = Math.cos(p.userData.angle) * p.userData.radius;
            p.position.y = Math.sin(p.userData.angle) * 1.6;
            p.position.z = Math.sin(p.userData.angle) * 1.8;
        });

        // Dynamic Front Bar Chart Pulses
        frontBars.forEach((item, idx) => {
            const pulseFactor = 1 + Math.sin(elapsedTime * 3.0 + idx) * 0.14;
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




