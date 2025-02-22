<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMNA</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="w-full h-full flex justify-between items-center flex-col bg-gray-100">
        <x-header/>
        <main class="w-full h-screen px-5 text-black flex justify-start items-center flex-col lg:w-amna-app ">
            <div class="w-full bg-white my-6 p-5 rounded-[0.625rem] lg:w-amna-content">
                <h2 class="text-3xl lg:text-4xl font-bold text-[#010360] pb-4">Sobre Nós:</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, dolorum perspiciatis voluptate soluta tempora corrupti sapiente odit! Perferendis, rem cupiditate facere recusandae necessitatibus cum consequuntur officiis ducimus tenetur sit quae?</p>
            </div>
        </main>
        <x-footer/>
    </body>
</html>