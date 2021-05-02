<?php

namespace App\Http\Livewire\Admin;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTeacherComponent extends Component
{
    use WithPagination;
    public $show_all_info;

    public function deleteTeacher($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        session()->flash('message','Teacher has been deleted successfully!');
    }

    public function render()
    {
        $teachers = Teacher::paginate(5);
        return view('livewire.admin.admin-teacher-component',['teachers'=>$teachers])->layout('layouts.admin');
    }
}
