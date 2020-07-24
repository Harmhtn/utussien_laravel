@extends('layouts.app')
@include('layouts.partials.nav')
<head>
    <link href="{{ asset('public/css/info.style.css') }}" rel="stylesheet">
</head>
@section('content')
    <h1>Dit is de info pagina</h1>
    <div>

    </div>

    <footer class="row">
        @include('layouts.partials.footer')
    </footer>
@endsection
