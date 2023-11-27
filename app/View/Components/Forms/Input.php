<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $type;
    public $name;
    public $id;
    public $label;
    public $value;
    public $placeholder;
    public $required;
    public $acceptFileType;
    public $readonly;

    public function __construct($name, $type = "text", $id = null, $label = null, $value = null, $placeholder = null, $required = true,$acceptFileType = null, $readonly = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id ?? $name; // Default ID to the name
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->acceptFileType = $acceptFileType;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
