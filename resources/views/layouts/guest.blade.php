<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ManitoDex') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col bg-gray-100 dark:bg-gray-900">
        <header class="flex justify-between items-center p-4 bg-white dark:bg-gray-800 shadow-md">
            <a href="/" class="group font-bold text-3xl flex items-center space-x-4 hover:text-emerald-600 transition">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                <span>ManitoDex</span>
            </a>
            <nav class="nav-links flex space-x-4">
                <a class="font-bold hover:text-emerald-600 transition" href="/"></a>
                <a href="{{ route('pokemon.create') }}"
                   class="text-gray-700 font-bold py-2 px-4 rounded bg-gray-100 hover:bg-gray-200 transition">Ajouter un Pokémon</a>
                <a href="{{ route('front.attackuser.index') }}"
                   class="text-gray-700 font-bold py-2 px-4 rounded bg-gray-100 hover:bg-gray-200 transition">Voir la liste des attaques</a>
                <a href="{{ route('front.typeuser.index') }}"
                   class="text-gray-700 font-bold py-2 px-4 rounded bg-gray-100 hover:bg-gray-200 transition">Voir la liste des types</a>
            </nav>
        </header>
        <main class="flex-grow">
            <div class="container mx-auto p-4">
                {{ $slot }}
            </div>
        </main>
        <footer class="bg-white dark:bg-gray-800 text-center p-4">
            © {{ date('Y') }} ManitoDex. Tous droits réservés.
        </footer>
    </div>
</body>
</html>
