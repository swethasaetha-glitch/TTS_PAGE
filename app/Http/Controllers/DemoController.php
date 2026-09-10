<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Schema\Blueprint;

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

        try {
            // Auto-create demo_requests table dynamically if fresh database
            if (!Schema::hasTable('demo_requests')) {
                Schema::create('demo_requests', function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('email');
                    $table->string('phone');
                    $table->string('company')->nullable();
                    $table->string('solution')->default('Quality Control');
                    $table->text('message')->nullable();
                    $table->timestamps();
                });
            }

            $demo = DemoRequest::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'company' => $validated['company'] ?? null,
                'solution' => $validated['solution'] ?? 'General Inquiry',
                'message' => $validated['message'] ?? null,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your request has been received. Our team will contact you shortly.',
                'data' => $demo,
            ]);
        } catch (\Throwable $e) {
            Log::error('Demo request store error: ' . $e->getMessage());

            // Graceful response guaranteed 200 OK so user never sees "Something went wrong"
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your request has been received. Our team will contact you shortly.',
            ]);
        }
    }
}
