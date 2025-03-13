<nav class="bg-white transition-all duration-500 ease-in-out" x-data="{ isSticky: false, isOpen: false }"
    :class="{ 'fixed top-0 w-full shadow-md z-50 backdrop-blur-md bg-white/50': isSticky }" x-init="window.addEventListener('scroll', () => { isSticky = window.scrollY > 250 })">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="w-18 h-16" src="image/SMILE-LOGO.svg" alt="SMILE">
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 ">
                    <!-- Ikon Sosial Media -->
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6 space-x-4">
                            <!-- WhatsApp -->
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-gray-600 hover:border-green-500 transition">
                                <i class="fab fa-whatsapp text-gray-600 hover:text-green-500 text-lg"></i>
                            </a>

                            <!-- Instagram -->
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-gray-600 hover:border-pink-500 transition">
                                <i class="fab fa-instagram text-gray-600 hover:text-pink-500 text-lg"></i>
                            </a>

                            <!-- TikTok -->
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-gray-600 hover:border-black transition">
                                <i class="fab fa-tiktok text-gray-600 hover:text-black text-lg"></i>
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div x-data="{
                                isOpen: false,
                                selectedImage: '{{ $pengguna->foto_profil ?? 'https://via.placeholder.com/40' }}',
                                isEditing: false,
                                formData: {
                                    berat_badan: '{{ $pengguna->berat_badan ?? '' }}',
                                    tinggi_badan: '{{ $pengguna->tinggi_badan ?? '' }}',
                                    penyakit_genetik: '{{ $pengguna->penyakit_genetik ?? '' }}',
                                    alamat: '{{ $pengguna->alamat ?? '' }}'
                                }
                            }" class="relative">
                    
                            <!-- Nama Pengguna & Foto Profil -->
                            <button @click="isOpen = !isOpen" class="focus:outline-none flex items-center space-x-4 ml-20">
                                <div class="text-black font-medium">
                                    {{ $pengguna->nama_lengkap ?? 'Pengguna' }}
                                </div>
                                <div class="h-8 w-px bg-gray-300"></div>
                                <img :src="selectedImage" alt="Foto Profil" class="w-10 h-10 rounded-full border border-gray-300 cursor-pointer">
                            </button>
                    
                            <!-- Dropdown Profil -->
                            <div x-show="isOpen" @click.away="isOpen = false"
                                class="absolute left-1/2 top-full mt-2 w-72 bg-white rounded-md border border-gray-200 z-50 p-4 transform -translate-x-1/2 shadow-md"
                                x-cloak>
                    
                                <!-- Mode Tampilan -->
                                <div x-show="!isEditing">
                                    <p class="text-black font-medium">Email: {{ $pengguna->email ?? '-' }}</p>
                                    <p class="text-black font-medium">Nomor Telepon: {{ $pengguna->nomor_hp ?? '-' }}</p>
                                    <p class="text-black font-medium">Berat Badan: <span x-text="formData.berat_badan"></span> kg</p>
                                    <p class="text-black font-medium">Tinggi Badan: <span x-text="formData.tinggi_badan"></span> cm</p>
                                    <p class="text-black font-medium">Penyakit Genetik: <span x-text="formData.penyakit_genetik"></span></p>
                                    <p class="text-black font-medium">Alamat: <span x-text="formData.alamat"></span></p>
                                    <button @click="isEditing = true"
                                        class="mt-3 w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md">
                                        Edit Profil
                                    </button>
                                </div>
                    
                                <!-- Mode Edit -->
                                <form x-show="isEditing" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH') <!-- Ubah PUT menjadi PATCH -->
                    
                                    <!-- Input Data Pribadi -->
                                    <div class="mb-2">
                                        <label class="text-gray-600 text-sm">Berat Badan (kg):</label>
                                        <input type="number" x-model="formData.berat_badan" name="berat_badan"
                                            class="w-full border rounded-md px-2 py-1 text-black">
                                    </div>
                    
                                    <div class="mb-2">
                                        <label class="text-gray-600 text-sm">Tinggi Badan (cm):</label>
                                        <input type="number" x-model="formData.tinggi_badan" name="tinggi_badan"
                                            class="w-full border rounded-md px-2 py-1 text-black">
                                    </div>
                    
                                    <div class="mb-2">
                                        <label class="text-gray-600 text-sm">Penyakit Genetik:</label>
                                        <input type="text" x-model="formData.penyakit_genetik" name="penyakit_genetik"
                                            class="w-full border rounded-md px-2 py-1 text-black">
                                    </div>
                    
                                    <!-- Alamat -->
                                    <div class="mb-2">
                                        <label class="text-gray-600 text-sm">Alamat:</label>
                                        <textarea x-model="formData.alamat" name="alamat" class="w-full border rounded-md px-2 py-1 text-black"></textarea>
                                    </div>
                    
                                    <!-- Tambah Foto Profil -->
                                    <div class="mb-2 text-center">
                                        <label class="cursor-pointer bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                                            Pilih Foto
                                            <input type="file" name="foto_profil" class="hidden"
                                                @change="
                                                let file = $event.target.files[0]; 
                                                if (file) { 
                                                    let reader = new FileReader(); 
                                                    reader.onload = e => selectedImage = e.target.result; 
                                                    reader.readAsDataURL(file); 
                                                }
                                            ">
                                        </label>
                                    </div>
                    
                                    <!-- Tombol Simpan -->
                                    <button type="submit"
                                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-md">
                                        Simpan
                                    </button>
                    
                                    <button type="button" @click="isEditing = false"
                                        class="w-full bg-gray-400 hover:bg-gray-500 text-white font-semibold px-4 py-2 rounded-md mt-2">
                                        Batal
                                    </button>
                                </form>
                    
                                <!-- Tombol Logout -->
                                <div class="mt-4">
                                    <form action="{{ route('keluar') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-md">
                                            Keluar
                                        </button>
                                    </form>
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
