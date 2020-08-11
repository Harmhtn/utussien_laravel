@extends('layouts.app')
<button class="nav-link btn btn-outline-info m-2" onclick="goBack()">Ga terug</button>

<h1>dit is de workshops pagina</h1>
<footer class="row">
    @include('layouts.partials.footer')
</footer>
<script>
    function goBack() {
        window.history.back();
    }
</script>
