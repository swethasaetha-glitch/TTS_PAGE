import * as THREE from 'three';

export function initHero3D(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = '';

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(52, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.z = 6.4; // Camera positioned for optimal scale and full ring display

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // Lights
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.95);
    scene.add(ambientLight);

    const dirLight1 = new THREE.DirectionalLight(0x38bdf8, 2.2);
    dirLight1.position.set(10, 12, 10);
    scene.add(dirLight1);

    const dirLight2 = new THREE.DirectionalLight(0x2563eb, 1.5);
    dirLight2.position.set(-10, -10, -5);
    scene.add(dirLight2);

    const group = new THREE.Group();
    group.scale.set(1.1, 1.1, 1.1); // Prominent 3D model scale with complete orbiting ring clearance
    scene.add(group);

    // Sapphire & Electric Sky Blue Metallic Core Orb (Larger Size)
    const coreGeo = new THREE.IcosahedronGeometry(1.35, 16);
    const coreMat = new THREE.MeshStandardMaterial({
        color: 0x0284c7,
        emissive: 0x0369a1,
        emissiveIntensity: 0.35,
        roughness: 0.15,
        metalness: 0.85,
    });
    const coreMesh = new THREE.Mesh(coreGeo, coreMat);
    group.add(coreMesh);

    // Sky Blue Outer Wireframe Cage
    const cageGeo = new THREE.IcosahedronGeometry(1.6, 4);
    const cageMat = new THREE.MeshStandardMaterial({
        color: 0x38bdf8,
        wireframe: true,
        transparent: true,
        opacity: 0.45,
    });
    const cageMesh = new THREE.Mesh(cageGeo, cageMat);
    group.add(cageMesh);

    // Orbiting Ring 1 (Tilted Inner Ring)
    const ring1Geo = new THREE.TorusGeometry(2.0, 0.04, 16, 100);
    const ring1Mat = new THREE.MeshStandardMaterial({
        color: 0x0ea5e9,
        emissive: 0x0284c7,
        emissiveIntensity: 0.6,
        roughness: 0.1,
        metalness: 0.9,
    });
    const ring1Mesh = new THREE.Mesh(ring1Geo, ring1Mat);
    ring1Mesh.rotation.x = Math.PI / 4;
    group.add(ring1Mesh);

    // Orbiting Ring 2 (Outer Ring)
    const ring2Geo = new THREE.TorusGeometry(2.35, 0.03, 16, 100);
    const ring2Mat = new THREE.MeshStandardMaterial({
        color: 0x2563eb,
        emissive: 0x1d4ed8,
        emissiveIntensity: 0.5,
        roughness: 0.15,
        metalness: 0.85,
    });
    const ring2Mesh = new THREE.Mesh(ring2Geo, ring2Mat);
    ring2Mesh.rotation.x = Math.PI / 2.3;
    group.add(ring2Mesh);

    // Floating Particles
    const particleCount = 700;
    const posArray = new Float32Array(particleCount * 3);
    for (let i = 0; i < particleCount * 3; i++) {
        posArray[i] = (Math.random() - 0.5) * 16;
    }
    const particleGeo = new THREE.BufferGeometry();
    particleGeo.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
    const particleMat = new THREE.PointsMaterial({
        size: 0.035,
        color: 0x38bdf8,
        transparent: true,
        opacity: 0.6,
    });
    const particleMesh = new THREE.Points(particleGeo, particleMat);
    scene.add(particleMesh);

    container.style.touchAction = 'none';

    // Touch & Mouse Drag Rotation Controls
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

    let animationFrameId;
    const clock = new THREE.Clock();

    const animate = () => {
        animationFrameId = requestAnimationFrame(animate);
        const elapsedTime = clock.getElapsedTime();

        // Idle slow spin when not dragging
        if (!isDragging) {
            targetRotationY += 0.003;
        }

        // Smooth rotation interpolation
        group.rotation.y += (targetRotationY - group.rotation.y) * 0.1;
        group.rotation.x += (targetRotationX - group.rotation.x) * 0.1;

        // Internal element rotations
        coreMesh.rotation.y = elapsedTime * 0.35;
        coreMesh.rotation.x = elapsedTime * 0.15;
        cageMesh.rotation.y = -elapsedTime * 0.25;

        ring1Mesh.rotation.z = elapsedTime * 0.4;
        ring2Mesh.rotation.z = elapsedTime * 0.3;
        particleMesh.rotation.y = elapsedTime * 0.04;

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
