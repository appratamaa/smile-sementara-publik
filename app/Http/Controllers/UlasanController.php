<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'appointment_id' => 'required|exists:appointments,id',
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'nullable|string',
        ]);

        Ulasan::create([
            'appointment_id' => $request->appointment_id,
            'rating' => $request->rating,
            'komentar' => $request->komentar,
        ]);

        return response()->json(['success' => true]);
    }
}
