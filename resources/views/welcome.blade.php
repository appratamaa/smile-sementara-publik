<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="theme-color" content="#06c1db">
@vite('resources/css/app.css')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row">

                <!-- Left side -->
                <div class="flex-1 mb-6 lg:mb-0">
                    <p class="text-base text-gray-600 text-justify">
                        Memberikan pelayanan kesehatan gigi dan mulut terbaik untuk keluarga Anda.
                        Kami berkomitmen pada <b>kualitas, kenyamanan, dan kepercayaan</b>.
                    </p>

                    <!-- Modal (Menggunakan Alpine.js) -->
                    <div x-data="{ openModal: false }">
                        <div class="flex justify-center lg:justify-start">
                            <button @click="openModal = true"
                                class="mt-6 rounded-md bg-white px-4 py-2 text-black border-2 border-black hover:bg-black hover:text-white">
                                Buat Janji
                            </button>
                        </div>

                        <!-- Popup Modal -->
                        <div x-cloak x-show="openModal"
                            class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full relative">
                                <!-- Tombol Close -->
                                <button @click="openModal = false"
                                    class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                                    ✖
                                </button>

                                <!-- Konten Janji Temu Dokter -->
                                <h2 class="text-xl font-semibold text-gray-800 mb-4">Buat Janji Temu</h2>
                                <form id="appointmentForm">
                                    <div class="mb-4">
                                        <label for="nama" class="block text-gray-700">Nama Lengkap</label>
                                        <input type="text" id="nama" class="w-full p-2 border rounded mt-1"
                                            placeholder="Masukkan nama Anda">
                                    </div>
                                    <div class="mb-4">
                                        <label for="tanggal" class="block text-gray-700">Tanggal</label>
                                        <input type="date" id="tanggal" class="w-full p-2 border rounded mt-1">
                                    </div>
                                    <div class="mb-4">
                                        <label for="waktu" class="block text-gray-700">Waktu</label>
                                        <div id="waktu" class="grid grid-cols-2 gap-4">
                                            <!-- Jam yang tersedia akan dimasukkan di sini -->
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="dokter" class="block text-gray-700">Tujuan</label>
                                        <select id="dokter" class="w-full p-2 border rounded mt-1">
                                            <option>Pemeriksaan Rutin</option>
                                            <option>Cabut Gigi</option>
                                            <option>Pasang Behel</option>
                                        </select>
                                    </div>
                                    <button type="submit"
                                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                        Buat Janji
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side -->
                <div class="flex-1 flex items-center justify-center lg:justify-end lg:items-start mt-8 lg:mt-0">
                    <img class="max-w-full h-auto lg:max-w-md" src="image/Profil Dokter.png" alt="Profil Dokter">
                </div>
            </div>
            <div class="text-center profile-section">
                <h1 class="text-[32px] font-bold">Artikel Kesehatan Gigi</h1>
            </div>
            <div class="flex justify-center mt-4 gap-4 flex-wrap">
                <img src="image/GIGI.png" alt="Gambar 1" style="width: 175px; height: 231px;" class="rounded-md">
                <img src="image/GIGI.png" alt="Gambar 2" style="width: 175px; height: 231px;" class="rounded-md">
                <img src="image/GIGI.png" alt="Gambar 3" style="width: 175px; height: 231px;" class="rounded-md">
                <img src="image/GIGI.png" alt="Gambar 4" style="width: 175px; height: 231px;" class="rounded-md">
            </div>
            <div class="text-center mt-4">
                <p class="text-[20px] font-bold">See More</p>
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
                        Drg. Robet Agustinus adalah seorang dokter gigi berpengalaman yang telah melayani pasien selama
                        lebih dari 10 tahun. Beliau menyelesaikan pendidikan dokter gigi di Universitas Indonesia dan
                        melanjutkan pelatihan spesialis di bidang estetika dan perawatan gigi modern.
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
            <!-- Profil Staf -->
            <div
                class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mt-8 grid gap-6 lg:grid-cols-2 lg:gap-8 profile-section content">
                <div class="lg:col-span-1 text-left">
                    <h2 class="text-[32px] font-bold staff-name">Andini Pratama</h2>
                    <p class="mt-4">
                        Andini adalah asisten dokter gigi yang memiliki pengalaman lebih dari 5 tahun. Dengan sikap
                        ramah dan perhatian, ia membantu memastikan setiap prosedur berjalan lancar serta memberikan
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
            document.addEventListener("DOMContentLoaded", function() {
                const schedules = JSON.parse(localStorage.getItem('schedules')) || [];
                const waktuContainer = document.getElementById('waktu');
                const tanggalInput = document.getElementById('tanggal');

                // Menampilkan tanggal yang tersedia pada input
                const today = new Date();
                const minDate = today.toISOString().split('T')[0]; // Set tanggal minimum ke hari ini
                tanggalInput.setAttribute('min', minDate);

                // Mengisi kotak waktu dengan jam yang tersedia sesuai hari yang dipilih
                tanggalInput.addEventListener('change', function() {
                    waktuContainer.innerHTML = ''; // Reset pilihan waktu

                    let hasAvailableTime = false;
                    schedules.forEach(schedule => {
                        if (schedule.tanggal === tanggalInput.value) {
                            const radioButton = document.createElement('div');
                            radioButton.classList.add('flex', 'items-center');

                            const input = document.createElement('input');
                            input.type = 'radio';
                            input.id = schedule.jam;
                            input.name = 'waktu';
                            input.value = schedule.jam;

                            const label = document.createElement('label');
                            label.setAttribute('for', schedule.jam);
                            label.classList.add('ml-2', 'text-gray-700');
                            label.textContent = schedule.jam;

                            radioButton.appendChild(input);
                            radioButton.appendChild(label);
                            waktuContainer.appendChild(radioButton);
                            hasAvailableTime = true;
                        }
                    });

                    if (!hasAvailableTime) {
                        const message = document.createElement('p');
                        message.textContent = 'Tidak ada jadwal tersedia';
                        message.classList.add('text-red-500', 'mt-2');
                        waktuContainer.appendChild(message);
                    }
                });
            });

            document.getElementById('appointmentForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const nama = document.getElementById('nama').value;
                const tanggal = document.getElementById('tanggal').value;
                const waktu = document.querySelector('input[name="waktu"]:checked')?.value;
                const dokter = document.getElementById('dokter').value;

                if (!waktu) {
                    alert('Silakan pilih waktu yang tersedia terlebih dahulu');
                    return;
                }

                const appointment = {
                    nama: nama,
                    tanggal: tanggal,
                    waktu: waktu,
                    dokter: dokter,
                    status: 'Pending'
                };

                const appointments = JSON.parse(localStorage.getItem('appointments')) || [];
                appointments.push(appointment);
                localStorage.setItem('appointments', JSON.stringify(appointments));

                alert('Janji Temu Berhasil Dibuat!');
                document.getElementById('appointmentForm').reset();
            });
        </script>
    </div>

</body>

</html>
