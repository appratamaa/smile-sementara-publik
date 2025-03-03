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

<body class="h-full bg-white shadow-sm">
    <div class="min-h-full">
        <x-navbar>
        </x-navbar>

        <x-header>
            Informasi Layanan Klinik
        </x-header>

        <main class="bg-white min-h-screen">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-start text-gray-600">Pilih layanan klinik yang ingin Anda lakukan</p>
        
            <div class="relative w-full overflow-hidden mt-5">
                <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                    <!-- Card 1 -->
                    <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer" onclick="handleClick('Pembersihan Gigi')">
                        <div class="relative w-full h-full">
                            <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                            <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg" style="border-radius: 0 0 20px 20px;">
                                <h5 class="text-lg font-semibold">Pembersihan Gigi</h5>
                                <p class="text-sm">Layanan untuk membersihkan plak dan karang gigi.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer" onclick="handleClick('Tambal Gigi')">
                        <div class="relative w-full h-full">
                            <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                            <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg" style="border-radius: 0 0 20px 20px;">
                                <h5 class="text-lg font-semibold">Tambal Gigi</h5>
                                <p class="text-sm">Perawatan untuk mengatasi gigi berlubang.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer" onclick="handleClick('Cabut Gigi')">
                        <div class="relative w-full h-full">
                            <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                            <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg" style="border-radius: 0 0 20px 20px;">
                                <h5 class="text-lg font-semibold">Cabut Gigi</h5>
                                <p class="text-sm">Proses pencabutan gigi dengan aman dan nyaman.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer" onclick="handleClick('Kontrol Gigi')">
                        <div class="relative w-full h-full">
                            <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                            <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg" style="border-radius: 0 0 20px 20px;">
                                <h5 class="text-lg font-semibold">Kontrol Gigi</h5>
                                <p class="text-sm">Pemeriksaan rutin untuk memastikan kesehatan gigi.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="carousel-item min-w-[275px] h-[331px] flex-shrink-0 mx-2 transition-shadow duration-300 hover:shadow-lg hover:cursor-pointer" onclick="handleClick('Pemutihan Gigi')">
                        <div class="relative w-full h-full">
                            <img src="image/GIGI.png" class="w-full h-full object-cover rounded-lg shadow-md">
                            <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 text-white text-center p-4 rounded-b-lg" style="border-radius: 0 0 20px 20px;">
                                <h5 class="text-lg font-semibold">Pemutihan Gigi</h5>
                                <p class="text-sm">Prosedur untuk memutihkan gigi dan senyum cerah.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Arrows -->
                <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full" id="prevBtn">❮</button>
                <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full" id="nextBtn">❯</button>
            </div>
            
            <div class="mt-10 py-5 ">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 mt-8">Jadwal Praktik</h2>
                <p class="text-start text-gray-600">Klik salah satu jadwal yang tersedia untuk reservasi</p>
                
                <!-- Tombol Next Bulan -->
                <div class="flex justify-end mb-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" id="nextMonthBtn">Next Bulan</button>
                </div>
                
                <!-- Kartu Tanggal Bulan -->
                <div class="grid grid-cols-5 gap-4" id="dateCards">
                    <!-- Card for each day will be generated by JavaScript -->
                </div>   
            </div>
            </main>
        <x-footer>
        </x-footer>
        <script>
            const dateCards = document.getElementById('dateCards');
            const nextMonthBtn = document.getElementById('nextMonthBtn');
        
            const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        
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
                    
                    const isAvailable = Math.random() > 0.5; // Dummy data for availability
                    const cardColor = isAvailable ? 'bg-blue-100 text-blue-500' : 'bg-gray-300 text-gray-600';
                    const availabilityText = isAvailable ? 'Tersedia' : 'Tidak Tersedia';
        
                    const card = document.createElement('div');
                    card.className = `card p-2 text-center rounded-lg ${cardColor}`;
                    card.innerHTML = `${formattedDate}<br><span class="text-xs">${availabilityText}</span>`;
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
        
            generateDateCards(currentMonth, currentYear);
        </script>       
        <script>
            const carousel = document.getElementById('carousel');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            let index = 0;
            const items = document.querySelectorAll('.carousel-item');
            const itemWidth = items[0].offsetWidth;
            const totalItems = items.length;
        
            function autoSlide() {
                index++;
                if (index === totalItems) {
                    index = 0;
                    carousel.style.transition = 'none';
                    carousel.style.transform = `translateX(0)`;
                    setTimeout(() => {
                        carousel.style.transition = 'transform 0.5s ease-in-out';
                    }, 0);
                } else {
                    carousel.style.transition = 'transform 0.5s ease-in-out';
                    carousel.style.transform = `translateX(-${index * itemWidth}px)`;
                }
            }
        
            function slideToIndex(newIndex) {
                index = newIndex;
                carousel.style.transition = 'transform 0.5s ease-in-out';
                carousel.style.transform = `translateX(-${index * itemWidth}px)`;
            }
        
            prevBtn.addEventListener('click', () => {
                if (index > 0) {
                    slideToIndex(index - 1);
                } else {
                    slideToIndex(totalItems - 1);
                }
            });
        
            nextBtn.addEventListener('click', () => {
                if (index < totalItems - 1) {
                    slideToIndex(index + 1);
                } else {
                    slideToIndex(0);
                }
            });
        
            function handleClick(service) {
                alert(`Anda mengklik layanan: ${service}`);
                // Anda dapat mengarahkan pengguna ke halaman lain atau menjalankan fungsi lainnya di sini
            }
        
            setInterval(autoSlide, 3000);
        </script>           
                
    

