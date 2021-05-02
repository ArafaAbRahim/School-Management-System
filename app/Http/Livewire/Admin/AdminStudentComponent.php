<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class AdminStudentComponent extends Component
{
    use WithPagination;
    public $show_all_info;

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        session()->flash('message','Student has been deleted successfully!');
    }

    public function render()
    {
        $students = Student::paginate(10);
        return view('livewire.admin.admin-student-component',['students'=>$students])->layout('layouts.admin');
    }
}
