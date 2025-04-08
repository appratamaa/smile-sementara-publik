<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $pengguna = Auth::pengguna(); // Gunakan guard jika perlu: Auth::guard('pengguna')->user();

        // Validasi input
        $request->validate([
            'berat_badan' => 'nullable|numeric|min:1',
            'tinggi_badan' => 'nullable|numeric|min:1',
            'penyakit_genetik' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:500',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'berat_badan.numeric' => 'Berat badan harus berupa angka.',
            'tinggi_badan.numeric' => 'Tinggi badan harus berupa angka.',
            'foto_profil.image' => 'Foto profil harus berupa gambar.',
            'foto_profil.max' => 'Ukuran foto maksimal 2MB.',
        ]);

        // Simpan data profil (kecuali foto)
        $dataToUpdate = array_filter([
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'penyakit_genetik' => $request->penyakit_genetik,
            'alamat' => $request->alamat,
        ], fn($val) => !is_null($val));

        if (!empty($dataToUpdate)) {
            $pengguna->update($dataToUpdate);
        }

        // Simpan foto profil (jika ada)
        if ($request->hasFile('foto_profil')) {
            // Hapus foto lama jika ada
            if ($pengguna->foto_profil && Storage::disk('public')->exists(str_replace('/storage/', '', $pengguna->foto_profil))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $pengguna->foto_profil));
            }

            // Upload foto baru
            $path = $request->file('foto_profil')->store('profile_pictures', 'public');
            $pengguna->update(['foto_profil' => "/storage/" . $path]);
        }

        return redirect()->route('profile.edit')->with('status', 'Profil berhasil diperbarui');
    }
    public function edit()
{
    return view('edit-profil');
}

}
