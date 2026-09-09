<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function qualityControl()
    {
        return view('products.quality-control');
    }

    public function productionTracking()
    {
        return view('products.production-tracking');
    }

    public function machineMaintenance()
    {
        return view('products.machine-maintenance');
    }

    public function productionPlanning()
    {
        return view('products.production-planning');
    }

    public function contact()
    {
        return view('contact');
    }
}
