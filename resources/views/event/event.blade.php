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
        <main class="h-full flex justify-center items-center flex-col px-5 lg:w-amna-app ">
            <div class="min-h-[50rem] flex flex-col py-4 lg:w-amna-content md:w-amna-app-md">
                <h2 class="text-3xl lg:text-4xl font-bold text-[#010360] ">Últimos Eventos</h2>
                <x-event.event title="Aniversário" description="Festa de aniversário com amigos" startDate="15-08-2025" endDate="15-08-2025" link="{{ route('event.show', ['id' => 1]) }}"/>
                <x-event.event title="Reunião de Trabalho" description="Reunião semanal da equipe" startDate="20-02-2025" endDate="20-02-2025" link="{{ route('event.show', ['id' => 2]) }}"/>
                <x-event.event title="Workshop de Laravel" description="Oficina prática sobre desenvolvimento com Laravel" startDate="05-03-2025" endDate="05-03-2025" link="{{ route('event.show', ['id' => 3]) }}"/>
                <x-event.event title="Treino de Apneia" description="Sessão de treino de apneia em piscina" startDate="12-04-2025" endDate="12-04-2025" link="{{ route('event.show', ['id' => 4]) }}"/>
                <x-event.event title="Lançamento de Projeto" description="Apresentação do projeto final aos stakeholders" startDate="30-05-2025" endDate="30-05-2025" link="{{ route('event.show', ['id' => 5]) }}"/>
            </div>
        </main>
        <x-footer/>
    </body>
</html> 