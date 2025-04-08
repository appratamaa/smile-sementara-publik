<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#06c1db">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>SMILE - Klinik Gigi</title>
</head>

<body class="h-full bg-white shadow-sm">
    <div class="min-h-full">
        <x-navbar data-aos="fade-down"></x-navbar>

        <main class="bg-white min-h-screen">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Informasi -->
                <section class="bg-white py-10" data-aos="fade-up">
                    <div class="container mx-auto px-4">
                        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8" data-aos="fade-up">
                            Informasi Terbaru
                        </h2>
                        <div class="flex md:grid md:grid-cols-3 gap-8 overflow-x-auto sm:flex-nowrap sm:space-x-4 pb-4">
                            @foreach ($informasi as $item)
                                <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0"
                                    data-aos="fade-right"
                                    onclick="window.location.href='{{ url('/informasi/' . $item->id) }}'">
                                    <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                        class="w-full h-48 object-cover rounded-t-lg">
                                    <div class="p-4">
                                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">{{ $item->judul }}</h3>
                                        <p class="text-gray-600 mt-2">{{ Str::limit($item->deskripsi, 120) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </main>

                <!-- Section Jadwal Praktik -->
                    <div class="mt-10 py-5" data-aos="fade-up">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 mt-8" data-aos="zoom-in">Jadwal Praktik</h2>
                        <p class="text-start text-gray-600 mb-4">Klik salah satu jadwal yang tersedia untuk reservasi</p>
                    
                        <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                            @forelse ($jadwalPraktik as $jadwal)
                                @php
                                    $tanggal = \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('l, j F Y');
                                    $tersedia = strtolower($jadwal->status) === 'tersedia';
                                @endphp
                                <div class="p-4 rounded-lg shadow text-center {{ $tersedia ? 'bg-blue-100 text-blue-800' : 'bg-gray-200 text-gray-700' }}">
                                    <p class="font-semibold">{{ $tanggal }}</p>
                                    <p class="text-sm mt-1">{{ $tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</p>
                                </div>
                            @empty
                                <div class="col-span-full text-center text-gray-500 py-4">
                                    Tidak ada jadwal praktik.
                                </div>
                            @endforelse
                        </div>
                    </div>

                <!-- Popup Form Reservasi -->
                <div id="popupForm"
                    class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" data-aos="fade-in">
                    <div class="bg-white p-5 rounded-lg shadow-lg w-96">
                        <h3 class="text-xl font-bold mb-4">Reservasi Jadwal</h3>
                        <form id="reservationForm">
                            <label class="block mb-2">Tanggal:</label>
                            <input type="text" id="selectedDate" class="w-full p-2 border rounded mb-4" readonly>

                            <label class="block mb-2">Nama:</label>
                            <input type="text" id="nama" class="w-full p-2 border rounded mb-4" required>

                            <label class="block mb-2">Tujuan Kunjungan:</label>
                            <input type="text" id="tujuan" class="w-full p-2 border rounded mb-4" required>

                            <div class="flex justify-end">
                                <button type="button" id="closePopup"
                                    class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Batal</button>
                                <button type="submit"
                                    class="bg-green-500 text-white px-4 py-2 rounded">Reservasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <x-footer data-aos="fade-up"></x-footer>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            AOS.init({
                duration: 1000, // Durasi animasi (ms)
                once: true, // Animasi hanya terjadi sekali saat konten di-scroll
            });
        });
        
    </script>
</body>
</html>
