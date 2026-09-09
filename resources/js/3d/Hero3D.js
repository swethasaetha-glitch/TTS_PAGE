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

    // Mouse Interaction
    let mouseX = 0, mouseY = 0;
    let targetX = 0, targetY = 0;

    const onMouseMove = (e) => {
        const rect = container.getBoundingClientRect();
        mouseX = (e.clientX - rect.left) / container.clientWidth - 0.5;
        mouseY = (e.clientY - rect.top) / container.clientHeight - 0.5;
    };

    container.addEventListener('mousemove', onMouseMove);

    let animationFrameId;
    const clock = new THREE.Clock();

    const animate = () => {
        animationFrameId = requestAnimationFrame(animate);
        const elapsedTime = clock.getElapsedTime();

        targetX += (mouseX - targetX) * 0.05;
        targetY += (mouseY - targetY) * 0.05;

        // Core & Cage Rotations
        coreMesh.rotation.y = elapsedTime * 0.35;
        coreMesh.rotation.x = elapsedTime * 0.15;
        cageMesh.rotation.y = -elapsedTime * 0.25;

        // DUAL RING ROTATIONS
        ring1Mesh.rotation.x = elapsedTime * 0.6 + targetY * 1.5;
        ring1Mesh.rotation.y = elapsedTime * 0.4 + targetX * 1.5;

        ring2Mesh.rotation.z = elapsedTime * 0.5;
        ring2Mesh.rotation.y = -elapsedTime * 0.35 + targetX * 1.2;

        particleMesh.rotation.y = elapsedTime * 0.04;

        // Group Mouse Inertia
        group.rotation.y = targetX * 0.6;
        group.rotation.x = -targetY * 0.6;

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
        container.removeEventListener('mousemove', onMouseMove);
        window.removeEventListener('resize', onResize);
    };
}
