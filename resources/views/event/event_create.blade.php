<!-- filepath: /home/marcus/cuscus/amna-teste/resources/views/event/event_create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center mt-4">

        <body class="w-full h-full flex justify-center items-center flex-col">
            <div class="bg-white py-4 w-[400px] shadow-2xl rounded-md transition-all duration-200">
                <div class="h-full w-full">
                    <div class="px-7 w-full">
                        <form class="flex justify-start items-start flex-col" action="" method="post">
                            @csrf
                            <div class="w-full py-2">
                                <label for="title">Título:</label>
                                <input class="bg-white py-2 px-4 w-full border border-black rounded" placeholder="Título do evento" type="text" name="title" required>
                            </div>
                            <div class="w-full py-2">
                                <label for="description">Descrição:</label>
                                <textarea class="bg-white py-2 px-4 w-full border border-black rounded" placeholder="Descrição do evento" name="description" required></textarea>
                            </div>
                            <div class="w-full py-2">
                                <label for="start_date">Data de Início:</label>
                                <input class="bg-white py-2 px-4 w-full border border-black rounded" type="date" name="start_date" required>
                            </div>
                            <div class="w-full py-2">
                                <label for="start_time">Hora de Início:</label>
                                <input class="bg-white py-2 px-4 w-full border border-black rounded" type="time" name="start_time" required>
                            </div>
                            <div class="w-full py-2">
                                <label for="end_date">Data de Término:</label>
                                <input class="bg-white py-2 px-4 w-full border border-black rounded" type="date" name="end_date" required>
                            </div>
                            <div class="w-full py-2">
                                <label for="end_time">Hora de Término:</label>
                                <input class="bg-white py-2 px-4 w-full border border-black rounded" type="time" name="end_time" required>
                            </div>
                            <div class="w-full py-2">
                                <label for="form_registration_url">URL do Formulário de Inscrição:</label>
                                <input class="bg-white py-2 px-4 w-full border border-black rounded" placeholder="URL do formulário de inscrição" type="url" name="form_registration_url">
                            </div>
                            <div class="w-full flex justify-start flex-col">
                                <input class="bg-amna-terciary-600 hover:bg-amna-terciary-500 text-white text-center font-semibold py-1 px-3 my-4 border rounded transition duration-300" type="submit" value="Criar Evento">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </div>
@endsection