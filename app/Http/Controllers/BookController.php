<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::all());
    }

    public function show($id)
    {
        return response()->json(Book::find($id));
    }
}
