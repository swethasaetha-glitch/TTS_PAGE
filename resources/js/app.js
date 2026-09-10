import './bootstrap';
import Alpine from 'alpinejs';
import {
    initQualityControlSoftware,
    initProductionTrackingSoftware,
    initMachineMaintenanceSoftware,
    initProductionPlanningSoftware
} from './software/SoftwareUI';
import { initHero3D } from './3d/Hero3D';

window.Alpine = Alpine;

// Store active viewport cleanup
window.activeViewportCleanup = null;

// Helper to switch software UI viewport tabs dynamically
window.switchSoftwareViewport = (tabId) => {
    if (window.activeViewportCleanup && typeof window.activeViewportCleanup === 'function') {
        window.activeViewportCleanup();
    }

    const container = 'interactive-software-viewport';
    const descEl = document.getElementById('viewport-description');

    if (tabId === 'qc') {
        window.activeViewportCleanup = initQualityControlSoftware(container);
        if (descEl) descEl.innerText = 'Real-time AI fabric vision studio scanning for stitching defects and AQL scoring.';
    } else if (tabId === 'pts') {
        window.activeViewportCleanup = initProductionTrackingSoftware(container);
        if (descEl) descEl.innerText = 'Shopfloor command center monitoring live RFID/Barcode bundle scans and line WIP.';
    } else if (tabId === 'oee') {
        window.activeViewportCleanup = initMachineMaintenanceSoftware(container);
        if (descEl) descEl.innerText = 'Equipment health telemetry tracking motor vibration, temp, and overall line OEE.';
    } else if (tabId === 'gantt') {
        window.activeViewportCleanup = initProductionPlanningSoftware(container);
        if (descEl) descEl.innerText = 'Smart Gantt production planner re-balancing shopfloor capacities automatically.';
    }
};

// Legacy fallback helper for backward compatibility
window.switch3DViewport = (tabId) => {
    if (tabId === 'core') window.switchSoftwareViewport('qc');
    else if (tabId === 'qc') window.switchSoftwareViewport('qc');
    else if (tabId === 'oee') window.switchSoftwareViewport('oee');
    else if (tabId === 'nodes') window.switchSoftwareViewport('gantt');
};

document.addEventListener('DOMContentLoaded', () => {
    // Initialize hero control center canvas or interactive container
    if (document.getElementById('hero-software-container')) {
        initQualityControlSoftware('hero-software-container');
    }

    // Initialize default interactive software viewport on homepage
    if (document.getElementById('interactive-software-viewport')) {
        window.switchSoftwareViewport('qc');
    } else if (document.getElementById('interactive-3d-viewport')) {
        window.switchSoftwareViewport('qc');
    }

    // Initialize product page standalone software previews
    if (document.getElementById('qc-software-canvas')) {
        initQualityControlSoftware('qc-software-canvas');
    }
    if (document.getElementById('pts-software-canvas')) {
        initProductionTrackingSoftware('pts-software-canvas');
    }
    if (document.getElementById('oee-software-canvas')) {
        initMachineMaintenanceSoftware('oee-software-canvas');
    }
    if (document.getElementById('gantt-software-canvas')) {
        initProductionPlanningSoftware('gantt-software-canvas');
    }
});

Alpine.start();
