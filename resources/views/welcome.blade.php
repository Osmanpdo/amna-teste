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
        @if (file_exists(public_path('build/manifest.json')) || file.exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="w-full h-full flex justify-center items-center flex-col bg-gray-100">
        <x-header/>
        <main class="w-main h-full text-black flex justify-center items-center flex-col">
            <x-carousel/>
            <div class="w-app bg-white my-6" style="padding: 20px; border: 2px solid #ccc; border-radius: 10px; background-color: #f9f9f9; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, dolorum perspiciatis voluptate soluta tempora corrupti sapiente odit! Perferendis, rem cupiditate facere recusandae necessitatibus cum consequuntur officiis ducimus tenetur sit quae?</p>

                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, asperiores obcaecati nostrum corrupti deserunt voluptas est eos officiis at, consectetur autem? Cupiditate accusantium officiis voluptates expedita necessitatibus, voluptas adipisci! Veritatis!</p>

                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores possimus perspiciatis quo perferendis voluptates, voluptatibus esse libero tenetur nemo aperiam officia debitis quos maxime ea voluptas, pariatur consequatur! Nesciunt, unde.</p>

                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, dolorum perspiciatis voluptate soluta tempora corrupti sapiente odit! Perferendis, rem cupiditate facere recusandae necessitatibus cum consequuntur officiis ducimus tenetur sit quae?</p>

                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, asperiores obcaecati nostrum corrupti deserunt voluptas est eos officiis at, consectetur autem? Cupiditate accusantium officiis voluptates expedita necessitatibus, voluptas adipisci! Veritatis!</p>

                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores possimus perspiciatis quo perferendis voluptates, voluptatibus esse libero tenetur nemo aperiam officia debitis quos maxime ea voluptas, pariatur consequatur! Nesciunt, unde.</p>

                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, dolorum perspiciatis voluptate soluta tempora corrupti sapiente odit! Perferendis, rem cupiditate facere recusandae necessitatibus cum consequuntur officiis ducimus tenetur sit quae?</p>

                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, asperiores obcaecati nostrum corrupti deserunt voluptas est eos officiis at, consectetur autem? Cupiditate accusantium officiis voluptates expedita necessitatibus, voluptas adipisci! Veritatis!</p>

                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores possimus perspiciatis quo perferendis voluptates, voluptatibus esse libero tenetur nemo aperiam officia debitis quos maxime ea voluptas, pariatur consequatur! Nesciunt, unde.</p>
            </div>
        </main>
        <x-footer/>
    </body>
</html>