<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function create()
    {
        return view('admin.addBook');
    }
    //store
    public function store(Request $request)
    {
        $book = new Book();
        $book->bookname = $request->bookname;
        $book->booktitle = $request->booktitle;
        $book->category = $request->category;
        $book->price = $request->price;
        if($book->save())
        {
            return redirect()->route('admin.bookList');
        }
    }
    public function show($id)
    {
        $book = Book::find($id);
        return view('admin.bookDetails')->with('book', $book);
    }
    public function BookList()
    {
        $books = Book::all();
        return view('admin.bookList')->with('books', $books);
    }
}
