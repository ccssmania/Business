@extends('layouts.app')
 <style>
        .container1 {
            padding: 80px 120px;
        }
        .person {
            border: 10px solid transparent;
            margin-bottom: 25px;
            width: 80%;
            height: 80%;
            opacity: 0.7;
        }
        .person:hover {
            border-color: #f1f1f1;
        }
    </style>
@section('content')
<div id="myCarousel" class="carousel slide little-margin-top" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{url('/index/images/industry0.jpg')}}" alt="Factory">
        </div>

        <div class="item">
            <img src="{{url('/index/images/industry1.jpg')}}" alt="Factory">
        </div>

        <div class="item">
            <img src="{{url('/index/images/industry2.jpg')}}" alt="Factory">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container1 text-center">
    <h1>Hola mundo</h1>
    <h3><em>--</em></h3>
    <h4> </h4>
    @if (Auth::guest())
        <a href="{{ route('login') }}" class="btn btn-primary ">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary ">Register</a>
    @else
        <a href="{{url('/process')}}" class="btn btn-primary btn-lg">ENTER</a>
    @endif
    <br>
</div>
@endsection
