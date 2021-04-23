<?php

namespace App\Http\Livewire\Admin;

use App\Models\Book;
use Livewire\Component;

class AdminBooksComponent extends Component
{
    public function deleteBook($book_id)
    {
        $section = Book::find($book_id);
        $section->delete();
        session()->flash('message','Book has been deleted successfully!');
    }

    public function render()
    {
        $books = Book::all();
        return view('livewire.admin.admin-books-component',['books'=>$books])->layout('layouts.admin');
    }
}
