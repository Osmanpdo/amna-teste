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
    <x-header />
    <main class="w-main h-full text-black flex justify-center items-center flex-col">
        <div class="py-4 w-app">
            <h1 class="text-xl font-bold">Últimas Notícias</h1>
            <a href="{{ route('news.show', ['id' => 1]) }}">
                <x-news.news title="Tecnologia 6G promete revolucionar a comunicação"
                    content="Pesquisadores afirmam que a rede 6G trará velocidades até 100 vezes superiores ao 5G, impulsionando inovações como realidade aumentada e veículos autônomos."
                    publicationDate="2025-02-18" author="Ana Oliveira" />
            </a>

            <a href="{{ route('news.show', ['id' => 2]) }}">
                <x-news.news title="Novo filme de ficção científica lidera bilheterias"
                    content="O longa 'Estrelas do Amanhã' arrecadou mais de 150 milhões no fim de semana de estreia, encantando o público com seus efeitos visuais impressionantes."
                    publicationDate="2025-02-17" author="Carlos Mendes" />
            </a>

            <a href="{{ route('news.show', ['id' => 3]) }}">
                <x-news.news title="Brasil anuncia plano de energia 100% renovável até 2040"
                    content="O governo revelou investimentos bilionários em energia solar e eólica, com o objetivo de reduzir as emissões de carbono e incentivar práticas sustentáveis."
                    publicationDate="2025-02-16" author="Fernanda Costa" />
            </a>

            <a href="{{ route('news.show', ['id' => 4]) }}">
                <x-news.news title="Cientistas descobrem exoplaneta potencialmente habitável"
                    content="Astrônomos identificaram um planeta a 120 anos-luz da Terra com condições que podem sustentar vida, aumentando as esperanças de futuras explorações espaciais."
                    publicationDate="2025-02-15" author="Roberto Lima" />
            </a>

            <a href="{{ route('news.show', ['id' => 5]) }}">
                <x-news.news title="Nova atualização do Laravel melhora performance"
                    content="A versão mais recente do framework Laravel traz melhorias de desempenho e novas ferramentas para facilitar a criação de APIs robustas."
                    publicationDate="2025-02-14" author="Mariana Souza" />
            </a>
        </div>
    </main>
</body>

</html>
