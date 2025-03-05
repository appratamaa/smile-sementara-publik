<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#06c1db">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>SMILE - Chat dengan Dokter</title>
</head>

<body class="h-ful items-center bg-white">
    <div class="min-h-full">
        <!-- Navbar -->
        <x-navbar></x-navbar>

        <!-- Hero Section -->
        <header class="w-full  text-black p-8 text-center">
            <h2 class="text-3xl font-bold">Perawatan Gigi Terbaik untuk Senyuman Anda</h2>
            <p class="mt-2">Layanan profesional dengan dokter terpercaya.</p>
        </header>

        <!-- Informasi Klinik -->
        <main class="w-full max-w-4xl p-6 space-y-6">
            <!-- Tentang Klinik -->
            <section class="bg-white p-6 shadow rounded-lg">
                <h3 class="text-xl font-semibold">Tentang Kami</h3>
                <p class="mt-2">Klinik Gigi SMILE menyediakan berbagai layanan kesehatan gigi dengan tenaga medis
                    berpengalaman.</p>
                <ul class="list-disc mt-2 pl-5">
                    <li>Pembersihan gigi & scaling</li>
                    <li>Perawatan ortodonti (behel)</li>
                    <li>Penambalan & pencabutan gigi</li>
                    <li>Implan gigi & gigi tiruan</li>
                </ul>
            </section>

            <!-- Jam Operasional -->
            <section class="bg-white p-6 shadow rounded-lg">
                <h3 class="text-xl font-semibold">Jam Operasional</h3>
                <p class="mt-2">Kami siap melayani Anda:</p>
                <ul class="mt-2">
                    <li>🕘 Senin - Jumat: 08.00 - 17.00 WIB</li>
                    <li>🕘 Sabtu: 08.00 - 13.00 WIB</li>
                    <li>❌ Minggu & Hari Libur: Tutup</li>
                </ul>
            </section>

            <!-- Lokasi -->
            <section class="bg-white p-6 shadow rounded-lg">
                <h3 class="text-xl font-semibold">Lokasi Kami</h3>
                <p class="mt-2">📍 Jl. Sehat No. 123, Jakarta, Indonesia</p>
                <iframe class="w-full h-48 mt-3 rounded-lg" src="https://www.google.com/maps/embed?..."
                    allowfullscreen></iframe>
            </section>

            <!-- Kontak -->
            <section id="kontak" class="bg-white p-6 shadow rounded-lg">
                <h3 class="text-xl font-semibold">Hubungi Kami</h3>
                <p class="mt-2">📞 <strong>Telepon:</strong> <a href="tel:+622112345678" class="text-blue-500">+62 21
                        1234 5678</a></p>
                <p>📱 <strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890" class="text-blue-500">+62 812
                        3456 7890</a></p>
                <p>📧 <strong>Email:</strong> <a href="mailto:info@smileklinik.com"
                        class="text-blue-500">info@smileklinik.com</a></p>
            </section>
        </main>

        <!-- Tombol Chat -->
        <button onclick="toggleChat()"
            class="fixed bottom-5 right-5 bg-blue-500 text-white px-4 py-2 rounded-full shadow-lg flex items-center">
            <i class="fas fa-comments mr-2"></i> Chat Admin
        </button>

        <!-- Popup Chat -->
        <div id="chat-popup" class="fixed bottom-16 right-5 w-72 bg-white shadow-lg rounded-lg overflow-hidden hidden">
            <div class="bg-blue-600 p-3 text-white flex justify-between items-center">
                <h3 class="text-sm font-semibold">Chat dengan Admin</h3>
                <button onclick="toggleChat()"><i class="fas fa-times"></i></button>
            </div>

            <div class="p-3 space-y-3 h-64 overflow-y-auto bg-gray-100">
                <!-- Pesan Pasien -->
                <div class="flex items-start space-x-2">
                    <div class="bg-gray-200 text-gray-800 p-2 rounded-lg max-w-xs">
                        <p>Halo, saya ingin konsultasi.</p>
                        <span class="text-xs text-gray-500">10:30 AM</span>
                    </div>
                </div>

                <!-- Pesan Admin -->
                <div class="flex items-start space-x-2 justify-end">
                    <div class="bg-blue-500 text-white p-2 rounded-lg max-w-xs">
                        <p>Halo, apa yang bisa kami bantu?</p>
                        <span class="text-xs text-gray-200">10:32 AM</span>
                    </div>
                </div>
            </div>

            <!-- Input Chat -->
            <div class="bg-white border-t flex items-center p-2">
                <input type="text" id="chat-input" placeholder="Ketik pesan..."
                    class="flex-1 p-2 border rounded-lg focus:outline-none">
                <button onclick="sendMessage()"
                    class="ml-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
    <x-footer></x-footer>

    <!-- Script -->
    <script>
        function toggleChat() {
            let chatPopup = document.getElementById("chat-popup");
            chatPopup.classList.toggle("hidden");
        }

        function sendMessage() {
            let chatInput = document.getElementById("chat-input");
            let chatBox = document.querySelector("#chat-popup .h-64");

            if (chatInput.value.trim() !== "") {
                let newMessage = document.createElement("div");
                newMessage.classList.add("flex", "items-start", "space-x-2", "justify-end");
                newMessage.innerHTML = `
                    <div class="bg-blue-500 text-white p-2 rounded-lg max-w-xs">
                        <p>${chatInput.value}</p>
                        <span class="text-xs text-gray-200">${new Date().toLocaleTimeString()}</span>
                    </div>
                `;
                chatBox.appendChild(newMessage);
                chatBox.scrollTop = chatBox.scrollHeight;
                chatInput.value = "";
            }
        }
    </script>
</body>

</html>
