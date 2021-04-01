<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class TeacherRegistrationComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.teacher-registration-component')->layout('layouts.admin');
    }
}
