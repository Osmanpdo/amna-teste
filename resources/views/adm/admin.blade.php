@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">Administração</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Gerenciamento de Eventos -->
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h2 class="text-2xl font-bold mb-2">Gerenciamento de Eventos</h2>
                    <div class="flex justify-center space-x-4 mb-2">
                        <a href="#" class="bg-amna-primary-100 hover:bg-amna-primary-200 text-white font-bold py-2 px-4 rounded w-48 text-center">Criar Novo Evento</a>
                        <a href="#" class="bg-amna-terciary-600 hover:bg-amna-terciary-700 text-white font-bold py-2 px-4 rounded w-48 text-center">Editar Evento</a>
                        <a href="#" class="bg-amna-primary-100 hover:bg-amna-primary-200 text-white font-bold py-2 px-4 rounded w-48 text-center">Listar Eventos</a>
                    </div>
                </div>
                <!-- Gerenciamento de Notícias -->
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h2 class="text-2xl font-bold mb-2">Gerenciamento de Notícias</h2>
                    <div class="flex justify-center space-x-4 mb-2">
                        <a href="#" class="bg-amna-primary-100 hover:bg-amna-primary-200 text-white font-bold py-2 px-4 rounded w-48 text-center">Criar Nova Notícia</a>
                        <a href="#" class="bg-amna-terciary-600 hover:bg-amna-terciary-700 text-white font-bold py-2 px-4 rounded w-48 text-center">Editar Notícia</a>
                        <a href="#" class="bg-amna-primary-100 hover:bg-amna-primary-200 text-white font-bold py-2 px-4 rounded w-48 text-center">Listar Notícias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection