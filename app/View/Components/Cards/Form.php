<?php

namespace App\View\Components\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $title;
    public $route;
    public $editForm;
    public $backBtn;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $route, $editForm = false, $backBtn = '#')
    {
        $this->title = $title;
        $this->route = $route;
        $this->editForm = $editForm;
        $this->backBtn = $backBtn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.form');
    }
}
