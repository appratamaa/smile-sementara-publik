<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="{{ asset('image/SMILE LOGO.png') }}" alt="Smile logo" class="mx-auto h-10 w-auto mt-20">
      <h2 class="mt-5 text-center text-2xl/9 font-bold tracking-tight text-gray-900">MASUK</h2>
    </div>
  
    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm border border-gray-300 rounded-lg shadow-md p-6 bg-white">
      <form class="space-y-6" action="{{ route('adminLogin') }}" method="POST">
        @csrf
        <div>
            <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
            <div class="mt-2">
                <input type="text" name="username" id="username" value="{{old('username')}}" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
        </div>
    
        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
            </div>
            <div class="mt-2">
                <input type="password" name="password" id="password" value="{{old('password')}}" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            <div class="text-sm">
                <a href="#" class="font-semibold text-red-600 hover:text-indigo-500">Lupa kata sandi?</a>
            </div>
        </div>
    
        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
    </form>
  
    </div>
  </div>
  

</body>
</html>