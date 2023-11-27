<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkButton extends Component
{
    public $size;
    public $color;
    public $icon;
    public $text;
    public $route;
    public $tooltipsTitle;
    /**
     * Create a new component instance.
     */
    public function __construct($color, $icon, $route, $text = null, $tooltipsTitle = null, $size = null)
    {
        $this->size = $size;
        $this->color = $color;
        $this->icon = $icon;
        $this->text = $text;
        $this->route = $route;
        $this->tooltipsTitle = $tooltipsTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.link-button');
    }
}