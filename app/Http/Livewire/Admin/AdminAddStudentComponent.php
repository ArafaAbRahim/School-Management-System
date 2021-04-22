<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use App\Models\Student;
use App\Models\Teacher;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddStudentComponent extends Component
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
    public $email;
    public $image;
    public $gender;

    public function updated($fields)
    {
        $this->validateOnly($fields,[             
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'version' => 'required',
            'section_id' => 'required',
            'permanent_address' => 'required',
            'present_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',            
            'phone' => 'required|numeric',
            'emergency_phn' => 'numeric',
            'email' => 'email',
            'image' => 'required|mimes:jpeg,png',
            'gender' => 'required'
        ]);
    }

    public function addStudents()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'version' => 'required',
            'section_id' => 'required',
            'permanent_address' => 'required',
            'present_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',            
            'phone' => 'required|numeric',
            'emergency_phn' => 'numeric',
            'email' => 'email',
            'image' => 'required|mimes:jpeg,png',
            'gender' => 'required'
        ]);  

        $student = new Teacher();
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
        $student->image = $imageName;
        $student->gender = $this->gender;       
        $student->save();
        session()->flash('message','Student has been added successfully!');
    }

    public function render()
    {
        $sections = Sections::all();
        return view('livewire.admin.admin-add-student-component',['sections'=>$sections])->layout('layouts.admin');
    }
}
