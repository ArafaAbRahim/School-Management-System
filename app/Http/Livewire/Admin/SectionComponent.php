<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use Livewire\Component;

class SectionComponent extends Component
{
    public function deleteSection($section_id)
    {
        $section = Sections::find($section_id);
        $section->delete();
        session()->flash('message','Class has been deleted successfully!');
    }

    public function render()
    {
        $sections = Sections::all();
        return view('livewire.admin.section-component',['sections'=>$sections])->layout('layouts.admin');
    }
}
