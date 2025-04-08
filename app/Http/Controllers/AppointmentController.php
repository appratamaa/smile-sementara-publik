<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class AppointmentController extends Controller
{
    public function index()
    {
        $pengguna = Auth::user();

        $today = now()->toDateString();

        // Riwayat kunjungan pengguna
        $riwayatKunjungan = Appointment::where('nomor_hp', $pengguna->nomor_hp)->get();

        // Total pasien hari ini
        $totalPasien = Appointment::whereDate('tanggal', $today)->count();

        // Antrian terakhir milik pengguna hari ini
        $antrianTerakhir = Appointment::where('nomor_hp', $pengguna->nomor_hp)
            ->whereDate('tanggal', $today)
            ->latest('id')
            ->first();

        $nomorAntreanAnda = $antrianTerakhir ? $antrianTerakhir->nomor_antrean : null;


        // Sisa antrian hari ini
        $sisaAntrian = $antrianTerakhir
            ? Appointment::where('id', '<', $antrianTerakhir)->whereDate('tanggal', $today)->count()
            : 0;

        // Estimasi waktu tunggu
        $estimasiMenit = $sisaAntrian * 30; // 30 menit per antrian
        $timeRemaining = now()->addMinutes($estimasiMenit)->format('H:i');

        return view('beranda', compact(
            'pengguna',
            'riwayatKunjungan',
            'totalPasien',
            'nomorAntreanAnda',
            'sisaAntrian'
        ));
    }

    public function create()
    {
        $user = Auth::user();
        $pengguna = Pengguna::where('email', $user->email)->first();

        return view('form-janji-temu', ['nomor_hp' => $pengguna->nomor_hp]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_hp' => 'required|numeric|digits_between:10,15',
            'usia' => 'required|integer|min:0',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tujuan' => 'required|string|max:255',
        ]);

        $tanggal = $request->tanggal;

        // Hitung jumlah antrean pada tanggal tersebut (bukan berdasarkan ID atau user)
        $jumlahAntreanHariItu = Appointment::whereDate('tanggal', $tanggal)->count();

        // Nomor antrean dimulai dari 1 setiap hari
        $nomorAntrean = $jumlahAntreanHariItu + 1;

        $appointment = Appointment::create([
            'nama' => $request->nama,
            'nomor_hp' => $request->nomor_hp,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal' => $tanggal,
            'tujuan' => $request->tujuan,
            'nomor_antrean' => $nomorAntrean,
        ]);

        return response()->json([
            'id' => $appointment->id,
            'nomor_antrean' => $appointment->nomor_antrean,
            'message' => 'Janji temu berhasil dibuat!'
        ], 201);
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('antrean', compact('appointment'));
    }
    
}
