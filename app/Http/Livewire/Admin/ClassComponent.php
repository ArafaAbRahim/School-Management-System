<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use Livewire\Component;

class ClassComponent extends Component
{
   
    public function render()
    {
        $sections = Sections::all();

        return view('livewire.admin.class-component',['sections'=>$sections])->layout('layouts.admin');
    }
}
