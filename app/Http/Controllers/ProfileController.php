<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Update pengguna's profile.
     */
    public function update(Request $request)
    {
        $pengguna = Auth::pengguna(); // Perbaikan dari Auth::pengguna() ke Auth::user()

        // Validasi Input dengan pesan error yang lebih jelas
        $request->validate([
            'berat_badan' => 'nullable|numeric|min:1',
            'tinggi_badan' => 'nullable|numeric|min:1',
            'penyakit_genetik' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:500',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'berat_badan.numeric' => 'Berat badan harus berupa angka.',
            'tinggi_badan.numeric' => 'Tinggi badan harus berupa angka.',
            'foto_profil.image' => 'Foto profil harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            'foto_profil.max' => 'Ukuran foto profil tidak boleh lebih dari 2MB.',
        ]);

        // Perbarui hanya jika ada perubahan
        $dataToUpdate = [
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'penyakit_genetik' => $request->penyakit_genetik,
            'alamat' => $request->alamat,
        ];

        // Hapus data yang null agar tidak menimpa nilai yang ada
        $filteredData = array_filter($dataToUpdate, fn($value) => !is_null($value));

        if (!empty($filteredData)) {
            $pengguna->update($filteredData);
        }

        // Upload Foto Profil
        if ($request->hasFile('foto_profil')) {
            // Hapus foto lama jika ada
            if ($pengguna->foto_profil) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $pengguna->foto_profil));
            }

            // Simpan foto baru
            $path = $request->file('foto_profil')->store('profile_pictures', 'public');
            $pengguna->update(['foto_profil' => "/storage/" . $path]);
        }

        return redirect()->route('profile.edit')->with('status', 'Profil berhasil diperbarui');
    }
}

