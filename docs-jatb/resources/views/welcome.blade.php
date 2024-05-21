<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <!--<body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            -->
<body class="bg-gray-100 h-screen antialiased leading-none dark:bg-gray-900">
    <div class="flex justify-between items-center p-6 bg-indigo-600 text-white shadow-md ">
        <div class="text-lg font-figtree">
            <a href="{{ url('/') }}" class="text-white hover:text-gray-200">Inicio</a>
        </div>
        <div>
            <a href="{{ route('login') }}" class="text-white hover:text-gray-200">Iniciar Sesión</a>
        </div>
    </div>

    <div class="container mx-auto p-6">
        <div class="flex justify-center items-center h-screen">
            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('storage/img/isotipo.jpeg') }}" class="w-20 md:w-20 lg:w-20" alt="Isotipo">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap xs:grid xs:grid-cols-1 gap-6">
            <div class="w-full sm:w-1/3 p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Opción 1</h2>
                <p class="text-gray-600">Descripción de la opción 1.</p>
            </div>
            <div class="w-full sm:w-1/3 p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Opción 1</h2>
                <p class="text-gray-600">Descripción de la opción 1.</p>
            </div>
            <div class="w-full sm:w-1/3 p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Opción 2</h2>
                <p class="text-gray-600">Descripción de la opción 2.</p>
            </div>
        </div>
    </div>
</body>
</html>
