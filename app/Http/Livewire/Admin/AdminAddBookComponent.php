<?php

namespace App\Http\Livewire\Admin;

use App\Models\Book;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddBookComponent extends Component
{
    public $book_name;
    public $slug;
    public $writer_name;
    public $class;
    public $quantity;
    public $stock_status;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->book_name,'-');
    }

    public function storeBook()
    {
        $book = new Book();
        $book->book_name = $this->book_name;
        $book->slug = $this->slug;
        $book->writer_name = $this->writer_name;
        $book->class = $this->class;
        $book->quantity = $this->quantity;
        $book->stock_status = $this->stock_status;
        $book->save();
        session()->flash('message','Book has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-book-component')->layout('layouts.admin');
    }
}
