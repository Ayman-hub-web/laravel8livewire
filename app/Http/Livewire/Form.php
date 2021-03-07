<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $name;
    public $colors = [];
    public $marital_status;
    public $message;
    public $fruit;
    
    public function render()
    {
        return view('livewire.form');
    }
}
