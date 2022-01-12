<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $field; 
    public $label;
    public $type;
    public $placeholder;
    public $note;

    public function __construct($field='', $label='', $type='', $placeholder='', $note='')
    {
        
        $this->field = $field;
        $this->label = $label;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->note = $note;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
