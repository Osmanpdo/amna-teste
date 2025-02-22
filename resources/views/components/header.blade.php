<header class="w-full flex justify-center items-center flex-col bg-amna-primary text-white border-gray-300 border-b shadow-md">
    <div class="py-6">
        <a class="lg:text-7xl text-2xl font-serif w-full flex justify-start items-center text-black px-7" href="{{ route('welcome') }}">
            <img class="lg:h-amna-logo h-6" src="{{ asset('logo.png') }}" alt="Logo da associação">
            AMNA
        </a>
    </div>
    <nav class="p-1 w-full flex justify-center bg-amna-primary-100">
        <div class="flex justify-start items-center gap-6">
            <a href="{{ route('welcome') }}" class="text-base p-2 hover:text-blue-400 hover:scale-110 transition-all">INÍCIO</a>
            <a href="{{ route('event') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">EVENTOS</a>
            <a href="{{ route('news') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">NOTÍCIAS</a>
            <a href="{{ route('about') }}" class="p-2 hover:text-blue-400 hover:scale-110 transition-all">SOBRE</a>
        </div>
    </nav>
</header>

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