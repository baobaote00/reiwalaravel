<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navbar extends Component
{
    public $navbar , $navbarModel;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($navbar,$navbarModel)
    {
        //
        $this->navbar = $navbar;
        $this->navbarModel = $navbarModel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
