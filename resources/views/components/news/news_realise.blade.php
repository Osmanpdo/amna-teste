<div class="flex flex-col py-2 text-base">
    <header>
        <a class="text-blue-400 hover:text-blue-300 underline transition" href="">{{ $title ?? 'Notícia Sem Título' }}</a>
    </header>

    <div class="mt-2 font-bold">
        <p>
            <time datetime="{{ $publicationDate }}">Data de publicação: {{ $publicationDate }}</time> 
        </p>
    </div>
</div>
