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
        <nav class="bg-white" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center ">
                        <div class="shrink-0">
                            <img class="w-18 h-10" src="image/SMILE LOGO.png" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="/"
                                    class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                    aria-current="page">Beranda</a>
                                <a href="/artikel"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">Artikel</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">Chat
                                    Dokter</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">Informasi</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">Lainnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6 ">
                            <button type="button"
                                class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Lihat Notifikasi</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>

                            {{-- <!-- Profile dropdown -->
                                <div class="relative ml-3">
                                    <div>
                                        <button type="button" @click="isOpen = !isOpen"
                                            class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="absolute -inset-1.5"></span>
                                            <span class="sr-only">Buka menu pengguna</span>
                                            <img class="size-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </button>
                                    </div>
                                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75 transform"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 focus:outline-hidden"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-0">Profil Saya</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-1">Pengaturan</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-2">Keluar</a>
                                    </div>
                                </div> --}}
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" @click="window.location.href='/masuk'"
                                        class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                        id="login-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Login</span>
                                        <span class="text-white">Login</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-black hover:bg-black hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:outline-hidden"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Buka menu utama</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- <!-- Mobile menu, show/hide based on menu state. -->
                <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#"
                            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                            aria-current="page">Beranda</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Artikel</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Chat
                            Dokter</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Informasi</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Lainnya</a>
                    </div>
                    <div class="border-t border-gray-700 pt-4 pb-3">
                        <div class="flex items-center px-5">
                            <div class="shrink-0">
                                <img class="size-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </div>
                            <div class="ml-3">
                                <div class="text-base/5 font-medium text-white">Tom Cook</div>
                                <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                            </div>
                            <button type="button"
                                class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Lihat Notifikasi</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-3 space-y-1 px-2">
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Profil
                                Saya</a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Pengaturan</a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Keluar</a>
                        </div>
                    </div>
                </div> --}}
            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Beranda</a>
                    <a href="/artikel"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Artikel</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Chat
                        Dokter</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Informasi</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Lainnya</a>
                </div>
                <div class="border-t border-gray-700 pt-4 pb-3">
                    <div class="flex items-center px-5">
                        {{-- <div class="shrink-0">
                            <img class="w-10 h-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base/5 font-medium text-white">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                        </div> --}}
                        <button type="button" @click="window.location.href='/masuk'"
                            class="relative ml-auto shrink-0 rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Login</span>
                            <span class="text-white">Login</span>
                        </button>
                    </div>
                </div>
            </div>

        </nav>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 mt-24">
                    Klinik drg. Robet Agustinus Pangandaran
                </h1>
            </div>
        </header>
        
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
                        <div x-cloak x-show="openModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full relative">
                                <!-- Tombol Close -->
                                <button @click="openModal = false" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                                    ✖
                                </button>
        
                                <!-- Konten Janji Temu Dokter -->
                                <h2 class="text-xl font-semibold text-gray-800 mb-4">Buat Janji Temu</h2>
                                <form id="appointmentForm">
                                    <div class="mb-4">
                                        <label for="nama" class="block text-gray-700">Nama Lengkap</label>
                                        <input type="text" id="nama" class="w-full p-2 border rounded mt-1" placeholder="Masukkan nama Anda">
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
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
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
        </main>  
        
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
