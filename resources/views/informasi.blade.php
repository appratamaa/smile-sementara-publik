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
                <!-- Section Layanan -->
                <section class="bg-white py-10" data-aos="fade-up">
                    <div class="container mx-auto px-4">
                        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8" data-aos="fade-up">
                            Layanan Unggulan Kami
                        </h2>
                        <div class="flex md:grid md:grid-cols-3 gap-8 overflow-x-auto sm:flex-nowrap sm:space-x-4 pb-4">
                            <!-- Card 1 -->
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            <div class="group relative transform transition-all duration-500 ease-in-out hover:scale-110 hover:shadow-xl shadow-lg bg-white rounded-lg overflow-hidden p-4 mt-2 cursor-pointer min-w-[80%] sm:min-w-[60%] md:min-w-0" 
                                data-aos="fade-right" onclick="handleCardClick('Pembersihan Gigi')">
                                <img src="image/GIGI1.png" alt="Pembersihan Gigi" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-500">Pembersihan Gigi</h3>
                                    <p class="text-gray-600 mt-2">Layanan untuk membersihkan plak dan karang gigi demi senyum sehat Anda.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
                

                <!-- Section Jadwal Praktik -->
                <div class="mt-10 py-5" data-aos="fade-up">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 mt-8" data-aos="zoom-in">Jadwal Praktik</h2>
                    <p class="text-start text-gray-600">Klik salah satu jadwal yang tersedia untuk reservasi</p>
                    <!-- Tombol Navigasi Bulan -->
                    <div class="flex justify-between mb-4" data-aos="zoom-in">
                        <button class="bg-gray-500 text-white px-4 py-2 rounded" id="prevMonthBtn">Previous
                            Bulan</button>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded" id="nextMonthBtn">Next Bulan</button>
                    </div>
                    <!-- Kartu Tanggal Bulan -->
                    <div class="grid grid-cols-5 gap-4" id="dateCards" data-aos="zoom-in">
                        <!-- Kartu akan di-generate dengan JavaScript -->
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

    <!-- Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            AOS.init({
                duration: 1000, // Durasi animasi (ms)
                once: true, // Animasi hanya terjadi sekali saat konten di-scroll
            });
        });

        function handleCardClick(serviceName) {
            alert(`Anda memilih layanan: ${serviceName}`);
        }

        const dateCards = document.getElementById('dateCards');
        const nextMonthBtn = document.getElementById('nextMonthBtn');
        const prevMonthBtn = document.getElementById('prevMonthBtn');
        const popupForm = document.getElementById('popupForm');
        const selectedDateInput = document.getElementById('selectedDate');
        const closePopup = document.getElementById('closePopup');
        const reservationForm = document.getElementById('reservationForm');

        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember"
        ];

        let currentDate = new Date();
        let currentMonth = currentDate.getMonth();
        let currentYear = currentDate.getFullYear();

        function generateDateCards(month, year) {
            dateCards.innerHTML = '';
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);

            for (let day = firstDay.getDate(); day <= lastDay.getDate(); day++) {
                const date = new Date(year, month, day);
                const dayName = date.toLocaleDateString('id-ID', { weekday: 'long' });
                const formattedDate = `${dayName}, ${day} ${monthNames[month]} ${year}`;
                const isAvailable = Math.random() > 0.5; // Simulasi ketersediaan
                const cardColor = isAvailable ? 'bg-blue-100 text-blue-500' : 'bg-gray-300 text-gray-600';
                const availabilityText = isAvailable ? 'Tersedia' : 'Tidak Tersedia';

                const card = document.createElement('div');
                card.className = `p-4 text-center rounded-lg cursor-pointer ${cardColor}`;
                card.innerHTML = `<strong>${formattedDate}</strong><br><span class="text-xs">${availabilityText}</span>`;
                if (isAvailable) {
                    card.addEventListener('click', () => openPopup(formattedDate));
                }
                dateCards.appendChild(card);
            }
        }

        nextMonthBtn.addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateDateCards(currentMonth, currentYear);
        });

        prevMonthBtn.addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            generateDateCards(currentMonth, currentYear);
        });

        function openPopup(date) {
            selectedDateInput.value = date;
            popupForm.classList.remove("hidden");
        }

        closePopup.addEventListener('click', () => {
            popupForm.classList.add("hidden");
        });

        reservationForm.addEventListener("submit", function(event) {
            event.preventDefault();
            const nama = document.getElementById("nama").value.trim();
            const tujuan = document.getElementById("tujuan").value.trim();
            alert(`Reservasi berhasil!\nTanggal: ${selectedDateInput.value}\nNama: ${nama}\nTujuan: ${tujuan}`);
            popupForm.classList.add("hidden");
        });

        generateDateCards(currentMonth, currentYear);
    </script>
</body>
</html>
