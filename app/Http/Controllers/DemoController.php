<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'nullable|string|max:255',
            'solution' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $demo = DemoRequest::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your demo request has been received. Our team will contact you shortly.',
            'data' => $demo,
        ]);
    }
}
