<?php

namespace App\View\Components;

use Illuminate\View\Component;

class introduce extends Component
{
    public $gioiThieu;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($gioiThieu)
    {
        //
        $this->gioiThieu = $gioiThieu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.introduce');
    }
}
