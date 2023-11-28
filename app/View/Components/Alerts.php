<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alerts extends Component
{
    public $type;
    public $message;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string|null $message
     */
    public function __construct(string $type = 'success', string $message = null)
    {
        $this->type = $type;
        $this->message = $message ?? session('status');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerts');
    }
}