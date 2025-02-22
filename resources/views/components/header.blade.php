{{-- <header class="w-full flex justify-center items-center flex-col bg-amna-primary text-white border-gray-300 border-b shadow-md">
    <div class="py-6">
        <a class="text-7xl font-serif w-full flex justify-start items-center text-black px-7" href="{{ route('welcome') }}">
            <img class="h-amna-logo" src="{{ asset('logo.png') }}" alt="Logo da associação">
            AMNA
        </a>
    </div>
    <nav class="p-1 w-full flex justify-center bg-amna-primary-100" id="nav">
        <div class="flex justify-start items-center gap-6">
            <a href="{{ route('welcome') }}" class="text-base p-2 hover:text-blue-400 hover:scale-110 transition-all">INÍCIO</a>
            <a href="{{ route('event') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">EVENTOS</a>
            <a href="{{ route('news') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">NOTÍCIAS</a>
            <a href="{{ route('about') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">SOBRE</a>
        </div>
    </nav>
</header> --}}

<header class="w-full flex flex-col bg-white text-white border-gray-300 border-b shadow-md relative">
    <!-- Cabeçalho com logo e botão do menu -->
    <div class="flex items-center justify-between py-6 px-7 w-full lg:justify-center md:justify-center">
        <a class="text-7xl font-serif flex items-center text-black" href="{{ route('welcome') }}">
            <img class="h-amna-logo" src="{{ asset('logo.png') }}" alt="Logo da associação">
            AMNA
        </a>
        <!-- Botão só visível no mobile -->
        <button id="mobile-menu-button" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    
    <!-- Navbar para desktop -->
    <nav class="hidden md:flex justify-center bg-amna-primary-100 p-1" id="nav-desktop">
        <a href="{{ route('welcome') }}" class="text-base p-2 hover:text-blue-400 hover:scale-110 transition-all">INÍCIO</a>
        <a href="{{ route('event') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">EVENTOS</a>
        <a href="{{ route('news') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">NOTÍCIAS</a>
        <a href="{{ route('about') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">SOBRE</a>
    </nav>
    
    <!-- Navbar para mobile (inicialmente escondida) -->
    <nav class="md:hidden hidden flex-col bg-amna-primary-100 p-1" id="mobile-nav">
        <a href="{{ route('welcome') }}" class="text-base block p-2 hover:text-blue-400 hover:scale-105 transition-all">INÍCIO</a>
        <a href="{{ route('event') }}" class="block p-2 hover:text-blue-400 hover:scale-105 transition-all">EVENTOS</a>
        <a href="{{ route('news') }}" class="block p-2 hover:text-blue-400 hover:scale-105 transition-all">NOTÍCIAS</a>
        <a href="{{ route('about') }}" class="block p-2 hover:text-blue-400 hover:scale-105 transition-all">SOBRE</a>
    </nav>
</header>

<!-- Script para alternar a exibição do menu mobile -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-nav').classList.toggle('hidden');
    });
</script>



        {{-- <div class="flex justify-start items-center">
            @if (true)
            <a
                href="{{ route('login') }}"
                class="bg-amna-terciary-600 hover:bg-amna-terciary-500 text-white font-semibold py-2 px-4 border rounded shadow-md transition duration-300 mx-2"
            >
                ACESSAR
            </a>
            <a
                href="{{ route('register') }}"
                class="bg-gray-200 hover:bg-gray-300 text-black  font-semibold py-2 px-4 border rounded shadow-md transition duration-300"
            >
                CADASTRAR
            </a>
            @else
            <a
                href="{{ route('dashboard') }}"
                class="bg-white hover:bg-slate-400 text-black font-semibold py-2 px-4 rounded transition duration-300"
            >
                Painel de controle
            </a>
            @endif
        </div>  --}}