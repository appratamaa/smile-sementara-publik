<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $appointment = Appointment::create([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'tujuan' => $request->tujuan,
        ]);

        return response()->json(['id' => $appointment->id], 201);
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('antrean', compact('appointment'));
    }
}

