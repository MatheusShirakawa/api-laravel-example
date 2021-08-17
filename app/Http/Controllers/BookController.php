<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all()->toArray();

        return response()->json(['success'=>true,'books',$books],200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();

        $book->title     = $request->get('title');
        $book->price 	 = $request->get('price');
        $book->author_id = $request->get('author_id');

        $book->save();

        return response()->json(['success'=>true,'books',$this->index()],200);
    }
}
