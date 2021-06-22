<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BrandsSection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public $brands;
    public $category;

    public function __construct($category)
    {
        // $this->brands->brands;
        $this->category=$category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.brands-section');
    }
}
