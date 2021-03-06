<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CaseCard extends Component
{
    public $case;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $case , $image)
    {
        $this->case = $case;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.case-card');
    }
}
