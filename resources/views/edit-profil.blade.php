<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06c1db">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Edit Profil</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        {{-- Header --}}
        @include('components.nav-prof', ['pengguna' => $pengguna])

        <div class="flex min-h-screen bg-gray-100">
            {{-- Sidebar --}}
            <aside class="w-64 bg-white text-black p-4">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold">Dashboard</h2>
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" type="button"
                            class="relative rounded-full p-1.5 text-black hover:text-blue-500 focus:ring-2 focus:ring-blue-500">
                            <span class="sr-only">Lihat Notifikasi</span>
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>

                        <div x-show="open" @click.away="open = false"
                            class="absolute left-full top-0 ml-2 w-64 bg-white rounded-md shadow-lg z-50">
                            <div class="py-2 px-4 border-b font-semibold">Notifikasi</div>
                            <div class="max-h-60 overflow-y-auto">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                    Notifikasi 1
                                    <span class="block text-xs text-gray-500">1 jam yang lalu</span>
                                </a>
                                <!-- Tambahkan notifikasi lainnya jika perlu -->
                            </div>
                        </div>
                    </div>
                </div>
                <x-side-bar />
            </aside>

            {{-- Main Content --}}
            <main class="flex-1 p-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4">Edit Profil</h2>

                    <form action="{{ route('profil.update', $pengguna->id) }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-medium mb-1">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="{{ $pengguna->nama_lengkap }}"
                                    class="w-full border p-2 rounded" required>
                            </div>

                            <div>
                                <label class="block font-medium mb-1">Email</label>
                                <input type="email" name="email" value="{{ $pengguna->email }}"
                                    class="w-full border p-2 rounded" required>
                            </div>

                            <div>
                                <label class="block font-medium mb-1">Nomor HP</label>
                                <input type="text" name="nomor_hp" value="{{ $pengguna->nomor_hp }}"
                                    class="w-full border p-2 rounded" required>
                            </div>

                            <div>
                                <label class="block font-medium mb-1">Usia</label>
                                <input type="text" name="usia" value="{{ $pengguna->usia }}"
                                    class="w-full border p-2 rounded" required>
                            </div>

                            <div>
                                <label class="block font-medium mb-1">Tinggi Badan (cm)</label>
                                <input type="text" name="tinggi_badan" value="{{ $pengguna->tinggi_badan }}"
                                    class="w-full border p-2 rounded" required>
                            </div>

                            <div>
                                <label class="block font-medium mb-1">Berat Badan (kg)</label>
                                <input type="text" name="berat_badan" value="{{ $pengguna->berat_badan }}"
                                    class="w-full border p-2 rounded" required>
                            </div>

                            <div>
                                <label class="block font-medium mb-1">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="w-full border p-2 rounded" required>
                                    <option value="Laki-laki"
                                        {{ $pengguna->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                    </option>
                                    <option value="Perempuan"
                                        {{ $pengguna->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                            </div>

                            <div>
                                <label class="block font-medium mb-1">Penyakit Genetik</label>
                                <input type="text" name="penyakit_genetik" value="{{ $pengguna->penyakit_genetik }}"
                                    class="w-full border p-2 rounded" required>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block font-medium mb-1">Alamat</label>
                                <textarea name="alamat" class="w-full border p-2 rounded" rows="3" required>{{ $pengguna->alamat }}</textarea>
                            </div>
                        </div>

                        <div class="mt-6 text-right">
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: '{{ session('success') }}',
                                    timer: 2500,
                                    showConfirmButton: false
                                });
                            });
                        </script>
                    @endif

                    @if ($errors->any())
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: '{{ $errors->first() }}',
                                    showConfirmButton: true
                                });
                            });
                        </script>
                    @endif
                </div>
            </main>
        </div>
    </div>

</body>

</html>
