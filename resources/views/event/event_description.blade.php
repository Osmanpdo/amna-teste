@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $event['title'] }}</h1>
        <div class="flex flex-col md:flex-row mb-6">
            <div class="md:w-1/3">
                <img src="{{ asset($event['image']) }}" alt="Imagem do Evento" class="rounded-lg shadow-lg">
            </div>
            <div class="md:w-2/3 md:pl-6">
                <p class="text-gray-700 mb-4">{{ $event['description'] }}</p>
                <p class="text-gray-700 mb-4">Data: <strong>{{ $event['date'] }}</strong></p>
                <p class="text-gray-700 mb-4">Hora: <strong>{{ $event['time'] }}</strong></p>
                <p class="text-gray-700 mb-4">Local: <strong>{{ $event['location'] }}</strong></p>
                <p class="text-gray-700 mb-4">Contato: <strong>{{ $event['contact'] }}</strong></p>
                <p class="text-gray-700 mb-4">Telefone: <strong>{{ $event['phone'] }}</strong></p>
            </div>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg">
            <h2 class="text-2xl font-bold mb-2">Detalhes Adicionais</h2>
            <p class="text-gray-700 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <p class="text-gray-700 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
        </div>
    </div>
</div>
@endsection