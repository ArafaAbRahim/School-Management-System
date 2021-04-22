<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use App\Models\Student;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddUserComponent extends Component
{
    use WithFileUploads;
    public $first_name;
    public $last_name;
    public $father_name;
    public $mother_name;
    public $dob;
    public $class;
    public $version;
    public $section_id;
    public $permanent_address;
    public $present_address;
    public $city;
    public $state;
    public $zip;
    public $phone;
    public $emergency_phn;
    public $image;
    public $email;
    public $gender;

    public function addStudent()
    {
        $student = new Student();
        $student->first_name = $this->first_name;
        $student->last_name = $this->last_name;
        $student->father_name = $this->father_name;
        $student->mother_name = $this->mother_name;
        $student->dob = $this->dob;
        $student->class = $this->class;
        $student->version = $this->version;
        $student->section_id = $this->section_id;
        $student->permanent_address = $this->permanent_address;
        $student->present_address = $this->present_address;
        $student->city = $this->city;
        $student->state = $this->state;
        $student->zip = $this->zip;
        $student->phone = $this->phone;
        $student->emergency_phn = $this->emergency_phn;
        $student->email = $this->email;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('students',$imageName);
        $student->image = $this->imageName;
        $student->gender = $this->gender;
        $student->save();
        session()->flash('message','Student has been created successfully!');
    }

    public function render()
    {
        $sections = Sections::all();
        return view('livewire.admin.admin-add-user-component',['sections'=>$sections])->layout('layouts.admin');
    }
}
