<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\publishers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class booksdetail extends Controller
{
    public function index($id)
    {
        $books_data = books::where('id', 'LIKE', $id)->first();
        $publishers = publishers::where('id', 'LIKE', $books_data->publishers_id)->first();
        
        return view('booksdetail', ['id' => $id], compact('books_data','publishers'));
    }
}

// $pubid = DB::table('books')->select('publishers_id')->where('id', 'LIKE', $id)->get();
        // $pubid2 = $books_data->publishers_id;
        // $publishers = publishers::where('id', 'LIKE', $pubid)->get();