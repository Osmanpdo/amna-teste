<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display the specified news.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Informações genéricas para a notícia
        $news = [
            'title' => 'Natalia Valente',
            'image' => 'path/to/default-image.jpg',
            'description' => 'Descrição da notícia.',
            'date' => '2025-02-20',
            'author' => 'GPT-4',
            'source' => 'ChatGPT'
        ];

        return view('news.news_description', compact('news'));
    }
    public function create()
    {
        return view('news.news_create');
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
