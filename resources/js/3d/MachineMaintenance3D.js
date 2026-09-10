import * as THREE from 'three';

export function initMachineMaintenance3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(50, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(0, 0, 6.8); // Camera pulled back to prevent side clipping

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    const ambientLight = new THREE.AmbientLight(0xffffff, 0.9);
    scene.add(ambientLight);

    const dirLight = new THREE.DirectionalLight(0x38bdf8, 2);
    dirLight.position.set(10, 10, 10);
    scene.add(dirLight);

    const group = new THREE.Group();
    group.scale.set(0.78, 0.78, 0.78); // Scaled for 0% clipping
    scene.add(group);

    // Main Center Gear
    const mainGearGroup = new THREE.Group();
    const mainCylGeo = new THREE.CylinderGeometry(1.2, 1.2, 0.3, 32);
    mainCylGeo.rotateX(Math.PI / 2);
    const mainMat = new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.9, roughness: 0.15 });
    const mainMesh = new THREE.Mesh(mainCylGeo, mainMat);
    mainGearGroup.add(mainMesh);

    // Teeth
    const toothMat = new THREE.MeshStandardMaterial({ color: 0x38bdf8, metalness: 0.9, roughness: 0.2 });
    for (let i = 0; i < 12; i++) {
        const angle = (i / 12) * Math.PI * 2;
        const toothGeo = new THREE.BoxGeometry(0.2, 0.35, 0.3);
        const tooth = new THREE.Mesh(toothGeo, toothMat);
        tooth.position.set(Math.cos(angle) * 1.3, Math.sin(angle) * 1.3, 0);
        tooth.rotation.z = angle;
        mainGearGroup.add(tooth);
    }
    group.add(mainGearGroup);

    // Sub Gear 1
    const sub1Group = new THREE.Group();
    sub1Group.position.set(2.1, 0, 0);
    const sub1Geo = new THREE.CylinderGeometry(0.8, 0.8, 0.3, 24);
    sub1Geo.rotateX(Math.PI / 2);
    const sub1Mat = new THREE.MeshStandardMaterial({ color: 0x0ea5e9, metalness: 0.85, roughness: 0.2 });
    const sub1Mesh = new THREE.Mesh(sub1Geo, sub1Mat);
    sub1Group.add(sub1Mesh);

    for (let i = 0; i < 8; i++) {
        const angle = (i / 8) * Math.PI * 2;
        const tooth = new THREE.Mesh(new THREE.BoxGeometry(0.18, 0.3, 0.3), toothMat);
        tooth.position.set(Math.cos(angle) * 0.9, Math.sin(angle) * 0.9, 0);
        tooth.rotation.z = angle;
        sub1Group.add(tooth);
    }
    group.add(sub1Group);

    // Sub Gear 2
    const sub2Group = new THREE.Group();
    sub2Group.position.set(-2.1, 0, 0);
    const sub2Mat = new THREE.MeshStandardMaterial({ color: 0x2563eb, metalness: 0.85, roughness: 0.2 });
    const sub2Mesh = new THREE.Mesh(sub1Geo, sub2Mat);
    sub2Group.add(sub2Mesh);

    for (let i = 0; i < 8; i++) {
        const angle = (i / 8) * Math.PI * 2;
        const tooth = new THREE.Mesh(new THREE.BoxGeometry(0.18, 0.3, 0.3), toothMat);
        tooth.position.set(Math.cos(angle) * 0.9, Math.sin(angle) * 0.9, 0);
        tooth.rotation.z = angle;
        sub2Group.add(tooth);
    }
    group.add(sub2Group);

    container.style.touchAction = 'none';

    // Touch & Mouse Drag Controls
    let isDragging = false;
    let previousPointerPos = { x: 0, y: 0 };
    let targetRotationY = 0;
    let targetRotationX = 0;

    const getPointerPos = (e) => {
        if (e.touches && e.touches.length > 0) {
            return { x: e.touches[0].clientX, y: e.touches[0].clientY };
        }
        return { x: e.clientX, y: e.clientY };
    };

    let totalDragDistance = 0;

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
            targetRotationY += deltaX * 0.01;
            targetRotationX += deltaY * 0.01;
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
            window.dispatchEvent(new CustomEvent('open-3d-telemetry', {
                detail: { title: 'Machine OEE & Health Inspection', type: 'OEE' }
            }));
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

    let animationFrameId;
    const clock = new THREE.Clock();

    const animate = () => {
        animationFrameId = requestAnimationFrame(animate);
        const t = clock.getElapsedTime();

        if (!isDragging) {
            targetRotationY += 0.003;
        }

        group.rotation.y += (targetRotationY - group.rotation.y) * 0.1;
        group.rotation.x += (targetRotationX - group.rotation.x) * 0.1;

        mainGearGroup.rotation.z = t * 0.8;
        sub1Group.rotation.z = -t * 1.2;
        sub2Group.rotation.z = -t * 1.2;

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
