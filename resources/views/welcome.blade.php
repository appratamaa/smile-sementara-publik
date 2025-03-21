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
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<title>SMILE</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar>

        </x-navbar>

        <main class="bg-white min-h-screen">
            <div class="relative pb-20 rounded-b-[200px]">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center">

                    <!-- Left side: Text and Icons -->
                    <div class="flex-1 mb-6 lg:mb-0" data-aos="fade-up">
                        <h1 class="text-3xl font-extrabold text-black text-center lg:text-left">
                            Klinik Dokter Gigi Robet Agustinus Pangandaran
                        </h1>
                        <p class="text-base text-black text-center lg:text-left mt-2">
                            Memberikan pelayanan kesehatan gigi dan mulut terbaik untuk keluarga Anda.
                            Kami berkomitmen pada <b>kualitas, kenyamanan, dan kepercayaan</b>.
                        </p>

                        <!-- Ikon Pelayanan Klinik Gigi -->
                        <div class="grid grid-cols-3 md:grid-cols-6 lg:grid-cols-6 gap-6 mt-6">
                            <div class="flex flex-col items-center" data-aos="zoom-in">
                                <div
                                    class="w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-blue-600 hover:shadow-xl">
                                    <i class="fas fa-tooth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Pemeriksaan</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in" data-aos-delay="100">
                                <div
                                    class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-green-600 hover:shadow-xl">
                                    <i class="fas fa-teeth-open text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Scaling</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                                <div
                                    class="w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-red-600 hover:shadow-xl">
                                    <i class="fas fa-user-md text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Perawatan Gusi</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in" data-aos-delay="300">
                                <div
                                    class="w-16 h-16 bg-purple-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-purple-600 hover:shadow-xl">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Behel</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in" data-aos-delay="400">
                                <div
                                    class="w-16 h-16 bg-orange-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-orange-600 hover:shadow-xl">
                                    <i class="fas fa-hand-holding-medical text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Cabut Gigi</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in" data-aos-delay="500">
                                <div
                                    class="w-16 h-16 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-yellow-600 hover:shadow-xl">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Tambal Gigi</span>
                            </div>

                            {{-- <div class="flex flex-col items-center" data-aos="zoom-in">
                                <div
                                    class="w-16 h-16 bg-indigo-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-indigo-600 hover:shadow-xl">
                                    <i class="fas fa-smile text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Veneer</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in">
                                <div
                                    class="w-16 h-16 bg-teal-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-teal-600 hover:shadow-xl">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Implant</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in">
                                <div
                                    class="w-16 h-16 bg-pink-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-pink-600 hover:shadow-xl">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Gigi Palsu</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in">
                                <div
                                    class="w-16 h-16 bg-cyan-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-cyan-600 hover:shadow-xl">
                                    <i class="fas fa-x-ray text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Rontgen</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in">
                                <div
                                    class="w-16 h-16 bg-gray-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-gray-600 hover:shadow-xl">
                                    <i class="fas fa-teeth text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Orthodonti</span>
                            </div>

                            <div class="flex flex-col items-center" data-aos="zoom-in">
                                <div
                                    class="w-16 h-16 bg-lime-500 text-white rounded-full flex items-center justify-center shadow-lg 
                transition-all duration-500 ease-in-out hover:scale-110 hover:bg-lime-600 hover:shadow-xl">
                                    <i class="fas fa-syringe text-2xl"></i>
                                </div>
                                <span class="text-sm mt-2 text-black text-center">Bedah Mulut</span>
                            </div> --}}
                        </div>
                        <x-popup></x-popup>
                    </div>

                    <!-- Right side: Image -->
                    <div class="bg-white flex-1 flex justify-center mt-12">
                        <img src="image/Profil_Dokter.png" alt="Klinik Gigi" class="max-w-md w-full rounded-lg ">
                    </div>
                </div>

                <div class="text-center profile-section bg-white mb-6">
                    <h1 class="text-[32px] font-bold">Artikel Kesehatan Gigi</h1>
                    <p class="text-gray-600 text-lg">Dapatkan informasi tentang kesehatan gigi</p>
                    <hr class="w-96 mx-auto mt-2 border-gray-400">

                    <!-- Grid untuk artikel -->
                    <div class="bg-white py-10">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 px-4 md:px-12">
                            @foreach ($artikels as $artikel)
                                <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg p-4 mt-2"
                                    data-aos="zoom-in">
                                    <h2 class="text-lg font-semibold">{{ $artikel->judul_artikel }}</h2>
                                    <p class="text-sm text-gray-500">
                                        {{ Str::limit($artikel->deskripsi_artikel, 60, '...') }}</p>
                                    <p class="text-xs text-gray-400">
                                        {{ \Carbon\Carbon::parse($artikel->created_at)->format('d F Y') }}</p>
                                    <img src="{{ asset('gambar_artikel/' . $artikel['gambar']) }}"
                                        alt="{{ $artikel->judul_artikel }}" class="rounded-md mt-2">
                                </div>
                            @endforeach
                        </div>

                        <!-- Tombol untuk melihat lebih banyak artikel -->
                        <div class="text-center mt-6">
                            <a href="{{ route('artikel.index') }}"
                                class="text-[20px] font-bold text-blue-600 hover:underline">
                                Lihat Artikel Lainnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profil Dokter Gigi -->
            <div
                class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mt-8 grid gap-6 lg:grid-cols-2 lg:gap-8 profile-section content">
                <div class="lg:col-span-1 text-left" data-aos="fade-up">
                    <h1 class="text-[32px] font-bold px-10">Profil Dokter Gigi</h1>
                    <img src="image/Profil_Dokter.png" alt="Profil Dokter Gigi"
                        class="rounded-tr-[300px] rounded-tl-[300px] rounded-br-[0px] rounded-bl-[0px] transform transition-all duration-500 ease-in-out "
                        style="width: 350px; height: 400px;">
                </div>
                <div class="lg:col-span-1 text-left doctor-name" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-[32px] font-bold">drg. Robet Agustinus</h2>
                    <p class="text-[24px] mt-2">Spesialis Gigi dan Mulut</p>
                    <p class="mt-4">
                        Drg. Robet Agustinus adalah seorang dokter gigi berpengalaman yang telah melayani pasien
                        selama lebih dari 10 tahun. Beliau menyelesaikan pendidikan dokter gigi di Universitas
                        Indonesia dan melanjutkan pelatihan spesialis di bidang estetika dan perawatan gigi modern.
                    </p>
                    <ul class="list-disc ml-5 mt-4">
                        <li>Perawatan gigi estetika (veneer, pemutihan gigi)</li>
                        <li>Pemasangan kawat gigi dan perawatan ortodonti</li>
                        <li>Penanganan gigi berlubang dan penyakit gusi</li>
                        <li>Konsultasi kesehatan gigi anak dan keluarga</li>
                    </ul>
                    <p class="italic mt-4">"Senang bisa membantu setiap pasien tersenyum lebih percaya diri."</p>
                </div>
            </div>

            <style>
                .testimonial {
                    background: white;
                    padding: 1.5rem;
                    border-radius: 0.5rem;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 -4px 6px rgba(0, 0, 0, 0.1),
                        4px 0px 6px rgba(0, 0, 0, 0.1), -4px 0px 6px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }

                .testimonial:hover {
                    transform: translateY(-10px);
                    /* Elemen naik saat di-hover */
                    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2), 0 -8px 12px rgba(0, 0, 0, 0.2),
                        8px 0px 12px rgba(0, 0, 0, 0.2), -8px 0px 12px rgba(0, 0, 0, 0.2);
                }
            </style>

            <!-- Bagian Testimoni -->
            <div class="bg-white py-12 mt-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center text-gray-800" data-aos="fade-up">Apa Kata Pasien
                        Kami?</h2>
                    <hr class="w-96 mx-auto mt-2 border-gray-400 dashed-line">

                    <style>
                        .dashed-line {
                            border-top-style: dashed;
                            border-top-width: 2px;
                            border-color: #BDBDBD;
                            border-top: 2px dashed rgba(0, 0, 0, 0.3);
                            border-spacing: 10px;
                        }
                    </style>

                    <div class="mt-8 space-y-6">
                        <div class="testimonial" data-aos="fade-up" data-aos-delay="200">
                            <p class="text-gray-600 italic">"Pelayanan sangat baik, dokter ramah, dan tempatnya
                                nyaman!"</p>
                            <p class="mt-4 font-semibold text-gray-800">- Rina, 30 tahun</p>
                        </div>
                        <div class="testimonial" data-aos="fade-up" data-aos-delay="400">
                            <p class="text-gray-600 italic">"Proses scaling gigi sangat cepat dan tidak sakit sama
                                sekali."</p>
                            <p class="mt-4 font-semibold text-gray-800">- Andi, 27 tahun</p>
                        </div>
                        <div class="testimonial" data-aos="fade-up" data-aos-delay="600">
                            <p class="text-gray-600 italic">"Harga sangat terjangkau dengan kualitas pelayanan yang
                                terbaik!"</p>
                            <p class="mt-4 font-semibold text-gray-800">- Siti, 35 tahun</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Jadwal Dokter -->
            <div class="bg-white py-12" data-aos="fade-up">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl font-bold text-gray-800">Jadwal Dokter</h2>
                    <p class="text-gray-600">Pastikan jadwal dokter sebelum datang ke klinik.</p>
                    <table class="mt-6 w-full border-collapse border border-gray-300 shadow-lg">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 p-3">Hari</th>
                                <th class="border border-gray-300 p-3">Dokter</th>
                                <th class="border border-gray-300 p-3">Jam Praktek</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100 transition duration-300">
                                <td class="border border-gray-300 p-3">Senin - Jumat</td>
                                <td class="border border-gray-300 p-3">drg. Robet Agustinus</td>
                                <td class="border border-gray-300 p-3">15.00 - 19.00 WIB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Buat Janji Temu -->
            <div class="bg-white py-12">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
                    <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-8">Buat Janji Temu</h2>
                    <form id="appointmentForm" action="{{ route('appointments.store') }}" method="POST">
                        @csrf
        
                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="nama" class="block text-gray-700 text-sm">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama"
                                class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                placeholder="Masukkan nama Anda" required>
                        </div>
        
                        <!-- Usia & Jenis Kelamin -->
                        <div class="flex gap-2">
                            <div class="w-1/2">
                                <label for="usia" class="block text-gray-700 text-sm">Usia</label>
                                <input type="number" name="usia" id="usia"
                                    class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                    placeholder="Usia" min="0" required>
                            </div>
                            <div class="w-1/2">
                                <label for="jenis_kelamin" class="block text-gray-700 text-sm">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin"
                                    class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                    required>
                                    <option value="">Pilih</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
        
                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="block text-gray-700 text-sm">Alamat Singkat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                placeholder="Alamat Anda" required>
                        </div>
        
                        <!-- Tanggal & Tujuan -->
                        <div class="mb-3">
                            <label for="tanggal" class="block text-gray-700 text-sm">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal"
                                class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                required>
                        </div>
        
                        <div class="mb-4">
                            <label for="tujuan" class="block text-gray-700 text-sm">Tujuan</label>
                            <select name="tujuan" id="tujuan"
                                class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
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
        
                        <!-- Tombol Submit -->
                        <button type="submit"
                            class="w-full bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                            Buat Janji
                        </button>
                    </form>
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
    <script>
        AOS.init({
            duration: 1000, // Durasi animasi (ms)
            once: true, // Animasi hanya terjadi sekali saat di-scroll
        });
    </script>


</body>

</html>
