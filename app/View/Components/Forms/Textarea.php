<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $id;
    public $label;
    public $value;
    public $placeholder;
    public $required;

    public function __construct($name, $id = null, $label = null, $value = null, $placeholder = null, $required = true)
    {
        $this->name = $name;
        $this->id = $id ?? $name; // Default ID to the name
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.textarea');
    }
}
