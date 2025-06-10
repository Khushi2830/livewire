<?php

namespace App\Livewire;

use App\Models\student;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("components.layouts.public")]
class StudentCrud extends Component
{

    public function deleteStudent($id){
        $data = Student::find($id);
        $data -> delete();
    }
    public function render()
    {
        $students = student::paginate(20);
        return view('livewire.student-crud', compact("students"));
    }
}
