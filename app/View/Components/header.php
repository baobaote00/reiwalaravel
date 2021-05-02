<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    public $contact;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
