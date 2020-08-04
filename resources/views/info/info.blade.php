@extends('layouts.app')
@include('layouts.partials.nav')
<head>
    <link href="{{ asset('public/css/info.style.css') }}" rel="stylesheet">

</head>
@section('content')
    <div class="container">
        <button class="nav-link btn btn-outline-info m-2" onclick="goBack()">Ga terug</button>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Dit is de info pagina</h1>
                <div>

                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        @include('layouts.partials.footer')
    </footer>
@endsection
