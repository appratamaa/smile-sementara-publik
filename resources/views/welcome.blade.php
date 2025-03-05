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
<title>SMILE</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar>

        </x-navbar>
        <x-header>
            Klinik drg. Robet Agustinus Pangandaran
        </x-header>

        <main class="bg-white min-h-screen">
            <div class="relative pb-20 rounded-b-[200px]">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center">

                    <!-- Left side: Text and Icons -->
                    <div class="flex-1 mb-6 lg:mb-0">
                        <p class="text-base text-black text-center lg:text-left">
                            Memberikan pelayanan kesehatan gigi dan mulut terbaik untuk keluarga Anda.
                            Kami berkomitmen pada <b>kualitas, kenyamanan, dan kepercayaan</b>.
                        </p>
            

                        <!-- Ikon Pelayanan Klinik Gigi -->
                        <div class="grid grid-cols-3 md:grid-cols-6 lg:grid-cols-6 gap-6 mt-12">
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-tooth text-xl"></i>
                                </div>
                                <span class="text-xs mt-2 text-black text-center">Pemeriksaan</span>
                            </div>

                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-teeth-open text-xl"></i>
                                </div>
                                <span class="text-xs mt-2 text-black text-center">Scaling</span>
                            </div>

                            <!-- Perawatan Gusi -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-user-md text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Perawatan Gusi</span>
                            </div>

                            <!-- Pemasangan Behel -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-purple-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Behel</span>
                            </div>

                            <!-- Pencabutan Gigi -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-orange-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-hand-holding-medical text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Cabut Gigi</span>
                            </div>

                            <!-- Tambal Gigi -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Tambal Gigi</span>
                            </div>

                            <!-- Veneer -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-indigo-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-smile text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Veneer</span>
                            </div>

                            <!-- Implant Gigi -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-teal-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Implant</span>
                            </div>

                            <!-- Gigi Palsu -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-pink-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Gigi Palsu</span>
                            </div>

                            <!-- Rontgen Gigi -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-cyan-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-x-ray text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Rontgen</span>
                            </div>

                            <!-- Orthodonti -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-gray-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Orthodonti</span>
                            </div>

                            <!-- Bedah Mulut -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-16 h-16 bg-lime-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-syringe text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Bedah Mulut</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right side: Image -->
                    <div class="bg-white flex-1 flex justify-center">
                        <img src="image/Profil_Dokter.png" alt="Klinik Gigi" class="max-w-md w-full rounded-lg ">
                    </div>
                </div>





                <!-- Modal (Menggunakan Alpine.js) -->
                <div x-data="{ openModal: false }">
                    <div class="flex justify-center lg:justify-center mt-8">
                        <button @click="openModal = true"
                            class="mt-6 rounded-md bg-white px-4 py-2 text-black  hover:bg-black hover:text-white">
                            Buat Janji
                        </button>
                    </div>

                    <!-- Popup Modal -->
                    <div x-cloak x-show="openModal"
                        class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
                        <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full relative">
                            <!-- Tombol Close -->
                            <button @click="openModal = false"
                                class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                                ✖
                            </button>
                            <form id="appointmentForm" action="{{ route('appointments.store') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="nama" class="block text-gray-700">Nama Lengkap</label>
                                    <input type="text" name="nama" id="nama"
                                        class="w-full p-2 border rounded mt-1" placeholder="Masukkan nama Anda"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="tanggal" class="block text-gray-700">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal"
                                        class="w-full p-2 border rounded mt-1" required>
                                </div>
                                <div class="mb-4">
                                    <label for="tujuan" class="block text-gray-700">Tujuan</label>
                                    <select name="tujuan" id="tujuan" class="w-full p-2 border rounded mt-1"
                                        required>
                                        <option>Pemeriksaan Rutin</option>
                                        <option>Cabut Gigi</option>
                                        <option>Pasang Behel</option>
                                        <option>Pembersihan Karang Gigi</option>
                                        <option>Tambal Gigi</option>
                                        <option>Pembuatan Gigi Palsu</option>
                                        <option>Perawatan Saluran Akar</option>
                                    </select>
                                </div>
                                <button type="submit"
                                    class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                                    Buat Janji
                                </button>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="text-center profile-section bg-white mb-6">
                    <h1 class="text-[32px] font-bold">Artikel Kesehatan Gigi</h1>
                    <p class="text-gray-600 text-lg ">Dapatkan informasi tentang kesehatan gigi</p>
                    <hr class="w-96 mx-auto mt-2 border-gray-400">


                    <!-- Grid untuk artikel -->
                    <div class="bg-white py-10">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 px-4 md:px-12">
                            <!-- Artikel 1 -->
                            <div
                                class="group relative transform transition duration-300 hover:scale-105 hover:translate-y-[-5px] shadow-lg bg-white rounded-lg p-4 mt-2">
                                <h2 class="text-lg font-semibold">Pentingnya Menjaga Kesehatan Gigi</h2>
                                <p class="text-sm text-gray-500">Tips sederhana untuk menjaga kesehatan gigi
                                    sehari-hari.
                                </p>
                                <p class="text-xs text-gray-400">12 Februari 2024</p>
                                <img src="image/GIGI.png" alt="Artikel 1" class="rounded-md mt-2">
                            </div>

                            <!-- Artikel 2 -->
                            <div
                                class="group relative transform transition duration-300 hover:scale-105 hover:translate-y-[5px] shadow-lg bg-white rounded-lg p-4 mt-6">
                                <h2 class="text-lg font-semibold">Manfaat Scaling Gigi</h2>
                                <p class="text-sm text-gray-500">Mengapa scaling penting untuk kesehatan mulut?</p>
                                <p class="text-xs text-gray-400">15 Maret 2024</p>
                                <img src="image/GIGI.png" alt="Artikel 2" class="rounded-md mt-2">
                            </div>

                            <!-- Artikel 3 -->
                            <div
                                class="group relative transform transition duration-300 hover:scale-105 hover:translate-y-[-5px] shadow-lg bg-white rounded-lg p-4 mt-4">
                                <h2 class="text-lg font-semibold">Makanan Baik untuk Gigi</h2>
                                <p class="text-sm text-gray-500">Daftar makanan yang membantu menjaga gigi kuat.</p>
                                <p class="text-xs text-gray-400">20 April 2024</p>
                                <img src="image/GIGI.png" alt="Artikel 3" class="rounded-md mt-2">
                            </div>

                            <!-- Artikel 4 -->
                            <div
                                class="group relative transform transition duration-300 hover:scale-105 hover:translate-y-[5px] shadow-lg bg-white rounded-lg p-4 mt-8">
                                <h2 class="text-lg font-semibold">Penyebab Gigi Berlubang</h2>
                                <p class="text-sm text-gray-500">Apa saja yang dapat merusak kesehatan gigi?</p>
                                <p class="text-xs text-gray-400">5 Mei 2024</p>
                                <img src="image/GIGI.png" alt="Artikel 4" class="rounded-md mt-2">
                            </div>

                            <!-- Artikel 5 -->
                            <div
                                class="group relative transform transition duration-300 hover:scale-105 hover:translate-y-[-5px] shadow-lg bg-white rounded-lg p-4 mt-3">
                                <h2 class="text-lg font-semibold">Cara Memutihkan Gigi Alami</h2>
                                <p class="text-sm text-gray-500">Metode alami untuk mendapatkan gigi lebih putih.</p>
                                <p class="text-xs text-gray-400">10 Juni 2024</p>
                                <img src="image/GIGI.png" alt="Artikel 5" class="rounded-md mt-2">
                            </div>

                            <!-- Artikel 6 -->
                            <div
                                class="group relative transform transition duration-300 hover:scale-105 hover:translate-y-[5px] shadow-lg bg-white rounded-lg p-4 mt-5">
                                <h2 class="text-lg font-semibold">Perawatan Gigi di Rumah</h2>
                                <p class="text-sm text-gray-500">Cara mudah menjaga kebersihan gigi di rumah.</p>
                                <p class="text-xs text-gray-400">25 Juni 2024</p>
                                <img src="image/GIGI.png" alt="Artikel 6" class="rounded-md mt-2">
                            </div>
                        </div>

                        <!-- Tombol untuk melihat lebih banyak artikel -->
                        <div class="text-center mt-6">
                            <a href="/artikel" class="text-[20px] font-bold text-blue-600 hover:underline">
                                Lihat Artikel Lainnya
                            </a>
                        </div>

                        <!-- Profil Dokter Gigi -->
                        <div
                            class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mt-8 grid gap-6 lg:grid-cols-2 lg:gap-8 profile-section content">
                            <div class="lg:col-span-1 text-left">
                                <h1 class="text-[32px] font-bold">Profil Dokter Gigi</h1>
                                <img src="image/Profil Dokter.png" alt="Profil Dokter Gigi"
                                    class="rounded-tr-[300px] rounded-tl-[300px] rounded-br-[0px] rounded-bl-[0px]"
                                    style="width: 350px; height: 400px;">
                            </div>
                            <div class="lg:col-span-1 text-left doctor-name">
                                <h2 class="text-[32px] font-bold">drg. Robet Agustinus</h2>
                                <p class="text-[24px] mt-2">Spesialis Gigi dan Mulut</p>
                                <p class="mt-4">
                                    Drg. Robet Agustinus adalah seorang dokter gigi berpengalaman yang telah melayani
                                    pasien
                                    selama
                                    lebih dari 10 tahun. Beliau menyelesaikan pendidikan dokter gigi di Universitas
                                    Indonesia dan
                                    melanjutkan pelatihan spesialis di bidang estetika dan perawatan gigi modern.
                                </p>
                                <ul class="list-disc ml-5 mt-4">
                                    <li>Perawatan gigi estetika (veneer, pemutihan gigi)</li>
                                    <li>Pemasangan kawat gigi dan perawatan ortodonti</li>
                                    <li>Penanganan gigi berlubang dan penyakit gusi</li>
                                    <li>Konsultasi kesehatan gigi anak dan keluarga</li>
                                </ul>
                                <p class="italic mt-4">"Senang bisa membantu setiap pasien tersenyum lebih percaya
                                    diri."
                                </p>
                            </div>
                        </div>
                        <!-- Profil Staf -->
                        <div
                            class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mt-8 grid gap-6 lg:grid-cols-2 lg:gap-8 profile-section content">
                            <div class="lg:col-span-1 text-left">
                                <h2 class="text-[32px] font-bold staff-name">Andini Pratama</h2>
                                <p class="mt-4">
                                    Andini adalah asisten dokter gigi yang memiliki pengalaman lebih dari 5 tahun.
                                    Dengan
                                    sikap
                                    ramah dan perhatian, ia membantu memastikan setiap prosedur berjalan lancar serta
                                    memberikan
                                    kenyamanan maksimal kepada pasien.
                                </p>
                            </div>
                            <div class="lg:col-span-1 text-left">
                                <h1 class="text-[32px] font-bold">Profil Staf</h1>
                                <img src="image/Profil Dokter.png" alt="Profil Staf"
                                    class="rounded-tr-[300px] rounded-tl-[300px] rounded-br-[0px] rounded-bl-[0px]"
                                    style="width: 350px; height: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <x-footer>
        </x-footer>

        <style>
            .content {
                text-align: justify;
            }

            .profile-section {
                margin-top: 50px;
                /* Adjust margin as needed */
            }

            .doctor-name {
                margin-top: 50px;
                /* Adjust margin as needed */
            }

            .staff-name {
                margin-top: -40px;
                /* Adjust margin to position near the image */
            }

            @media (max-width: 1024px) {
                .grid {
                    grid-template-columns: 1fr;
                    /* Stack columns on smaller screens */
                }
            }

            #map {
                height: 195px;
                width: 360px;
            }

            .leaflet-container {
                border-radius: 300px 20px 20px 300px;
            }

            #map {
                height: 360px;
                width: 100%;
            }

            #map {
                height: 200px;
                width: 200px;
            }
        </style>
        <script>
            document.getElementById("appointmentForm").addEventListener("submit", function(event) {
                event.preventDefault();

                let formData = new FormData(this);

                fetch("{{ route('appointments.store') }}", {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Janji temu berhasil dibuat!",
                            icon: "success",
                            confirmButtonText: "Lihat Antrean"
                        }).then(() => {
                            window.open("{{ url('/antrean') }}/" + data.id, "_blank");
                        });
                    })
                    .catch(error => console.error("Error:", error));
            });
        </script>
    </div>

</body>

</html>
