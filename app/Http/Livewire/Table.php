<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;


class Table extends Component
{
    
    use WithPagination;

    public $search = '';
    public $show =true;
    public $controller;
    public $readyToLoad = false;
    protected $paginationTheme = 'bootstrap';

    
    public function mount($controller)
    {
        $this->controller = $controller;
    }

    public function load()
    {
        $this->readyToLoad = true;
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

   


    public function render()
    {
        $table =[];
              
         if ($this->readyToLoad) {

            $table =  app()->call($this->controller[0].'@'.$this->controller['methods']['red'], ['search'=>$this->search]);
         // example app()->call('App\Http\Controllers\UserController@create', [$param1, $param2]);
            
                }
        return view('livewire.table',['table'=> $table]);
    }
}
