<div class="flex flex-col py-2">
    <header>
        <h2 class="text-lg font-bold"></h2>
        <a class="text-blue-400 hover:text-blue-300 underline transition" href="{{ $link }}">{{ $title ?? 'Evento Sem Título' }}</a>
    </header>

    <div class="mt-2">
        <p class="text-base font-bold">
            <time datetime="{{ $startDate }}">Começa: {{ $startDate }}</time> 
            — 
            <time datetime="{{ $endDate }}">Termina: {{ $endDate }}</time>
        </p>
    </div>
</div>