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
    <body class="w-full h-full flex justify-center items-center flex-col bg-gray-100">
        <x-header/>
        <main class="lg:w-amna-app w-full h-full text-black flex justify-center items-center flex-col">
            <div class="mt-4">
                <x-carousel/>
            </div>
            <div class="w-full text-justify my-1 px-5 flex flex-col justify-between lg:flex-row md:flex-col lg:my-6 lg:px-0 lg:w-amna-app md:w-amna-app-md ">
                <div class="w-full h-full bg-white my-6 p-5 rounded-[0.625rem] lg:w-amna-content">
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#010360] pb-4">Bem Vindo a AMNA</h2>
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
                <div class="flex flex-col w-full lg:w-[31.25rem] md:w-full">
                    <div class="bg-white my-1 p-5 rounded-[0.625rem] lg:my-6">
                            <h2 class="text-3xl lg:text-4xl font-bold text-[#010360] ">Últimos Eventos</h2>
                            <x-event.event_realise title="Aniversário" description="Festa de aniversário com amigos" startDate="15-08-2025" endDate="15-08-2025" link="{{ route('event.show', ['id' => 1]) }}"/>
                            <x-event.event_realise title="Reunião de Trabalho" description="Reunião semanal da equipe" startDate="20-02-2025" endDate="20-02-2025" link="{{ route('event.show', ['id' => 2]) }}"/>
                            <x-event.event_realise title="Workshop de Laravel" description="Oficina prática sobre desenvolvimento com Laravel" startDate="05-03-2025" endDate="05-03-2025" link="{{ route('event.show', ['id' => 3]) }}"/>
                    </div>
                    <div class="bg-white my-6 p-5 rounded-[0.625rem]">
                        <h2 class="text-3xl lg:text-4xl font-bold text-[#010360]">Últimas Notícias</h2>
                        
                        <x-news.news_realise 
                        title="Tecnologia 6G promete revolucionar a comunicação" 
                        content="Pesquisadores afirmam que a rede 6G trará velocidades até 100 vezes superiores ao 5G, impulsionando inovações como realidade aumentada e veículos autônomos." 
                        publicationDate="2025-02-18" 
                        author="Ana Oliveira" 
                        />
                    

                        <x-news.news_realise
                        title="Novo filme de ficção científica lidera bilheterias" 
                        content="O longa 'Estrelas do Amanhã' arrecadou mais de 150 milhões no fim de semana de estreia, encantando o público com seus efeitos visuais impressionantes." 
                        publicationDate="2025-02-17" 
                        author="Carlos Mendes" 
                        />
                    

                        <x-news.news_realise 
                        title="Brasil anuncia plano de energia 100% renovável até 2040" 
                        content="O governo revelou investimentos bilionários em energia solar e eólica, com o objetivo de reduzir as emissões de carbono e incentivar práticas sustentáveis." 
                        publicationDate="2025-02-16" 
                        author="Fernanda Costa" 
                        />
                        
                    </div>
                </div>
            </div>
        </main>
        <x-footer/>
    </body>
</html>