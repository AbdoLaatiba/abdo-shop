<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Category extends Component
{
    public $img;
    public $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $category)
    {
        $this->img = $img;
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category');
    }
}
