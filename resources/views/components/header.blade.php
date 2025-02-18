<header class="w-full flex justify-center items-center flex-col bg-amna-primary text-white border-gray-300 border-b shadow-md">
    <div class="bg-white w-full flex justify-center">
        <a href="{{ route('welcome') }}" class="p-1 "><img class="h-14" src="{{ asset('logos/amna-logo.png') }}" alt="logo da associação"></a>   
    </div>
    <nav class="py-4 w-header">

        <div class="flex justify-start items-center gap-6">
            <a href="{{ route('welcome') }}" class="p-1 hover:text-blue-400">INÍCIO</a>
            
            <a href="{{ route('event') }}" class="p-1 hover:text-blue-400">EVENTOS</a>

            <a href="{{ route('news') }}" class="p-1 hover:text-blue-400">NOTÍCIAS</a>

            <a href="{{ route('about') }}" class="p-1 hover:text-blue-400">SOBRE</a>
        </div>
        <div class="flex justify-start items-center">           
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
        </div> 
    </nav>
</header>
