@extends('layouts.app')
@include('layouts.partials.nav')
<head>
    <link href="{{ asset('public/css/booking.style.css') }}" rel="stylesheet">
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-3">Boek een workshop</h1>

                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="workshop">Selecteer workshop</label>
                                <select class="form-control" id="workshop">
                                    <option>Handlettering</option>
                                    <option>Biblejournaling</option>
                                    <option>Schilderen</option>
                                    <option>Tapdansen</option>
                                </select><br>

                                <div id="date-picker" class="md-form md-outline input-with-post-icon datepicker">
                                    <input placeholder="Selecteer datum" type="text" id="date-picker" class="form-control">
                                    <label for="date-picker"></label>
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <br>

                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" id="email"> <br>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary">Verstuur vraag</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        @include('layouts.partials.footer')
    </footer>
@endsection

<script>
    // Data Picker Initialization
    $('.datepicker').datepicker();
</script>
