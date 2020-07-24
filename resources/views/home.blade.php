@extends('layouts.app')
@include('layouts.partials.nav')
<head>
    <link href="{{ asset('public/css/home.style.css') }}" rel="stylesheet">
</head>

@section('content')
    <div class="jumbotron text-center bg-light">
        <img src="{{ asset('images/ussien_logo.jpg') }}" width="auto" height="500px">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center col-md-8 bg-light m-2">
                <h1> tekst box 1</h1>
                <p> Test tekst</p>
            </div>
            <div class="text-center col-md-8 bg-light m-2">
                <h1> tekst box 2</h1>
                <p> Test tekst</p>
            </div>
            <div class="text-center col-md-8 bg-light m-2">
                <h1> tekst box 3</h1>
                <p> Test tekst</p>
            </div>
        </div>
    </div>

<footer class="row">
    @include('layouts.partials.footer')
</footer>
@endsection
