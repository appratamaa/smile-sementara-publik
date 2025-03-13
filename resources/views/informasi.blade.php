<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="theme-color" content="#06c1db">
@vite('resources/css/app.css')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<title>SMILE</title>
</head>

<body class="h-full bg-white shadow-sm">
    <div class="min-h-full">
        <x-navbar>
        </x-navbar>

        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 ">Artikel Kesehatan Gigi</h1>
            <p class="mt-4 text-base text-gray-600">Pilih layanan klinik yang ingin Anda lakukan</p>
        </div>

        <main class="bg-white min-h-screen">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative w-full overflow-hidden mt-5">
                    <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                        <!-- Card 1 -->
                        <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer"
                            onclick="handleClick('Pembersihan Gigi')">
                            <div class="relative w-full h-full">
                                <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                                <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg"
                                    style="border-radius: 0 0 20px 20px;">
                                    <h5 class="text-lg font-semibold">Pembersihan Gigi</h5>
                                    <p class="text-sm">Layanan untuk membersihkan plak dan karang gigi.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer"
                            onclick="handleClick('Tambal Gigi')">
                            <div class="relative w-full h-full">
                                <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                                <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg"
                                    style="border-radius: 0 0 20px 20px;">
                                    <h5 class="text-lg font-semibold">Tambal Gigi</h5>
                                    <p class="text-sm">Perawatan untuk mengatasi gigi berlubang.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer"
                            onclick="handleClick('Cabut Gigi')">
                            <div class="relative w-full h-full">
                                <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                                <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg"
                                    style="border-radius: 0 0 20px 20px;">
                                    <h5 class="text-lg font-semibold">Cabut Gigi</h5>
                                    <p class="text-sm">Proses pencabutan gigi dengan aman dan nyaman.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer"
                            onclick="handleClick('Kontrol Gigi')">
                            <div class="relative w-full h-full">
                                <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                                <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg"
                                    style="border-radius: 0 0 20px 20px;">
                                    <h5 class="text-lg font-semibold">Kontrol Gigi</h5>
                                    <p class="text-sm">Pemeriksaan rutin untuk memastikan kesehatan gigi.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer"
                            onclick="handleClick('Pemutihan Gigi')">
                            <div class="relative w-full h-full">
                                <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                                <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg"
                                    style="border-radius: 0 0 20px 20px;">
                                    <h5 class="text-lg font-semibold">Pemutihan Gigi</h5>
                                    <p class="text-sm">Prosedur untuk memutihkan gigi dan senyum cerah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Arrows -->
                    <button
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full"
                        id="prevBtn">❮</button>
                    <button
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full"
                        id="nextBtn">❯</button>
                </div>

                <div class="mt-10 py-5">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 mt-8">Jadwal Praktik</h2>
                    <p class="text-start text-gray-600">Klik salah satu jadwal yang tersedia untuk reservasi</p>
            
                    <!-- Tombol Navigasi Bulan -->
                    <div class="flex justify-between mb-4">
                        <button class="bg-gray-500 text-white px-4 py-2 rounded" id="prevMonthBtn">Previous Bulan</button>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded" id="nextMonthBtn">Next Bulan</button>
                    </div>
            
                    <!-- Kartu Tanggal Bulan -->
                    <div class="grid grid-cols-5 gap-4" id="dateCards">
                        <!-- Card akan di-generate dengan JavaScript -->
                    </div>
                </div>
            
                <!-- Popup Form Reservasi -->
                <div id="popupForm" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
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
                                <button type="button" id="closePopup" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Batal</button>
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Reservasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <x-footer>
        </x-footer>
            
                <script>
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

                    document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("carousel");
    const items = document.querySelectorAll(".carousel-item");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    
    let index = 0;
    const totalItems = items.length;
    const itemWidth = items[0].offsetWidth + 16; // Tambahkan margin antara item
    let autoSlide;

    function updateCarousel() {
        const offset = -index * itemWidth;
        carousel.style.transform = `translateX(${offset}px)`;
    }

    function nextSlide() {
        index = (index + 1) % totalItems; 
        updateCarousel();
    }

    function prevSlide() {
        index = (index - 1 + totalItems) % totalItems;
        updateCarousel();
    }

    function startAutoSlide() {
        autoSlide = setInterval(() => {
            nextSlide();
        }, 3000); // Ganti slide setiap 3 detik
    }

    function stopAutoSlide() {
        clearInterval(autoSlide);
    }

    nextBtn.addEventListener("click", () => {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    });

    prevBtn.addEventListener("click", () => {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
    });

    carousel.addEventListener("mouseenter", stopAutoSlide);
    carousel.addEventListener("mouseleave", startAutoSlide);

    startAutoSlide();
});

                </script>
                
    </div>
</body>
</html>
