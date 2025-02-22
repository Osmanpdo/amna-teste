    @extends('layouts.app')

    @section('content')
        <div class="flex justify-center items-center mt-4">
            <div class="bg-white py-4 w-[400px] shadow-2xl rounded-md transition-all duration-200">
                <div class="h-full w-full">
                    <div class="px-7 w-full">
                        <form class="flex justify-start items-start flex-col" action="" method="post">
                            @csrf
                            <div class="w-full py-2">
                                <label for="title">Título:</label>
                                <input class="bg-white py-2 px-4 w-full border border-black rounded"
                                    placeholder="Título da notícia" type="text" name="title" required>
                            </div>
                            <div class="w-full py-2">
                                <label for="content">Conteúdo:</label>
                                <textarea class="bg-white py-2 px-4 w-full border border-black rounded" placeholder="Conteúdo da notícia"
                                    name="content" required></textarea>
                            </div>
                            <div class="w-full py-2">
                                <label for="publication_date">Data de Publicação:</label>
                                <input class="bg-white py-2 px-4 w-full border border-black rounded" type="date"
                                    name="publication_date" required>
                            </div>
                            <div class="w-full py-2">
                                <label for="author_id">Autor:</label>
                                <select class="bg-white py-2 px-4 w-full border border-black rounded" name="author_id">
                                    <option value="">Selecione o autor</option>
                                    <!-- Aqui você pode adicionar opções de autores -->
                                    <option value="1">Autor 1</option>
                                    <option value="2">Autor 2</option>
                                    <!-- Adicione mais opções conforme necessário -->
                                </select>
                            </div>
                            <div class="w-full flex justify-start flex-col">
                                <input
                                    class="bg-amna-terciary-600 hover:bg-amna-terciary-500 text-white text-center font-semibold py-1 px-3 my-4 border rounded transition duration-300"
                                    type="submit" value="Criar Notícia">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection