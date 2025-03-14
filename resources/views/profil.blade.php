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
<title>Beranda-Profil</title>
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
                            class="relative rounded-full  p-1.5 text-black hover:text-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-offset-black">
                            <span class="sr-only">Lihat Notifikasi</span>
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>

                        <!-- Dropdown Notifikasi -->
                        <div x-show="open" @click.away="open = false"
                            class="absolute left-full top-0 ml-2 w-64 bg-white rounded-md shadow-lg z-50">
                            <div class="py-2 px-4 border-b text-black font-semibold">Notifikasi</div>
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
                <x-side-bar>
                </x-side-bar>
            </aside>



            <!-- Main Content -->
            <div class="flex-1">
                <!-- Content -->
                <main class="p-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Profil Pengguna</h3>
                        <p class="text-gray-700">Kelola informasi profil Anda untuk mendapatkan layanan terbaik dari
                            klinik kami.</p>
                    </div>

                    <!-- Profil Pengguna -->
                    <div class="mt-6 bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center gap-6">
                        <!-- Foto Profil -->
                        <div class="relative">
                            <img src="https://via.placeholder.com/150" alt="Foto Profil"
                                class="w-32 h-32 rounded-full border border-gray-300">
                            <label for="upload-photo"
                                class="absolute bottom-0 right-0 bg-blue-500 text-white p-2 rounded-full cursor-pointer">
                                &#9998;
                            </label>
                            <input type="file" id="upload-photo" class="hidden">
                        </div>

                        <!-- Informasi Profil -->
                        <div class="w-full">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-gray-600 font-semibold">Nama</label>
                                    <p class="text-gray-800">John Doe</p>
                                </div>
                                <div>
                                    <label class="text-gray-600 font-semibold">Email</label>
                                    <p class="text-gray-800">john.doe@example.com</p>
                                </div>
                                <div>
                                    <label class="text-gray-600 font-semibold">Nomor Handphone</label>
                                    <p class="text-gray-800">08123456789</p>
                                </div>
                                <div>
                                    <label class="text-gray-600 font-semibold">Jenis Kelamin</label>
                                    <p class="text-gray-800">Laki-laki</p>
                                </div>
                                <div>
                                    <label class="text-gray-600 font-semibold">Usia</label>
                                    <p class="text-gray-800">25 Tahun</p>
                                </div>
                                <div>
                                    <label class="text-gray-600 font-semibold">Berat Badan</label>
                                    <p class="text-gray-800">70 kg</p>
                                </div>
                                <div>
                                    <label class="text-gray-600 font-semibold">Tinggi Badan</label>
                                    <p class="text-gray-800">175 cm</p>
                                </div>
                                <div>
                                    <label class="text-gray-600 font-semibold">Penyakit Genetik</label>
                                    <p class="text-gray-800">Tidak Ada</p>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="text-gray-600 font-semibold">Alamat</label>
                                    <p class="text-gray-800">Jl. Contoh No. 123, Jakarta</p>
                                </div>
                            </div>

                            <!-- Tombol Edit -->
                            <div class="mt-4 text-right">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                                    Edit Profil
                                </button>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
    </div>


    <x-footer>
    </x-footer>
</body>

</html>
