<?php

namespace App\Http\Livewire\Admin;

use App\Models\Teacher;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditTeacherComponent extends Component
{
    use WithFileUploads;
    public $first_name; 
    public $last_name;
    public $dob; 
    public $NID;          
    public $permanent_address;
    public $present_address;
    public $city;
    public $state;
    public $zip; 
    public $title; 
    public $phone;
    public $emergency_phn;                     
    public $emailid;
    public $image;
    public $newimage;
    public $gender;
    public $teacher_id;

    public function mount($teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        $this->first_name = $teacher->first_name;
        $this->last_name = $teacher->last_name;
        $this->dob = $teacher->dob;
        $this->NID = $teacher->NID;
        $this->permanent_address = $teacher->permanent_address;
        $this->present_address = $teacher->present_address;
        $this->city = $teacher->city;
        $this->state = $teacher->state;
        $this->zip = $teacher->zip;
        $this->title = $teacher->title;
        $this->phone = $teacher->phone;
        $this->emergency_phn = $teacher->emergency_phn;
        $this->emailid = $teacher->emailid;
        $this->image = $teacher->image;
        $this->newimage = $teacher->newimage;
        $this->gender = $teacher->gender;
        $this->teachers_id = $teacher->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[             
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'NID' => 'required|numeric',
            'permanent_address' => 'required',
            'present_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',
            'title' => 'required',
            'phone' => 'required|numeric',
            'emergency_phn' => 'numeric',
            'emailid' => 'required|email',
            'newimage' => 'required|mimes:jpeg,png',
            'gender' => 'required'
        ]);
    }

    public function updateTeacher()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'NID' => 'required|numeric',
            'permanent_address' => 'required',
            'present_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',
            'title' => 'required',
            'phone' => 'required|numeric',
            'emergency_phn' => 'numeric',
            'emailid' => 'required|email',
            'newimage' => 'required|mimes:jpeg,png',
            'gender' => 'required'
        ]);       
        $teacher = Teacher::find($this->teacher_id);
        $teacher->first_name = $this->first_name;
        $teacher->last_name = $this->last_name;
        $teacher->dob = $this->dob; 
        $teacher->NID = $this->NID;
        $teacher->permanent_address = $this->permanent_address;
        $teacher->present_address = $this->present_address;
        $teacher->city = $this->city;
        $teacher->state = $this->state;
        $teacher->zip = $this->zip;
        $teacher->title = $this->title;
        $teacher->phone = $this->phone;
        $teacher->emergency_phn = $this->emergency_phn;
        $teacher->emailid = $this->emailid;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('teachers',$imageName);
            $teacher->image = $imageName;
        }
        $teacher->gender = $this->gender;       
        $teacher->save();
        session()->flash('update_message','Teacher has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-teacher-component')->layout('layouts.admin');
    }
}
