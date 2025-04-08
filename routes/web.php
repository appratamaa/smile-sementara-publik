<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAntrian;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\ChatKlinikController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ArtikelUserController;
use App\Http\Controllers\JadwalPraktikController;
use App\Models\Appointment;

// User Routes
Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/masuk', function () {
    return view('masuk'); // Gantilah 'masuk' dengan nama file Blade yang digunakan
})->name('masuk');

Route::post('/masuk', [MasukController::class, 'masuk'])->name('masuk');

// Route Logout

Route::post('/keluar', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect()->route('masuk'); // Pastikan 'masuk' adalah nama route yang benar
})->name('keluar');

// Route::get('/beranda', function () {
//     $pengguna = session('pengguna');
//     $riwayatKunjungan = \App\Models\Appointment::where('nomor_hp', $pengguna->nomor_hp)->get();

//     return view('beranda', compact('pengguna', 'riwayatKunjungan'));
// })->name('beranda');
Route::get('/beranda', function () {
    $pengguna = session('pengguna');
    $today = now()->toDateString();

    if (!$pengguna) {
        return redirect()->route('masuk')->with('error', 'Silakan login terlebih dahulu.');
    }

    // Riwayat kunjungan pengguna
    $riwayatKunjungan = Appointment::where('nomor_hp', $pengguna->nomor_hp)->get();

    // Total pasien hari ini
    $totalPasien = Appointment::whereDate('tanggal', $today)->count();

    // Ambil antrean pengguna hari ini
    $antrianTerakhir = Appointment::where('nomor_hp', $pengguna->nomor_hp)
        ->whereDate('tanggal', $today)
        ->latest('id')
        ->first();

    $nomorAntreanAnda = $antrianTerakhir ? $antrianTerakhir->nomor_antrean : null;

    // Hitung sisa antrian (yang nomornya lebih kecil dari antrean pengguna)
    $sisaAntrian = $nomorAntreanAnda
        ? Appointment::where('nomor_antrean', '<', $nomorAntreanAnda)
            ->whereDate('tanggal', $today)
            ->count()
        : 0;
        

    return view('beranda', compact(
        'pengguna',
        'riwayatKunjungan',
        'totalPasien',
        'nomorAntreanAnda',
        'sisaAntrian'
    ));
})->name('beranda');

Route::get('/buatjanji', function () {
    $pengguna = session('pengguna'); // Ambil data pengguna dari sesi
    return view('beranda', compact('pengguna'));
})->name('buatjanji');

Route::get('/chatklinik', function () {
    $pengguna = session('pengguna'); // Ambil data pengguna dari sesi
    return view('beranda', compact('pengguna'));
})->name('chatklinik');

Route::get('/daftar', [PenggunaController::class, 'showForm'])->name('daftar');
Route::post('/daftar', [PenggunaController::class, 'daftar']);
Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');
Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');
Route::get('/chatdokter', function () {
    return view('chatdokter');
})->name('chatdokter');

Route::get('/lainnya', function () {
    return view('lainnya');
})->name('lainnya');

Route::get('/rekammedis', function () {
    return view('rekammedis');
})->name('rekammedis');

// Route::get('/antrean', function () {
//     return view('antrean'); // Gantilah 'antrean' dengan nama file Blade yang digunakan
// })->name('antrean');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/antrean/{id}', [AppointmentController::class, 'show'])->name('antrean.show');

Route::get('/artikel', [ArtikelUserController::class, 'index'])->name('artikel.index');
Route::get('/artikel/cari', [ArtikelUserController::class, 'search'])->name('artikel.search');
Route::get('/artikel/{id}', [ArtikelUserController::class, 'show'])->name('artikel.show');
Route::get('/welcome', [ArtikelUserController::class, 'welcome'])->name('welcome');

//Akses Profil
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/profil', function () {
    $pengguna = session('pengguna'); // Ambil data pengguna dari sesi
    return view('profil', compact('pengguna'));
})->name('profil');


//Akses Edit Profil
Route::get('/profil/{id}', [PenggunaController::class, 'showProfil'])->name('profil');
Route::get('/edit-profil/{id}', [PenggunaController::class, 'edit'])->name('edit.profil');
Route::post('/update-profil/{id}', [PenggunaController::class, 'update'])->name('update.profil');


Route::get('/antrean/{id}', [AppointmentController::class, 'show'])->name('antrean.show');

Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
Route::get('/ulasan/{id}', function ($id) {
    $ulasan = App\Models\Ulasan::where('appointment_id', $id)->first();

    if ($ulasan) {
        return response()->json([
            'found' => true,
            'rating' => $ulasan->rating,
            'komentar' => $ulasan->komentar
        ]);
    } else {
        return response()->json(['found' => false]);
    }
});

Route::get('/chatklinik', [ChatKlinikController::class, 'index']);
Route::post('/chatklinik/send', [ChatKlinikController::class, 'send']);

Route::get('/chatklinik', [ChatKlinikController::class, 'index']);
Route::post('/chatklinik', [ChatKlinikController::class, 'send'])->name('chatklinik.kirim');






// Admin Routes

    Route::get('/adminArtikel', [ArtikelController::class, 'index'])->name('adminArtikel');
    Route::post('/adminArtikel', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/adminInformasi', [InformasiController::class, 'index'])->name('admin.informasi.index');
    Route::post('/adminInformasi/store', [InformasiController::class, 'store'])->name('informasi.store');
    Route::view('/admin/Antrian', 'admin.adminPraktik');
    Route::view('/adminInformasi', 'admin.adminInformasi');
    Route::view('/adminAntrian', 'admin.adminAntrian');
    Route::view('/tes', 'admin.tesData');
    Route::post('/praktik', [JadwalPraktikController::class, 'store'])->name('jadwal.store');
    Route::get('/praktik', [JadwalPraktikController::class, 'index'])->name('jadwal.index');
    Route::delete('/praktik/{id}', [JadwalPraktikController::class, 'destroy'])->name('jadwal.destroy');
    Route::put('/praktik/{id}', [JadwalPraktikController::class, 'update'])->name('jadwal.update'); // ✅ Route Update


// Authentication Routes
Route::get('/adminLogin', [AdminController::class, 'showLogin'])->name('adminLogin');
Route::post('/adminLogin', [AdminController::class, 'adminLogin']);

Route::get('/registerAdmin', [AdminController::class, 'showRegister'])->name('registerAdmin');
Route::post('/registerAdmin', [AdminController::class, 'registerAdmin']);

// Dashboard Redirect
//origin/admin
// Profile Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/adminAntrian/data', [AdminAntrian::class, 'getAllAppointments']);
Route::get('/api/antrian/terkini', [AdminAntrian::class, 'getCurrentAndNext']);




//Layar Antrian
Route::get('/layarAntrian', function () {
    return view('layarAntrian');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/chat', [ChatKlinikController::class, 'adminIndex'])->name('admin.chat.list');
    Route::get('/admin/chat/{id}', [ChatKlinikController::class, 'adminChatDetail'])->name('admin.chat.detail');
    Route::post('/admin/chat/{id}', [ChatKlinikController::class, 'adminSendMessage'])->name('admin.chat.send');
});


