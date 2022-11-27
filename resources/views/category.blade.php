<link rel="stylesheet" href="../css/category.css">

@extends('template')

@section('title','Giant Book Supplier')

@section('content')
    <div class="pagetitle">
        <div class="title">
            {{$categories->name}}
        </div>
    </div>
    <div class="books">
        @foreach($data as $b)
            @foreach ($b->books as $book)
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
    @endforeach
    </div>
    </div>
@endsection