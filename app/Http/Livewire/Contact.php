<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Validation\ValidatesRequests;
class Contact extends Component
{

    public $name;
    public $email;
    public $phone;
    public $msg;
// mit dieser Methode kann in real time valöidieren und so Fehler sofort korigieren
    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'msg' => 'required|string|min:20',
        ]);
        
    }

    public function submitForm(){
        $this->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'msg' => 'required|string|min:20',
        ]);
        dd($this->name, $this->email, $this->phone, $this->msg);
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
