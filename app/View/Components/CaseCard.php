<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CaseCard extends Component
{
    public $id;
    public $title;
    public $description;
    public $goal;
    public $raised;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $id , $title , $description , $goal , $raised  , $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->goal = $goal;
        $this->raised = $raised;
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
