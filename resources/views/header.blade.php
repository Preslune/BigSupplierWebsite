<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/header.css">
    <title>Giant Book Supplier</title>
</head>
<body>
    <div class="header">
        <div class="headertext">        
            Giant Book Supplier
        </div>
    </div>

    <div class="navbar">
        <div class="navbar-item">
           <a href="{{route('home')}}" id="home">Home</a>
            <div class="dropdown">
                <div class="dropbtn">
                    Category &#9660;
                </div>
                <div class="dropdown-item">
                    <a href="{{ url('category/Romance') }}">Romance</a>
                    <a href="{{ url('category/Fantasy') }}">Fantasy</a>
                    <a href="{{ url('category/Children') }}">Children</a>
                    <a href="{{ url('category/Education') }}">Education</a>
                </div>
            </div>
            <a href="{{route('publishers')}}" id="publisher">Publisher</a>
            <a href="{{route('contact')}}" id="contact">Contact</a>
        </div>
    </div>
</body>
</html>