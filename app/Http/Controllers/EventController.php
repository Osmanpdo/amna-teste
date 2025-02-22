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

    public function create()
    {
        return view('event.event_create');
    }

    public function store(Request $request)
    {
        // Lógica para salvar o evento no banco de dados
        // Exemplo:
        // $event = new Event();
        // $event->name = $request->input('name');
        // $event->date = $request->input('date');
        // $event->location = $request->input('location');
        // $event->description = $request->input('description');
        // $event->save();

        return redirect()->route('events.index')->with('success', 'Evento cadastrado com sucesso!');
    }
}