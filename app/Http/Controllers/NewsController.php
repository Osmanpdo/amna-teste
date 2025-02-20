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
}