<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class StudentRegistrationComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.student-registration-component')->layout('layouts.admin');
    }
}
