<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Create extends Component
{
    public $readyToLoad = false;
    public $controller;
    
    
    public function mount($controller)
    {
        $this->controller = $controller;

    }

    public function load()
    {
        $this->readyToLoad = true;
    }

    
    public function render()
    {
         
        $data = [] ;

        if ($this->readyToLoad) {
           
            $data =  app()->call($this->controller[0].'@'.$this->controller['methods']['create']);

        }
        return view('livewire.create',['data'=> $data]);
    }
}
