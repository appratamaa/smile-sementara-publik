<nav class="bg-white transition-all duration-300" x-data="{ isSticky: false, isOpen: false }"
    :class="{ 'fixed top-0 w-full shadow-md z-50': isSticky }" x-init="window.addEventListener('scroll', () => { isSticky = window.scrollY > 50 })">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="w-18 h-10" src="image/SMILE LOGO.png" alt="Your Company">
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 ">
                    <!-- Button Notifikasi -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" type="button"
                            class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Lihat Notifikasi</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>

                        <!-- Dropdown Notifikasi -->
                        <div x-show="open" @click.away="open = false"
                            class="absolute right-0 mt-2 w-64 bg-white rounded-md shadow-lg z-50">
                            <div class="py-2 px-4 border-b text-gray-700 font-semibold">Notifikasi</div>
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

                    <!-- Wrapper harus memiliki x-data -->
                    <div x-data="{ isOpen: false }" class="relative">
                        <!-- Nama Pengguna & Foto Profil -->
                        <button @click="isOpen = !isOpen" class="focus:outline-none flex items-center space-x-4 ml-20">
                            <!-- Nama Pengguna -->
                            <div class="text-black font-medium">
                                {{ $pengguna->nama_lengkap ?? 'Pengguna' }}
                            </div>

                            <!-- Garis Vertikal -->
                            <div class="h-8 w-px bg-gray-300"></div>

                            <!-- Foto Profil Dummy -->
                            <img src="https://via.placeholder.com/40" alt="Foto Profil"
                                class="w-10 h-10 rounded-full border border-gray-300 cursor-pointer">
                        </button>

                        <!-- Dropdown Profil -->
                        <div x-show="isOpen" @click.away="isOpen = false"
                            class="absolute left-1/2 top-full mt-2 w-72 bg-white rounded-md shadow-lg z-50 p-4 border border-gray-200 transform -translate-x-1/2"
                            x-cloak>

                            <!-- Email -->
                            <div class="mb-2">
                                <span class="text-gray-600 text-sm">Email:</span>
                                <p class="text-black font-medium">{{ $pengguna->email ?? '-' }}</p>
                            </div>

                            <!-- Nomor HP -->
                            <div class="mb-2">
                                <span class="text-gray-600 text-sm">Nomor Telepon:</span>
                                <p class="text-black font-medium">{{ $pengguna->nomor_hp ?? '-' }}</p>
                            </div>

                            <!-- Input Data Pribadi -->
                            <div class="mb-2">
                                <label class="text-gray-600 text-sm">Berat Badan (kg):</label>
                                <input type="number" class="w-full border rounded-md px-2 py-1 text-black">
                            </div>

                            <div class="mb-2">
                                <label class="text-gray-600 text-sm">Tinggi Badan (cm):</label>
                                <input type="number" class="w-full border rounded-md px-2 py-1 text-black">
                            </div>

                            <div class="mb-2">
                                <label class="text-gray-600 text-sm">Penyakit Genetik:</label>
                                <input type="text" class="w-full border rounded-md px-2 py-1 text-black">
                            </div>

                            <!-- Alamat -->
                            <div class="mb-2">
                                <label class="text-gray-600 text-sm">Alamat:</label>
                                <textarea class="w-full border rounded-md px-2 py-1 text-black"></textarea>
                            </div>

                            <!-- Tombol Logout -->
                            <div class="mt-4">
                                <form action="{{ route('keluar') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-center bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-md">
                                        Keluar
                                    </button>
                                </form>
                            </div>
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
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="border-t border-gray-700 pt-4 pb-3">
            <div class="flex items-center px-5">
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
