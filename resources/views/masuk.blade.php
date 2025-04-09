<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Masuk</title>
</head>

<body class="h-full" x-data="{ open: false }">
    <div class="flex flex-col md:flex-row h-full">
        <!-- Left side -->
        <div class="hidden md:flex md:w-1/2 items-center justify-center bg-white">
            <div class="flex flex-col items-center">
                <div class="h-40 w-40 bg-white shadow-md"
                    style="width: 545px; height: 626px; border-radius: 50px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);">
                    <img class="mt-24 mx-auto h-100 w-auto" src="image/GAMBAR MASUK.png" alt="SMILE">
                </div>
            </div>
        </div>

        <!-- Right side -->
        <div class="flex w-full md:w-1/2 flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <a href="/">
                    <img class="mx-auto h-20 w-auto" src="image/SMILE-LOGO-5.svg" alt="SMILE">
                </a>
                <h2 class="mt-5 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Masuk</h2>
                <h3 class="mt-2 text-center tracking-tight text-gray-600">
                    Selamat datang di <b>Smile!</b><br>
                    Masuk sekarang untuk menikmati layanan kesehatan gigi terbaik dan berbagai kemudahan dalam merawat senyum Anda.
                </h3>
            </div>

            <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
                <!-- FORM LOGIN -->
                <form class="space-y-6" action="{{ route('masuk') }}" method="POST">
                    @csrf
                    <div>
                        <label for="contact" class="block text-sm font-medium text-gray-900">Nomor HP/Email</label>
                        <input type="text" name="contact" id="contact" required
                            class="block w-full rounded-md px-3 py-1.5">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-900">Kata Sandi</label>
                        <input type="password" name="password" id="password" required
                            class="block w-full rounded-md px-3 py-1.5">
                    </div>

                    <!-- Tombol Lupa Kata Sandi -->
                    <div class="text-right my-2">
                        <button type="button" @click="open = true" class="text-sm text-black">Lupa Kata Sandi?</button>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full bg-blue-500 text-white px-3 py-1.5 rounded-md transition duration-300 transform hover:scale-105 hover:bg-blue-600">Masuk</button>
                    </div>

                    @if ($errors->has('login'))
                        <p class="text-red-500">{{ $errors->first('login') }}</p>
                    @endif
                </form>
            </div>

            <!-- MODAL RESET PASSWORD -->
            <div x-show="open"
                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                <div class="bg-white p-6 rounded shadow-md w-full max-w-md" @click.outside="open = false">
                    <h2 class="text-lg font-bold mb-4">Reset Kata Sandi</h2>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
                        <div class="mt-4 flex justify-end gap-2">
                            <button type="button" @click="open = false" class="px-4 py-2 bg-gray-300 rounded">Batal</button>
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- REGISTER LINK -->
            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Belum punya akun?
                <a href="/daftar" class="font-semibold text-black hover:text-blue-500">Daftar Sekarang!</a>
            </p>
        </div>
    </div>

    <!-- SWEETALERT SUCCESS -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout(function () {
                window.location.href = "{{ route('beranda') }}";
            }, 2000);
        </script>
    @endif

    <!-- SWEETALERT ERROR -->
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
</body>

</html>
