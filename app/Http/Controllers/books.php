<?php

namespace App\Http\Controllers;

use App\Models\books as ModelsBooks;
use Illuminate\Http\Request;

class books extends Controller
{
    public function index()
    {
        $books_data = ModelsBooks::simplepaginate(4); 

        return view('welcome', compact('books_data'));  
    }
}
