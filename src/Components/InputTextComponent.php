<?php


namespace Grosv\TailwindComponents\Components;


use Illuminate\Support\Str;
use Illuminate\View\Component;

class InputTextComponent extends Component
{
    public string $id;
    public ?string $name;
    public ?string $label;
    public ?string $type;
    public ?string $placeholder;
    public ?string $value;
    public ?string $error;
    public ?string $help;
    public ?string $hint;
    public bool $hide_label = false;
    public string $family = 'default';


    public function __construct($id = null, $name = null, $label = null, $type = 'text', $placeholder = null, $value = null,
        $help = null, $error = null, $hide_label = false, $hint = null)
    {
        $this->id = is_null($id) ? 'x' . Str::random(12) : $id;
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->value= $value;
        $this->placeholder = $placeholder;
        $this->help = $help;
        $this->error = $error;
        $this->hide_label = $hide_label;
        $this->hint = $hint;
    }

    public function render()
    {
        return view('bcl::components.input_text_component_'.$this->family);
    }
}