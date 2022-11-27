<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories as ModelsCategories;
use Illuminate\Http\Request;

class categories extends Controller
{
    public function index($name)
    {
        $categories = ModelsCategories::where('name', 'LIKE', $name)->first();
        $books_data = books::where('id', 'LIKE', $categories->id)->get();

        $data = ModelsCategories::with('books')->where('id', 'LIKE', $categories->id)->get();

        return view('category', ['name' => $name], compact('categories','books_data','data'));
    }
}


