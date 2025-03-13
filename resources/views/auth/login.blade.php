<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img src="{{ asset('image/SMILE LOGO.png') }}" alt="Smile logo" class="mx-auto h-10 w-auto mt-20">
        <h2 class="mt-5 text-center text-2xl font-bold tracking-tight text-gray-900">MASUK</h2>
    </div>
  
    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm border border-gray-300 rounded-lg shadow-md p-6 bg-white">
        <form class="space-y-6" action="{{ route('adminLogin') }}" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                <div class="mt-2">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus 
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 
                        placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600 sm:text-sm">
                </div>
            </div>
            
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input type="password" name="password" id="password" required 
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 
                        placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600 sm:text-sm">
                </div>
                <div class="text-sm">
                    <a href="#" class="font-semibold text-red-600 hover:text-indigo-500">Lupa kata sandi?</a>
                </div>
            </div>
        
            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm font-semibold 
                    text-white shadow-xs hover:bg-gray-800">Masuk</button>
            </div>
    
            <!-- Teks "Belum punya akun?" di bawah tombol Masuk -->
            <div class="mt-3 text-center text-sm text-gray-700">
                Belum punya akun? 
                <a href="registrasiAdmin" class="font-semibold text-black hover:text-indigo-500">Daftar</a>
            </div>
        </form>
    

        @if (session('error'))
            <div class="text-red-500 text-sm mt-2">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>

</body>
</html>
