<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input sebelum menyimpan ke database
        $request->validate([
            'nama' => 'required|string|max:255',
            'usia' => 'required|integer|min:0',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tujuan' => 'required|string|max:255',
        ]);

        // Menyimpan data ke database
        $appointment = Appointment::create([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'tujuan' => $request->tujuan,
        ]);

        return response()->json(['id' => $appointment->id, 'message' => 'Janji temu berhasil dibuat!'], 201);
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('antrean', compact('appointment'));
    }
}
