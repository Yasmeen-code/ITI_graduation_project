<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function viewAllBooks()
    {
        $books = Book::all();
        return view('view_all_books', compact('books'));
    }
}
