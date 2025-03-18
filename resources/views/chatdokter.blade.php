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
    <style>
        .inner-shadow {
            box-shadow: inset 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        .custom-shadow {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            /* Anda bisa menyesuaikan nilai-nilai di atas untuk intensitas dan arah bayangan */
        }
    </style>
</head>

<body class="h-full items-center bg-white">
    <div class="min-h-full bg-white"> <!-- Tambahkan bg-white di sini -->
        <!-- Navbar -->
        <x-navbar></x-navbar>

        <!-- Hero Section -->
        <header class="w-full text-black p-8 text-center">
            <h2 class="text-3xl font-bold">Perawatan Gigi Terbaik untuk Senyuman Anda</h2>
            <p class="mt-2">Layanan profesional dengan dokter terpercaya.</p>
        </header>

        <main
            class="w-full max-w-4xl px-4 py-6 space-y-6 mx-auto min-h-screen flex flex-col items-center justify-center">
            <!-- Tentang Klinik -->
            <section class="bg-white p-6 rounded-lg w-full custom-shadow">
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
            <section class="bg-white p-6 rounded-lg w-full custom-shadow">
                <h3 class="text-xl font-semibold">Jam Operasional</h3>
                <p class="mt-2">Kami siap melayani Anda:</p>
                <ul class="mt-2">
                    <li>🕘 Senin - Jumat: 08.00 - 17.00 WIB</li>
                    <li>🕘 Sabtu: 08.00 - 13.00 WIB</li>
                    <li>❌ Minggu & Hari Libur: Tutup</li>
                </ul>
            </section>

            <!-- Lokasi -->
            <section class="bg-white p-6 rounded-lg w-full custom-shadow ">
                <h3 class="text-xl font-semibold">Lokasi Kami</h3>
                <p class="mt-2">📍 KLINIK dr.Robert <br> Jl. Kb. Salak No.38, Kondangjajar, Kec. Cijulang, Kab.
                    Pangandaran, Jawa Barat 46394</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.6445398030396!2d108.46939507562708!3d-7.721233656617441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65bf145166d999%3A0x8b2fda918a2d79bd!2sKLINIK%20dr.Robert!5e0!3m2!1sen!2sid!4v1741582527100!5m2!1sen!2sid"
                    width="615" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </section>

            <!-- Kontak -->
            <section id="kontak" class="bg-white p-6 rounded-lg w-full custom-shadow">
                <h3 class="text-xl font-semibold">Hubungi Kami</h3>
                <p class="mt-2">📞 <strong>Telepon:</strong> <a href="tel:+622112345678" class="text-blue-500">+62 21
                        1234 5678</a></p>
                <p>📱 <strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890" class="text-blue-500">+62 812
                        3456 7890</a></p>
                <p>📧 <strong>Email:</strong> <a href="mailto:info@smileklinik.com"
                        class="text-blue-500">info@smileklinik.com</a></p>
            </section>
        </main>



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
    </div>
</body>

</html>
