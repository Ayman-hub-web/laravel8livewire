<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $name;

    // mount render parameter to the livewire component (home.blade.php)
    public function mount($name){
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.home');
    }
}
