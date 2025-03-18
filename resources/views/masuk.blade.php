<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css" /> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Masuk</title>
</head>

<body class="h-full">
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
                <h3 class="mt-2 text-center tracking-tight text-gray-600">Selamat datang di <b>Smile!</b><br> Masuk
                    sekarang untuk menikmati layanan kesehatan gigi terbaik dan berbagai kemudahan dalam merawat senyum
                    Anda.</h3>
            </div>

            <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
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
                      <div class="text-right mt-1">
                          <a href="{{ route('password.request') }}" class="text-sm text-black ">
                              Lupa Kata Sandi?
                          </a>
                      </div>
                  </div>                  

                    <div>
                        <button type="submit" class="w-full bg-blue-500 text-white px-3 py-1.5 rounded-md transition duration-300 transform hover:scale-105 hover:bg-blue-600">Masuk</button>
                    </div>

                    @if ($errors->has('login'))
                        <p class="text-red-500">{{ $errors->first('login') }}</p>
                    @endif
                </form>
                @if (session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: "{{ session('success') }}",
                            showConfirmButton: false,
                            timer: 2000 // Popup tampil selama 2 detik
                        });

                        // Redirect setelah 2 detik
                        setTimeout(function() {
                            window.location.href = "{{ route('beranda') }}";
                        }, 2000);
                    </script>
                @endif

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


                <p class="mt-10 text-center text-sm/6 text-gray-500">
                    Belum punya akun?
                    <a href="/daftar" class="font-semibold text-black hover:text-blue-500">Daftar Sekarang!</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
