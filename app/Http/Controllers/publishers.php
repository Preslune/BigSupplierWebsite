<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\publishers as ModelsPublishers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class publishers extends Controller
{
    public function index()
    {

        // $books_data = DB::table('books')
        // ->select('*')
        // ->join('publishers', 'publishers.id', '=', 'books.publishers_id')
        // ->get(); 

        // $books_data = DB::table('publishers')
        // ->select('*')
        // ->join('books', 'books.publishers_id', '=', 'publishers.id')
        // ->Paginate(2);

        // $publishers = ModelsPublishers::simplepaginate(1, ['*'],'publisherspage');
        // $books_data = books::orderBy('publishers_id','asc')->simplepaginate(5, ['*'],'bookspage');

        $publishers = ModelsPublishers::simplepaginate(1);
        $books_data = books::all();

       return view('publishers', compact('publishers','books_data'));
    }
}
