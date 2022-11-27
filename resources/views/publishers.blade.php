<link rel="stylesheet" href="../css/publishers.css">

@extends('template')

@section('title','Giant Book Supplier')

@section('content')
    <div>
        @foreach ($publishers as $pub)
        <div class="titlebox">
            <div class="title">
                {{$pub->name}}
                <br>
                Address - {{$pub->address}}
                <br>
                Phone - {{$pub->phone}}
                <br>
                Email - {{$pub->email}}
                <img src="{{$pub->publishers_image}}" alt="">
            </div>
        </div>

            <div class="books">
                @foreach($books_data as $book)
                @if ($book->publishers_id == $pub->id)
                <div class="bookitem">
                    <img src="{{$book->image}}" alt="">
                    <div class="desc">
                        @php
                            echo wordwrap($book->title,50,"<br>\n");
                        @endphp
                         <br> by {{$book->author}}
                         <br> <br>
                        <a href="/book/{{$book->id}}" class="bookbutton">Detail</a>
                    </div>
                </div>
                @endif
            @endforeach
        @endforeach
    </div>
<div class="paging">
    {{$publishers->links()}}
    {{-- {{$publishers->appends(['bookspage' => $books_data->currentPage()])->links()}}    
    {{$books_data->appends(['publisherspage' => $publishers->currentPage()])->links()}}     --}}
</div>
@endsection