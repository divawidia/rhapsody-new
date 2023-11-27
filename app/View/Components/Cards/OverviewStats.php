<?php

namespace App\View\Components\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OverviewStats extends Component
{
    public $title;
    public $value;
    public $icon;
    public $route;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $value, $icon, $route)
    {
        $this->title = $title;
        $this->value = $value;
        $this->icon = $icon;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.overview-stats');
    }
}
