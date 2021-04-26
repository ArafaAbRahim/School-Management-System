<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;

class AdminStudentComponent extends Component
{
    
    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        session()->flash('message','Student has been deleted successfully!');
    }

    public function render()
    {
        $students = Student::all();
        return view('livewire.admin.admin-student-component',['students'=>$students])->layout('layouts.admin');
    }
}
