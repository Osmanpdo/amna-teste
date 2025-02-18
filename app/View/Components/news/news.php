<?php

namespace App\View\Components\news;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class news extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $content,
        public string $publicationDate,
        public string $author,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news.news');
    }
}
