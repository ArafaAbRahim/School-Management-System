<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use Livewire\Component;

class AdminClassComponent extends Component
{
   
    public function render()
    {
        $sections = Sections::all();

        return view('livewire.admin.admin-class-component',['sections'=>$sections])->layout('layouts.admin');
    }
}
