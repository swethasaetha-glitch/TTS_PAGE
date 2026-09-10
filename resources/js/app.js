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
    // Custom smooth scroll handler
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    e.preventDefault();
                    targetEl.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    // 1. Homepage Interactive 3D Viewport & Hero Digital Factory Canvas
    if (document.getElementById('hero-digital-factory-canvas')) {
        initHero3D('hero-digital-factory-canvas');
    }
    if (document.getElementById('interactive-3d-viewport')) {
        window.switch3DViewport('core');
    }

    // 2. Product Pages 3D Canvas Containers
    // Quality Control Page
    if (document.getElementById('qc-software-canvas')) {
        initQualityControl3D('qc-software-canvas');
    } else if (document.getElementById('qc-3d-canvas')) {
        initQualityControl3D('qc-3d-canvas');
    }

    // Production Tracking Page
    if (document.getElementById('pts-software-canvas')) {
        initHero3D('pts-software-canvas');
    } else if (document.getElementById('pts-3d-canvas')) {
        initHero3D('pts-3d-canvas');
    }

    // Machine Maintenance Page
    if (document.getElementById('oee-software-canvas')) {
        initMachineMaintenance3D('oee-software-canvas');
    } else if (document.getElementById('oee-3d-canvas')) {
        initMachineMaintenance3D('oee-3d-canvas');
    }

    // Production Planning Page (Gantt)
    if (document.getElementById('gantt-software-canvas')) {
        initFloatingNodes3D('gantt-software-canvas');
    } else if (document.getElementById('nodes-3d-canvas')) {
        initFloatingNodes3D('nodes-3d-canvas');
    }
});

Alpine.start();
