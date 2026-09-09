import './bootstrap';
import Alpine from 'alpinejs';
import { initHero3D } from './3d/Hero3D';
import { initQualityControl3D } from './3d/QualityControl3D';
import { initMachineMaintenance3D } from './3d/MachineMaintenance3D';
import { initFloatingNodes3D } from './3d/FloatingNodes3D';

window.Alpine = Alpine;

// Store active 3D cleanups
window.active3DCleanup = null;

// Helper to switch 3D viewport tabs dynamically
window.switch3DViewport = (tabId) => {
    if (window.active3DCleanup && typeof window.active3DCleanup === 'function') {
        window.active3DCleanup();
    }

    const container = 'interactive-3d-viewport';
    const descEl = document.getElementById('viewport-description');

    if (tabId === 'core') {
        window.active3DCleanup = initHero3D(container);
        if (descEl) descEl.innerText = 'Interactive 3D digital core representing real-time factory telemetry.';
    } else if (tabId === 'qc') {
        window.active3DCleanup = initQualityControl3D(container);
        if (descEl) descEl.innerText = 'Laser vision scanner simulating real-time defect analysis.';
    } else if (tabId === 'oee') {
        window.active3DCleanup = initMachineMaintenance3D(container);
        if (descEl) descEl.innerText = 'Interlocked 3D gear system tracking machine uptime & health.';
    } else if (tabId === 'nodes') {
        window.active3DCleanup = initFloatingNodes3D(container);
        if (descEl) descEl.innerText = 'Constellation network illustrating global plant scheduling.';
    }
};

document.addEventListener('DOMContentLoaded', () => {
    // Initialize hero canvas if present
    if (document.getElementById('hero-3d-canvas')) {
        initHero3D('hero-3d-canvas');
    }

    // Initialize default interactive viewport
    if (document.getElementById('interactive-3d-viewport')) {
        window.switch3DViewport('core');
    }

    // Initialize standalone 3D containers on product pages
    if (document.getElementById('qc-3d-canvas')) {
        initQualityControl3D('qc-3d-canvas');
    }
    if (document.getElementById('oee-3d-canvas')) {
        initMachineMaintenance3D('oee-3d-canvas');
    }
    if (document.getElementById('nodes-3d-canvas')) {
        initFloatingNodes3D('nodes-3d-canvas');
    }
});

Alpine.start();
