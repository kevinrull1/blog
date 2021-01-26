<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(20);
        return view('welcome', ['books' => $books]);
    }
        
    public function book(Book $book) {
        return view('book', ['book' => $book]);
    }
}
