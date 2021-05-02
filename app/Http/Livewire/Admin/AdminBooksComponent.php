<?php

namespace App\Http\Livewire\Admin;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBooksComponent extends Component
{
    use WithPagination;

    public function deleteBook($book_id)
    {
        $section = Book::find($book_id);
        $section->delete();
        session()->flash('message','Book has been deleted successfully!');
    }

    public function render()
    {
        $books = Book::paginate(1);
        return view('livewire.admin.admin-books-component',['books'=>$books])->layout('layouts.admin');
    }
}
