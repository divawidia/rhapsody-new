<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageInput extends Component
{
    public $name;
    public $label;
    public $id;
    public $required;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $label = null, $id = null, $required = true, $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->id = $id ?? $name;
        $this->required = $required;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.image-input');
    }
}
