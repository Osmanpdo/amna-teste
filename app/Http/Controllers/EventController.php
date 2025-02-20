<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
        // Aqui você pode buscar os detalhes do evento pelo ID
        // Exemplo: $event = Event::find($id);
        // Para este exemplo, vamos usar dados estáticos

        $event = [
            'id' => $id,
            'title' => 'Título do Evento ' . $id,
            'description' => 'Descrição detalhada do evento ' . $id . '. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'date' => '25 de Março de 2025',
            'time' => '18:00 - 21:00',
            'location' => 'Rua Exemplo, 123, Cidade, Estado',
            'contact' => 'email@exemplo.com',
            'phone' => '(11) 1234-5678',
            'image' => 'images/event-image.jpg'
        ];

        return view('event.event_description', compact('event'));
    }
}