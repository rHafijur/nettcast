<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\News;

class PopularArticles extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $news;
    public function __construct()
    {
        $this->news=News::orderBy('view_count','desc')->limit(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.popular-articles');
    }
}
