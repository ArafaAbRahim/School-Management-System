<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use App\Models\Student;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddStudentComponent extends Component
{
    use WithFileUploads;
    public $fname;
    public $lname;
    public $father_name;
    public $mother_name;
    public $dob;
    public $class;
    public $version;
    public $section_id;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $zip;
    public $phone;
    public $emergency_phn;
    public $email;
    public $image;
    public $gender;

    public function addStudent()
    {
        $student = new Student();
        $student->fname = $this->fname;
        $student->lname = $this->lname;
        $student->father_name = $this->father_name;
        $student->mother_name = $this->mother_name;
        $student->dob = $this->dob;
        $student->class = $this->class;
        $student->version = $this->version;
        $student->section_id = $this->section_id;
        $student->address1 = $this->address1;
        $student->address2 = $this->address2;
        $student->city = $this->city;
        $student->state = $this->state;
        $student->zip = $this->zip;
        $student->phone = $this->phone;
        $student->emergency_phn = $this->emergency_phn;
        $student->email = $this->email;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('students',$imageName);
        $student->image = $imageName;
        $student->gender = $this->gender;
        $student->save();
        session()->flash('message','Student has been created successfully!');
    }

    public function render()
    {
        $sections = Sections::all();
        return view('livewire.admin.admin-add-student-component',['sections'=>$sections])->layout('layouts.admin');
    }
}
