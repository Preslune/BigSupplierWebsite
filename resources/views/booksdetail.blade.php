<link rel="stylesheet" href="../css/details.css">

@extends('template')

@section('title','Giant Book Supplier')

@section('content')
    <div class="pagetitle">
        <div class="title">
            Book Detail
        </div>
    </div>
    <div class="books">
      
        <div class="bookitem">
            <img src="{{$books_data->image}}" id="bookimage" alt="">
            <div class="desc">
                @php
                    echo ('Title: ');
                    echo wordwrap($books_data->title,40,"<br>\n");
                @endphp
                <br>
                Author : {{$books_data->author}} <br>
                Publisher : {{$publishers->name}} <br>
                Year : {{$books_data->year}} <br>
                Synopsis : <br>
                @php
                    echo wordwrap($books_data->synopsis,40,"<br>\n");
                @endphp
            </div>
        </div>
        
 
    </div>
    </div>
@endsection