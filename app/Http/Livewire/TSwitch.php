<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TSwitch extends Component
{

    public $show = "table"; // table | info | 
    public $rowId ;
    public $controller ;

    protected $listeners = ['updateShow'];

    public function mount($controller)
    {
        $this->controller = $controller;
        
    }
    public function updateShow($show,$rowId = null)
    {
        $this->show = $show;
        $this->rowId = $rowId;
        
    }
    public function render()
    {
        return view('livewire.t-switch');
    }
}
