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

<body class="h-full">
    <div class="min-h-full">
        <x-navbar>

        </x-navbar>
        <div class="h-screen flex flex-col bg-white">
            <!-- Header -->
            <div class=" p-4 text-black flex items-center justify-between">
                <h2 class="text-lg font-semibold">Informasi Pembayaran</h2>
            </div>

            <!-- Konten -->
            <div class="flex-1 overflow-y-auto p-6 bg-white">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Metode Pembayaran Tersedia</h3>

                <!-- Grid Metode Pembayaran -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <!-- Transfer Bank -->
                    <div class="bg-white p-4 rounded-lg shadow flex items-center space-x-4">
                        <i class="fas fa-university text-blue-600 text-2xl"></i>
                        <div>
                            <h4 class="font-semibold text-gray-700">Transfer Bank</h4>
                            <p class="text-sm text-gray-500">BCA, Mandiri, BRI, BNI</p>
                        </div>
                    </div>

                    <!-- E-Wallet -->
                    <div class="bg-white p-4 rounded-lg shadow flex items-center space-x-4">
                        <i class="fas fa-wallet text-green-500 text-2xl"></i>
                        <div>
                            <h4 class="font-semibold text-gray-700">E-Wallet</h4>
                            <p class="text-sm text-gray-500">GoPay, OVO, Dana, ShopeePay</p>
                        </div>
                    </div>

                    <!-- Kartu Kredit -->
                    <div class="bg-white p-4 rounded-lg shadow flex items-center space-x-4">
                        <i class="fas fa-credit-card text-purple-500 text-2xl"></i>
                        <div>
                            <h4 class="font-semibold text-gray-700">Kartu Kredit/Debit</h4>
                            <p class="text-sm text-gray-500">Visa, MasterCard, JCB</p>
                        </div>
                    </div>

                    <!-- QRIS -->
                    <div class="bg-white p-4 rounded-lg shadow flex items-center space-x-4">
                        <i class="fas fa-qrcode text-red-500 text-2xl"></i>
                        <div>
                            <h4 class="font-semibold text-gray-700">QRIS</h4>
                            <p class="text-sm text-gray-500">Dapat digunakan di semua e-wallet</p>
                        </div>
                    </div>

                    <!-- Tunai -->
                    <div class="bg-white p-4 rounded-lg shadow flex items-center space-x-4">
                        <i class="fas fa-money-bill-wave text-yellow-500 text-2xl"></i>
                        <div>
                            <h4 class="font-semibold text-gray-700">Tunai</h4>
                            <p class="text-sm text-gray-500">Bayar langsung di klinik</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <h3 class="text-lg font-semibold text-gray-700 mt-8 mb-4">FAQ (Pertanyaan yang Sering Diajukan)</h3>

                <div class="bg-white p-4 rounded-lg shadow">
                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex justify-between w-full p-3 text-left font-semibold text-gray-700 hover:bg-gray-100 rounded-lg">
                            <span><i class="fas fa-question-circle text-blue-600"></i> Bagaimana cara melakukan
                                pembayaran?</span>
                            <i x-show="!open" class="fas fa-chevron-down"></i>
                            <i x-show="open" class="fas fa-chevron-up"></i>
                        </button>
                        <div x-show="open" class="p-3 text-gray-600 border-t">Anda bisa membayar melalui transfer bank,
                            e-wallet, kartu kredit, atau tunai di klinik.</div>
                    </div>

                    <div x-data="{ open: false }" class="mt-4">
                        <button @click="open = !open"
                            class="flex justify-between w-full p-3 text-left font-semibold text-gray-700 hover:bg-gray-100 rounded-lg">
                            <span><i class="fas fa-question-circle text-blue-600"></i> Apakah ada biaya tambahan?</span>
                            <i x-show="!open" class="fas fa-chevron-down"></i>
                            <i x-show="open" class="fas fa-chevron-up"></i>
                        </button>
                        <div x-show="open" class="p-3 text-gray-600 border-t">Tidak ada biaya tambahan untuk pembayaran
                            melalui transfer bank atau e-wallet.</div>
                    </div>

                    <div x-data="{ open: false }" class="mt-4">
                        <button @click="open = !open"
                            class="flex justify-between w-full p-3 text-left font-semibold text-gray-700 hover:bg-gray-100 rounded-lg">
                            <span><i class="fas fa-question-circle text-blue-600"></i> Apakah pembayaran bisa
                                dicicil?</span>
                            <i x-show="!open" class="fas fa-chevron-down"></i>
                            <i x-show="open" class="fas fa-chevron-up"></i>
                        </button>
                        <div x-show="open" class="p-3 text-gray-600 border-t">Cicilan hanya tersedia untuk pembayaran
                            dengan kartu kredit.</div>
                    </div>

                    <div x-data="{ open: false }" class="mt-4">
                        <button @click="open = !open"
                            class="flex justify-between w-full p-3 text-left font-semibold text-gray-700 hover:bg-gray-100 rounded-lg">
                            <span><i class="fas fa-question-circle text-blue-600"></i> Bagaimana jika pembayaran saya
                                gagal?</span>
                            <i x-show="!open" class="fas fa-chevron-down"></i>
                            <i x-show="open" class="fas fa-chevron-up"></i>
                        </button>
                        <div x-show="open" class="p-3 text-gray-600 border-t">Silakan hubungi layanan pelanggan kami
                            untuk bantuan lebih lanjut.</div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
</body>

</html>
