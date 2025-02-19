<div class="bg-white flex flex-col my-4 p-8 rounded-lg shadow-lg transition-all duration-200 hover:bg-gray-200 hover:scale-105 border-2 border-gray-300" style="font-size: 1.2em;">
    <header>
        <h2 class="text-lg font-bold">{{ $title ?? 'Evento Sem Título' }}</h2>
        <p>{{ $description ?? 'Sem descrição disponível.' }}</p>
    </header>

    <div class="mt-2">
        <p>
            <time datetime="{{ $startDate }}">Começa: {{ $startDate }}</time> 
            — 
            <time datetime="{{ $endDate }}">Termina: {{ $endDate }}</time>
        </p>
    </div>

    <footer class="mt-3">  
        <a class="text-blue-400 hover:text-blue-300 underline transition" href="{{ $link }}" target="_blank">
            Inscrever-se neste evento
        </a>
    </footer>
</div>