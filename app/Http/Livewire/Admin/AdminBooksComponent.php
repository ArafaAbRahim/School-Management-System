<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminBooksComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-books-component')->layout('layouts.admin');
    }
}
