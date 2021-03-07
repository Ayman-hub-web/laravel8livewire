<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{

    public $sum;
    public $message;
    public $num1;
    public $num2;

    public function addTwoNumber($n1, $n2){
        $this->sum = $n1 + $n2;
    }

    public function displayMessage($msg){
        $this->message = $msg;
    }

    public function getSum(){
        $this->sum = $this->num1 + $this->num2;
    }
    public function render()
    {
        return view('livewire.action');
    }
}
