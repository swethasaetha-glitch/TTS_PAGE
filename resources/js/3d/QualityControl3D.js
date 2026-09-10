import * as THREE from 'three';

export function initQualityControl3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(50, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(3.8, 2.8, 5.2);
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // Lights
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.8);
    scene.add(ambientLight);

    const dirLight = new THREE.DirectionalLight(0x38bdf8, 2);
    dirLight.position.set(5, 8, 5);
    scene.add(dirLight);

    const group = new THREE.Group();
    group.scale.set(0.82, 0.82, 0.82); // Scaled for 0% clipping
    scene.add(group);

    // Conveyor Base
    const baseGeo = new THREE.BoxGeometry(3.2, 0.2, 4);
    const baseMat = new THREE.MeshStandardMaterial({ color: 0x0ea5e9, roughness: 0.3, metalness: 0.8 });
    const baseMesh = new THREE.Mesh(baseGeo, baseMat);
    baseMesh.position.y = -1.2;
    group.add(baseMesh);

    // Side Pillars
    const pillarGeo = new THREE.CylinderGeometry(0.08, 0.08, 2, 16);
    const pillarMat = new THREE.MeshStandardMaterial({ color: 0x38bdf8, metalness: 0.9 });
    
    const p1 = new THREE.Mesh(pillarGeo, pillarMat);
    p1.position.set(-1.5, 0, 0);
    group.add(p1);

    const p2 = new THREE.Mesh(pillarGeo, pillarMat);
    p2.position.set(1.5, 0, 0);
    group.add(p2);

    // Top Beam
    const topBeamGeo = new THREE.BoxGeometry(3.2, 0.15, 0.2);
    const topBeamMat = new THREE.MeshStandardMaterial({ color: 0x0284c7, metalness: 0.9 });
    const topBeam = new THREE.Mesh(topBeamGeo, topBeamMat);
    topBeam.position.set(0, 1, 0);
    group.add(topBeam);

    // Laser Beam Plane
    const laserGeo = new THREE.BoxGeometry(3, 2, 0.02);
    const laserMat = new THREE.MeshBasicMaterial({ color: 0x38bdf8, transparent: true, opacity: 0.45, side: THREE.DoubleSide });
    const laserMesh = new THREE.Mesh(laserGeo, laserMat);
    laserMesh.position.set(0, 0, 0);
    group.add(laserMesh);

    // Inspectable Product Box
    const boxGeo = new THREE.BoxGeometry(1.2, 1.2, 1.2);
    const boxMat = new THREE.MeshStandardMaterial({ color: 0x2563eb, roughness: 0.2, metalness: 0.7, wireframe: true });
    const boxMesh = new THREE.Mesh(boxGeo, boxMat);
    boxMesh.position.set(0, -0.2, 0);
    group.add(boxMesh);

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

    const onPointerDown = (e) => {
        e.stopPropagation();
        isDragging = true;
        previousPointerPos = getPointerPos(e);
    };

    const onPointerMove = (e) => {
        e.stopPropagation();
        const pos = getPointerPos(e);
        if (isDragging) {
            const deltaX = pos.x - previousPointerPos.x;
            const deltaY = pos.y - previousPointerPos.y;
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
    };

    container.addEventListener('mousedown', onPointerDown);
    container.addEventListener('mousemove', onPointerMove);
    container.addEventListener('click', onClick);
    window.addEventListener('mouseup', onPointerUp);

    container.addEventListener('touchstart', onPointerDown, { passive: false });
    container.addEventListener('touchmove', onPointerMove, { passive: false });
    container.addEventListener('touchend', onPointerUp);
    window.addEventListener('touchend', onPointerUp);

    // Animation Loop
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

        laserMesh.position.z = Math.sin(t * 2) * 1.4;
        boxMesh.rotation.y = t * 0.4;

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
