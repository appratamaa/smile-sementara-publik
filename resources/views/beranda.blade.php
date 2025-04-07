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
                        <h3 class="text-xl font-semibold mb-4">Selamat Datang</h3>
                        <p class="text-gray-700">Lengkapi profil Anda untuk menikmati layanan terbaik kami.</p>
                    </div>

                    <!-- Informasi Data -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg border border-gray-300">
                            <h4 class="text-lg font-semibold">Total Pasien</h4>
                            <p class="text-2xl font-bold text-blue-600">120</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-300">
                            <h4 class="text-lg font-semibold">Antrian Anda</h4>
                            <p class="text-2xl font-bold text-green-600">15</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-300">
                            <h4 class="text-lg font-semibold">Sisa Antrian</h4>
                            <p class="text-2xl font-bold text-red-600">7</p>
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
                                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($riwayatKunjungan as $index => $kunjungan)
                                        <tr class="hover:bg-gray-100">
                                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2 text-center">
                                                {{ $kunjungan->tanggal->format('d F Y') }}</td>
                                            <td class="border border-gray-300 px-4 py-2 text-center">
                                                {{ $kunjungan->tujuan }}</td>
                                            <td class="border border-gray-300 px-4 py-2 text-center">
                                                <button
                                                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded"
                                                    onclick="showAntrean(
        '{{ $kunjungan->id }}',
        '{{ $kunjungan->tanggal }}',
        '{{ $kunjungan->tujuan }}',
        '{{ 'A-' . str_pad($kunjungan->id, 3, '0', STR_PAD_LEFT) }}'
    )">
                                                    Lihat Tiket
                                                </button>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-4 text-gray-500">Belum ada riwayat
                                                kunjungan.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tiket Antrean dan Form Ulasan -->
                    <div id="tiketAntrean" class="hidden mt-8 bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4 text-blue-700">Tiket Antrean</h3>
                        <p><strong>Tanggal Kunjungan:</strong> <span id="tiketTanggal"></span></p>
                        <p><strong>Tujuan:</strong> <span id="tiketTujuan"></span></p>
                        <p><strong>Nomor Antrean:</strong> <span id="tiketNomor"></span></p>

                        <hr class="my-4">

                        <input type="hidden" id="appointment_id" value="">

                        <h4 class="text-lg font-semibold mb-2 text-gray-700">Beri Ulasan</h4>
                        <div class="flex items-center mb-4" id="rating-stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="star text-3xl cursor-pointer text-gray-300"
                                    data-value="{{ $i }}">&#9733;</span>
                            @endfor
                        </div>
                        <textarea id="komentar" class="w-full border border-gray-300 rounded p-2" rows="3"
                            placeholder="Tulis komentar..."></textarea>
                        <button onclick="submitUlasan()"
                            class="mt-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Kirim
                            Ulasan</button>

                        <div id="ulasanHasil" class="mt-4 hidden">
                            <h4 class="text-lg font-semibold text-gray-700">Ulasan Anda</h4>
                            <div id="ulasanRating" class="flex text-yellow-400 text-2xl mb-2"></div>
                            <p id="ulasanKomentar" class="italic text-gray-600"></p>
                        </div>

                        <!-- SweetAlert2 -->
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                        <script>
                            let selectedRating = 0;
                        
                            function showAntrean(id, tanggal, tujuan, nomor) {
                                document.getElementById('tiketAntrean').classList.remove('hidden');
                                document.getElementById('appointment_id').value = id;
                        
                                const options = { day: '2-digit', month: 'long', year: 'numeric' };
                                document.getElementById('tiketTanggal').textContent = new Date(tanggal).toLocaleDateString('id-ID', options);
                                document.getElementById('tiketTujuan').textContent = tujuan;
                                document.getElementById('tiketNomor').textContent = nomor;
                        
                                // Reset sebelumnya
                                selectedRating = 0;
                                document.getElementById('komentar').value = '';
                                document.getElementById('ulasanHasil').classList.add('hidden');
                                document.querySelectorAll('.star').forEach(s => s.style.color = '#d1d5db');
                        
                                // Cek apakah sudah ada ulasan sebelumnya
                                fetch(`/ulasan/${id}`) // Ganti endpoint ini sesuai rute di backend kamu
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.found) {
                                            selectedRating = data.rating;
                                            document.getElementById('komentar').value = data.komentar;
                        
                                            // Tampilkan hasil ulasan
                                            const ulasanRatingDiv = document.getElementById('ulasanRating');
                                            const ulasanKomentarP = document.getElementById('ulasanKomentar');
                                            const hasilContainer = document.getElementById('ulasanHasil');
                        
                                            ulasanRatingDiv.innerHTML = '';
                                            for (let i = 1; i <= 5; i++) {
                                                ulasanRatingDiv.innerHTML += `<span class="${i <= selectedRating ? 'text-yellow-400' : 'text-gray-300'}">&#9733;</span>`;
                                            }
                        
                                            ulasanKomentarP.textContent = data.komentar;
                                            hasilContainer.classList.remove('hidden');
                                        }
                                    });
                            }
                        
                            // Bintang interaktif
                            document.querySelectorAll('.star').forEach(star => {
                                star.addEventListener('click', function () {
                                    selectedRating = this.getAttribute('data-value');
                                    document.querySelectorAll('.star').forEach(s => {
                                        s.style.color = s.getAttribute('data-value') <= selectedRating ? '#facc15' : '#d1d5db';
                                    });
                                });
                            });
                        
                            function submitUlasan() {
                                const appointmentId = document.getElementById('appointment_id').value;
                                const komentar = document.getElementById('komentar').value;
                        
                                fetch('{{ route('ulasan.store') }}', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                    body: JSON.stringify({
                                        appointment_id: appointmentId,
                                        rating: selectedRating,
                                        komentar: komentar
                                    })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Ulasan Terkirim!',
                                            text: 'Terima kasih atas ulasan Anda.',
                                            timer: 2000,
                                            showConfirmButton: false
                                        });
                        
                                        // Tampilkan ulang ulasan yang dikirim
                                        const ulasanRatingDiv = document.getElementById('ulasanRating');
                                        const ulasanKomentarP = document.getElementById('ulasanKomentar');
                                        const hasilContainer = document.getElementById('ulasanHasil');
                        
                                        ulasanRatingDiv.innerHTML = '';
                                        for (let i = 1; i <= 5; i++) {
                                            ulasanRatingDiv.innerHTML += `<span class="${i <= selectedRating ? 'text-yellow-400' : 'text-gray-300'}">&#9733;</span>`;
                                        }
                        
                                        ulasanKomentarP.textContent = komentar;
                                        hasilContainer.classList.remove('hidden');
                        
                                        document.querySelectorAll('.star').forEach(s => s.style.color = '#d1d5db');
                                        document.getElementById('komentar').value = '';
                                    }
                                });
                            }
                        </script>                        
                    </div>

                    <!-- Riwayat Penyakit -->
                    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Riwayat Penyakit</h3>

                        @if ($riwayatKunjungan->isEmpty())
                            <p class="text-gray-500 italic">Belum ada data riwayat penyakit yang tersedia.</p>
                        @else
                            <ul class="list-disc list-inside text-gray-700">
                                @foreach ($riwayatKunjungan as $riwayat)
                                    <li>
                                        {{ $riwayat->tujuan }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <!-- Riwayat Perawatan -->
                    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Riwayat Perawatan</h3>

                        @if ($riwayatKunjungan->isEmpty())
                            <p class="text-gray-500 italic">Belum ada data riwayat perawatan yang tersedia.</p>
                        @else
                            <ul class="list-disc list-inside text-gray-700">
                                @foreach ($riwayatKunjungan as $riwayat)
                                    <li>
                                        {{ $riwayat->tanggal->format('d M Y') }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </main>
            </div>
        </div>
    </div>


    <x-footer>
    </x-footer>
</body>

</html>
