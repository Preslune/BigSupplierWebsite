<link rel="stylesheet" href="../css/home.css">

@extends('template')

@section('title','Giant Book Supplier')

@section('content')
    <div class="pagetitle">
        <div class="title">
            Book List
        </div>
    </div>
    <div class="books">
        @foreach($books_data as $book)
        <div class="bookitem">
            <img src="{{$book->image}}" id="bookimage" alt="">
            <div class="desc">
                @php
                    echo wordwrap($book->title,50,"<br>\n");
                @endphp
                 <br> by {{$book->author}}
                 <br> <br>
                <a href="/book/{{$book->id}}" class="bookbutton">Detail</a>
            </div>
        </div>
    @endforeach
    </div>
    <div>
        <div class="paging">
            {{$books_data->links()}}
        </div>
    </div>
@endsection


