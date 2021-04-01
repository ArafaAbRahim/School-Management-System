<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use Livewire\Component;

class AddSectionComponent extends Component
{
    public $class;
    public $version;
    public $sections;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'class' => 'required',
            'version' => 'required',
            'sections' => 'required|unique:sections'            
        ]);
    }

    public function storesection()
    {
        $this->validate([
            'class' => 'required',
            'version' => 'required',
            'sections' => 'required|unique:sections' 
        ]);       
        $sections = new Sections();
        $sections->class = $this->class;
        $sections->version = $this->version;
        $sections->sections = $this->sections;        
        $sections->save();
        session()->flash('message','Section has been created successfully!');
    }
    public function render()
    {

        return view('livewire.admin.add-section-component')->layout('layouts.admin');
    }
}
