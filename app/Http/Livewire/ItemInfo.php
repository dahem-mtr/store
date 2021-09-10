<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemInfo extends Component
{


    
    public $readyToLoad = false;
    public $rowId ;
    public $controller;
    
    
    public function mount($controller,$rowId)
    {
        $this->rowId = $rowId;
        $this->controller = $controller;

    }

    public function load()
    {
        $this->readyToLoad = true;
    }

    public function setShow($show,$rowId = null)
    {
        $this->show = $show;
        $this->rowId = $rowId;
        
    }

    
    public function render()
    {
       
        $data = [] ;

        if ($this->readyToLoad) {
           
            $data =  app()->call($this->controller[0].'@'.$this->controller['methods']['show'], ['id'=>$this->rowId]);

        }

        return view('livewire.item-info',['data'=> $data]);
    }
}
