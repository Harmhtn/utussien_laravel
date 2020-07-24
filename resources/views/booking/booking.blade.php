@extends('layouts.app')
@include('layouts.partials.nav')
<head>
    <link href="{{ asset('public/css/booking.style.css') }}" rel="stylesheet">
</head>
@section('content')
    <h1>Dit is de booking pagina</h1>

    <footer class="row">
        @include('layouts.partials.footer')
    </footer>
@endsection
