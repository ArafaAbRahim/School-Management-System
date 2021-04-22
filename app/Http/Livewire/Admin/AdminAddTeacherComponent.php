<?php

namespace App\Http\Livewire\Admin;

use App\Models\Teacher;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddTeacherComponent extends Component
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
    public $gender;

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
            'zip' => 'required',
            'title' => 'required',
            'phone' => 'required|numeric',
            'emergency_phn' => 'numeric',
            'emailid' => 'required|email',
            'image' => 'required|mimes:jpeg,png',
            'gender' => 'required'
        ]);
    }

    public function addTeacher()
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
            'zip' => 'required',
            'title' => 'required',
            'phone' => 'required|numeric',
            'emergency_phn' => 'numeric',
            'emailid' => 'required|email',
            'image' => 'required|mimes:jpeg,png',
            'gender' => 'required'
        ]);       
        $teacher = new Teacher();
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
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('teachers',$imageName);
        $teacher->image = $imageName;
        $teacher->gender = $this->gender;       
        $teacher->save();
        session()->flash('message','Teacher has been added successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-teacher-component')->layout('layouts.admin');
    }
}
