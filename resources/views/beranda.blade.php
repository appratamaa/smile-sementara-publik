<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="theme-color" content="#06c1db">
@vite('resources/css/app.css')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>Beranda</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        @include('components.nav-prof', ['pengguna' => $pengguna])

        <!-- Dashboard Container -->
        <div class="flex min-h-screen bg-gray-100">
            <!-- Sidebar -->
            <aside class="w-64 bg-white text-black p-4">
              <div class="flex items-center justify-between mb-4">
                  <h2 class="text-xl font-bold">Dashboard</h2>
          
                  <!-- Button Notifikasi -->
                  <div x-data="{ open: false }" class="relative">
                      <button @click="open = !open" type="button"
                          class="relative rounded-full bg-gray-800 p-1.5 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                          <span class="sr-only">Lihat Notifikasi</span>
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                          </svg>
                      </button>
          
                      <!-- Dropdown Notifikasi -->
                      <div x-show="open" @click.away="open = false"
                          class="absolute left-full top-0 ml-2 w-64 bg-white rounded-md shadow-lg z-50">
                          <div class="py-2 px-4 border-b text-gray-700 font-semibold">Notifikasi</div>
                          <div class="max-h-60 overflow-y-auto">
                              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                  Notifikasi 1
                                  <span class="block text-xs text-gray-500">1 jam yang lalu</span>
                              </a>
                              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                  Notifikasi 2
                                  <span class="block text-xs text-gray-500">2 jam yang lalu</span>
                              </a>
                              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                  Notifikasi 3
                                  <span class="block text-xs text-gray-500">3 jam yang lalu</span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          
              <!-- Navigasi Sidebar -->
              <nav>
                  <ul x-data="{ active: 'beranda' }">
                      <li class="mb-2">
                          <a href="#" @click="active = 'beranda'"
                              :class="active === 'beranda' ? 'bg-gray-500 text-white' : ''"
                              class="block py-2 px-4 rounded hover:bg-blue-500 text-black">Beranda</a>
                      </li>
                      <li class="mb-2">
                          <a href="/rekammedis" @click="active = 'rekam_medis'"
                              :class="active === 'rekam_medis' ? 'bg-gray-500 text-white' : ''"
                              class="block py-2 px-4 rounded hover:bg-blue-500 text-black">Rekam Medis</a>
                      </li>
                      <li class="mb-2">
                          <a href="#" @click="active = 'profil'"
                              :class="active === 'profil' ? 'bg-gray-500 text-white' : ''"
                              class="block py-2 px-4 rounded hover:bg-blue-500 text-black">Profil</a>
                      </li>
                      <li>
                          <a href="#" @click="active = 'keluar'"
                              :class="active === 'keluar' ? 'bg-gray-500 text-white' : ''"
                              class="block py-2 px-4 rounded hover:bg-blue-500 text-black">Keluar</a>
                      </li>
                  </ul>
              </nav>
          </aside>
          
          


            <!-- Main Content -->
            <div class="flex-1">

                <!-- Content -->
                <main class="p-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Selamat Datang</h3>
                        <p class="text-gray-700">Ini adalah dashboard sederhana untuk melihat informasi rekam medis
                            Anda.</p>
                    </div>

                    <!-- Informasi Data -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg border border-gray-300">
                            <h4 class="text-lg font-semibold">Total Pasien</h4>
                            <p class="text-2xl font-bold text-blue-600">120</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-300">
                            <h4 class="text-lg font-semibold">Janji Temu</h4>
                            <p class="text-2xl font-bold text-green-600">15</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-300">
                            <h4 class="text-lg font-semibold">Data Tersimpan</h4>
                            <p class="text-2xl font-bold text-red-600">98%</p>
                        </div>
                    </div>
                    <!-- Riwayat Kunjungan -->
                    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Riwayat Kunjungan</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse border border-gray-300">
                                <thead>
                                    <tr class="bg-blue-600 text-white">
                                        <th class="border border-gray-300 px-4 py-2">No</th>
                                        <th class="border border-gray-300 px-4 py-2">Tanggal Kunjungan</th>
                                        <th class="border border-gray-300 px-4 py-2">Tujuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-100">
                                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                                        <td class="border border-gray-300 px-4 py-2 text-center">2024-03-01</td>
                                        <td class="border border-gray-300 px-4 py-2 text-center">Pemeriksaan Umum</td>
                                    </tr>
                                    <tr class="hover:bg-gray-100">
                                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                                        <td class="border border-gray-300 px-4 py-2 text-center">2024-03-10</td>
                                        <td class="border border-gray-300 px-4 py-2 text-center">Kontrol Gigi</td>
                                    </tr>
                                    <tr class="hover:bg-gray-100">
                                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                                        <td class="border border-gray-300 px-4 py-2 text-center">2024-03-15</td>
                                        <td class="border border-gray-300 px-4 py-2 text-center">Cek Laboratorium</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Riwayat Penyakit -->
                    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Riwayat Penyakit</h3>
                        <p class="text-gray-500 italic">Belum ada data riwayat penyakit yang tersedia.</p>
                    </div>

                    <!-- Riwayat Perawatan -->
                    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Riwayat Perawatan</h3>
                        <p class="text-gray-500 italic">Belum ada data riwayat perawatan yang tersedia.</p>
                    </div>

                </main>
            </div>
        </div>
    </div>
</body>

<x-footer>
</x-footer>
