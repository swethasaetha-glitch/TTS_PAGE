import * as THREE from 'three';

export function initFloatingNodes3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(50, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(0, 0, 7.5);

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
    group.scale.set(0.82, 0.82, 0.82); // Scaled for 0% clipping
    scene.add(group);

    const nodes = [
        { pos: new THREE.Vector3(0, 0, 0), size: 0.5, color: 0x38bdf8 },
        { pos: new THREE.Vector3(2, 1.2, -1), size: 0.35, color: 0x0ea5e9 },
        { pos: new THREE.Vector3(-2, 1, 1), size: 0.35, color: 0x0284c7 },
        { pos: new THREE.Vector3(1.5, -1.5, 1), size: 0.3, color: 0x2563eb },
        { pos: new THREE.Vector3(-1.8, -1.2, -1), size: 0.3, color: 0x38bdf8 },
        { pos: new THREE.Vector3(0, 2.2, 0.5), size: 0.4, color: 0x60a5fa },
    ];

    nodes.forEach(node => {
        const geo = new THREE.SphereGeometry(node.size, 32, 32);
        const mat = new THREE.MeshStandardMaterial({
            color: node.color,
            emissive: node.color,
            emissiveIntensity: 0.6,
            roughness: 0.2,
            metalness: 0.8,
        });
        const mesh = new THREE.Mesh(geo, mat);
        mesh.position.copy(node.pos);
        group.add(mesh);
    });

    const connections = [
        [0, 1], [0, 2], [0, 3], [0, 4], [0, 5], [1, 5], [2, 4]
    ];

    const lineMat = new THREE.LineBasicMaterial({ color: 0x38bdf8, transparent: true, opacity: 0.6 });

    connections.forEach(([i, j]) => {
        const points = [nodes[i].pos, nodes[j].pos];
        const lineGeo = new THREE.BufferGeometry().setFromPoints(points);
        const line = new THREE.Line(lineGeo, lineMat);
        group.add(line);
    });

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
                detail: { title: 'Global Plant Constellation Network Inspection', type: 'Nodes' }
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

        if (!isDragging) {
            targetRotationY += 0.003;
        }

        group.rotation.y += (targetRotationY - group.rotation.y) * 0.1;
        group.rotation.x += (targetRotationX - group.rotation.x) * 0.1;

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
