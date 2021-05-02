<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use App\Models\Student;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditStudentComponent extends Component
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
    public $newimage;
    public $gender;
    public $student_id;

    public function mount($student_id)
    {
        $student = Student::find($student_id);
        $this->fname = $student->fname;
        $this->lname = $student->lname;
        $this->father_name = $student->father_name;
        $this->mother_name = $student->mother_name;
        $this->dob = $student->dob;
        $this->class = $student->class;
        $this->version = $student->version;
        $this->section_id = $student->section_id;
        $this->address1 = $student->address1;
        $this->address2 = $student->address2;
        $this->city = $student->city;
        $this->state = $student->state;
        $this->zip = $student->zip;        
        $this->phone = $student->phone;
        $this->emergency_phn = $student->emergency_phn;
        $this->email = $student->email;
        $this->image = $student->image;
        $this->newimage = $student->newimage;
        $this->gender = $student->gender;
        $this->student_id = $student->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[             
            'fname' => 'required',
            'lname' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'version' => 'required',
            'section_id' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',            
            'phone' => 'required|numeric',
            'emergency_phn' => 'numeric',                        
            'gender' => 'required'
        ]);
    }

    public function updateStudent()
    {
        $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'version' => 'required',
            'section_id' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',            
            'phone' => 'required|numeric',
            'emergency_phn' => 'numeric',                        
            'gender' => 'required'
        ]);       
        $student = Student::find($this->student_id);
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
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('students',$imageName);
            $student->image = $imageName;
        }
        $student->gender = $this->gender;
        $student->save();
        session()->flash('update_message','Student has been updated successfully!');
    }
    public function render()
    {
        $sections = Sections::all();
        return view('livewire.admin.admin-edit-student-component',['sections'=>$sections])->layout('layouts.admin');
    }
}
