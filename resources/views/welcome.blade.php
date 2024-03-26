<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-cover bg-center" style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
<div class="relative sm:flex sm:flex-col sm:justify-center sm:items-center min-h-screen">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-200 hover:text-gray-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 px-4 py-2 rounded shadow">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="bg-custom2 font-semibold text-white hover:text-gray-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 px-4 py-2 rounded shadow">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-custom2 font-semibold text-white hover:text-gray-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 px-4 py-2 rounded shadow ml-4">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
</body>
</html>
