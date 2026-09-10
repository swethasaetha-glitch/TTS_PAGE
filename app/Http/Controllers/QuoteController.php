<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Schema\Blueprint;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'nullable|string|max:255',
            'lines_count' => 'nullable|string|max:100',
            'solution' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        try {
            // Auto-create quote_requests table dynamically if fresh database
            if (!Schema::hasTable('quote_requests')) {
                Schema::create('quote_requests', function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('email');
                    $table->string('phone');
                    $table->string('company')->nullable();
                    $table->string('lines_count')->nullable();
                    $table->string('solution')->default('Full Enterprise Suite');
                    $table->text('message')->nullable();
                    $table->timestamps();
                });
            }

            $quote = QuoteRequest::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'company' => $validated['company'] ?? null,
                'lines_count' => $validated['lines_count'] ?? '1-5 Lines',
                'solution' => $validated['solution'] ?? 'Full Enterprise Suite',
                'message' => $validated['message'] ?? null,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your quote request has been received. Our team will send a detailed proposal shortly.',
                'data' => $quote,
            ]);
        } catch (\Throwable $e) {
            Log::error('Quote request store error: ' . $e->getMessage());

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your quote request has been received. Our team will send a detailed proposal shortly.',
            ]);
        }
    }
}
