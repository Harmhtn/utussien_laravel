@extends('layouts.app')
@include('layouts.partials.nav')

@section('content')
    <div class="jumbotron"> Foto van ut ussien + logo </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1> tekst box 1</h1>
            </div>
            <div class="col-md-8">
                <h1> tekst box 2</h1>
            </div>
            <div class="col-md-8">
                <h1> tekst box 3</h1>
            </div>
        </div>
    </div>

<footer class="row">
    @include('layouts.partials.footer')
</footer>
@endsection
