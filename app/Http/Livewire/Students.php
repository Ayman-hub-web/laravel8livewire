<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class Students extends Component
{
    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $searchTerm;

    public function resetInputFields(){
        $this->firstname = "";
        $this->lastname = "";
        $this->email = "";
        $this->phone = "";
    }

    public function store(){
        $validatedData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        Student::create($validatedData);
        session()->flash('message', 'Student created successflly!!');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function edit($id){
        $student = Student::find($id);
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update(){

        $this->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
            ]);

        if($this->ids){
            $student = Student::find($this->ids);
            $student->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);
            session()->flash('message', 'Student successfully updated!!');
            $this->resetInputFields();
            $this->emit('studentUpdated');
        }
    }

    public function delete($id){
        Student::find($id)->delete();
        session()->flash('message', 'Student deleted successfully!!');
    }

    use WIthPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $students = Student::where('firstname', 'LIKE', $searchTerm)
        ->orwhere('lastname', 'LIKE', $searchTerm)
        ->orwhere('email', 'LIKE', $searchTerm)
        ->orwhere('phone', 'LIKE', $searchTerm)
        ->orderBy('id','DESC')->paginate(5);
        return view('livewire.students', compact('students'));
    }
}
