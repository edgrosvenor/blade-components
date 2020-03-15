<?php


namespace Grosv\TailwindComponents\Components;
use Illuminate\View\Component;

class ButtonComponent extends Component
{
    public string $color;
    public string $size;
    public ?string $href;
    public ?string $onclick;
    public ?string $classes;
    public string $tag;
    public string $family;
    public array $measurements;



    public function __construct($color = 'gray', $size = 'm', $href = null, $onclick="null", $classes = null, $family = 'primary')
    {
        $this->color = $color;
        $this->size = $size;
        $this->href = $href;
        $this->onclick = $onclick;
        $this->tag = is_null($href) ? 'button' : 'a';
        $this->classes = $classes;
        $this->family = $family;

        $sizes = [
            'xs' => ['px' => '2.5', 'py' => '1.5', 'leading' => '4'],
            's' => ['px' => '3', 'py' => '2', 'leading' => '4'],
            'm' => ['px' => '4', 'py' => '2', 'leading' => '5'],
            'l' => ['px' => '4', 'py' => '2', 'leading' => '6'],
            'xl' => ['px' => '6', 'py' => '3', 'leading' => '6'],
        ];
        if (!in_array($this->size, array_keys($sizes))) {
            $this->size = 'm';
        }

        $this->measurements = $sizes[$this->size];
    }




    public function render()
    {
        return view('bcl::components.button_component_' . $this->family);
    }
}