<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DemoController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/products/quality-control', [PageController::class, 'qualityControl'])->name('products.quality-control');
Route::get('/products/production-tracking', [PageController::class, 'productionTracking'])->name('products.production-tracking');
Route::get('/products/machine-maintenance', [PageController::class, 'machineMaintenance'])->name('products.machine-maintenance');
Route::get('/products/production-planning', [PageController::class, 'productionPlanning'])->name('products.production-planning');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/demo', [DemoController::class, 'store'])->name('demo.store');
