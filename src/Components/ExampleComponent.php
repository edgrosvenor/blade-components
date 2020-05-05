<?php


namespace Grosv\BladeComponents\Components;

use Illuminate\View\Component;

class ExampleComponent extends Component
{


   /** @var string */
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }


    public function render()
    {
        return view('bcl::components.example_component');
    }
}