<div class="bg-white flex flex-col my-4 p-4 rounded-md shadow-md transition-all duration-200 hover:bg-gray-200 cursor-pointer">
    <header>
        <h2 class="text-lg font-bold">{{ $title ?? 'Notícia Sem Título' }}</h2>
        <p class="">{{ $content ?? 'Sem contéudo disponível.' }}</p>
    </header>

    <div class="mt-2 ">
        <p>
            <time datetime="{{ $publicationDate }}">Data de publicação: {{ $publicationDate }}</time> 
        </p>
    </div>

    <footer class="mt-3">  
        <p>Autor: {{$author}}</p>
    </footer>
</div>
