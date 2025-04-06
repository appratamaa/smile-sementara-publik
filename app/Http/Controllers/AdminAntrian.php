<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments; // Ganti ke model yang benar

class AdminAntrian extends Controller
{
    public function getAllAppointments()
    {
        $appointments = Appointments::orderBy('id')->get();
        return response()->json($appointments);
    }
    public function getCurrentAndNext()
    {
        $current = Appointments::where('dipanggil', true)->latest('updated_at')->first();
        $next = Appointments::where('dipanggil', false)->orderBy('id')->first();

        return response()->json([
            'status' => true,
            'message' => 'Data antrian berhasil diambil',
            'data' => [
                'current' => $current,
                'next' => $next
            ]
        ]);
        
    }
}
