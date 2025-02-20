@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="relative">
                <img src="https://angloitatiba.com.br/assets/img/topo/noticia-topo.png" alt="Imagem da Notícia" class="w-full h-64 object-cover">
                <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4">
                    <h1 class="text-3xl font-bold">{{ $news['title'] }}</h1>
                    <p class="text-sm">Por {{ $news['author'] }} | {{ $news['date'] }}</p>
                </div>
            </div>
            <div class="p-6">
                <p class="text-gray-700 mb-4">{{ $news['description'] }}</p>
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <h2 class="text-2xl font-bold mb-2">Empresária Natalia Valente Lanza Nova Coleção de Moda e Gera
                        Repercussão na Web</h2>
                    <p class="text-gray-700 mb-2">
                        A influenciadora digital e empresária Natalia Valente apresentou, nesta terça-feira, sua mais nova
                        coleção de moda, batizada de "Eterna Elegância". O evento de lançamento, realizado em um luxuoso
                        hotel na capital paulista, reuniu celebridades, fashionistas e jornalistas especializados,
                        consolidando a influenciadora como um dos grandes nomes do setor.
                    </p>
                    <p class="text-gray-700 mb-2">
                        A coleção aposta em tecidos sofisticados, cortes modernos e uma paleta de cores inspirada nas
                        tendências internacionais. "Quero trazer para o público peças que representem força, confiança e
                        estilo. A moda é uma forma de expressão, e minha intenção é que cada pessoa se sinta especial usando
                        minhas criações", declarou Natalia durante o evento.
                    </p>
                    <p class="text-gray-700 mb-2">
                        A repercussão nas redes sociais foi imediata. A hashtag #EternaElegancia rapidamente se tornou um
                        dos assuntos mais comentados no X (antigo Twitter) e no Instagram, com fãs e especialistas elogiando
                        o refinamento das peças e a estratégia de marketing adotada pela empresária.
                    </p>
                    <p class="text-gray-700 mb-2">
                        A influenciadora, que já acumula milhões de seguidores, também aproveitou a oportunidade para
                        reforçar sua intenção de expandir sua marca internacionalmente. "Estamos dando um passo muito
                        importante. Meu objetivo é levar a moda brasileira para o mundo", afirmou Natalia.
                    </p>
                    <p class="text-gray-700 mb-2">
                        Com vendas online já disponíveis e uma aceitação positiva do público, a nova coleção promete ser um
                        sucesso e consolidar ainda mais o nome de Natalia Valente no mercado fashion.
                    </p>
                </div>
                <p class="text-gray-700">Fonte: <strong>{{ $news['source'] }}</strong></p>
            </div>
        </div>
    </div>
@endsection
