<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sections;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSectionComponent extends Component
{
    use WithPagination;

    public function deleteSection($section_id)
    {
        $section = Sections::find($section_id);
        $section->delete();
        session()->flash('message','Section has been deleted successfully!');
    }

    public function render()
    {
        $sections = Sections::paginate(10);
        return view('livewire.admin.admin-section-component',['sections'=>$sections])->layout('layouts.admin');
    }
}
