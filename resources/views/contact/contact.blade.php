@extends('layouts.app')
@include('layouts.partials.nav')
<head>
    <link href="{{ asset('public/css/contact.style.css') }}" rel="stylesheet">
</head>
@section('content')
    <h1>Dit is de contact pagina</h1>

    <footer class="row">
        @include('layouts.partials.footer')
    </footer>
@endsection
