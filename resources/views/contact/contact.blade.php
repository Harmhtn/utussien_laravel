@extends('layouts.app')
@include('layouts.partials.nav')
<head>
    <link href="{{ asset('public/css/contact.style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
@section('content')
    <!--Section: Contact-->
    <section id="contact">
        <div class="container">
        <button class="nav-link btn btn-outline-info m-2" onclick="goBack()">Ga terug</button>

        <!-- Heading -->
        <h2 class="mb-5 font-weight-bold text-center">Neem contact met ons op</h2>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-5 col-md-12">
                <!-- Form contact -->
                <form class="p-5 grey-text">
                    <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                        <label for="form3">Je naam</label>
                        <input type="text" id="form3" class="form-control form-control-sm">

                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                        <label for="form2">Je email</label>
                        <input type="text" id="form2" class="form-control form-control-sm">

                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
                        <label for="form34">Onderwerp</label>
                        <input type="text" id="form32" class="form-control form-control-sm">

                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                        <label for="form8">Je vraag</label>
                        <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>

                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary">Verstuur bericht <i class="fa fa-paper-plane-o ml-1"></i></button>
                    </div>
                </form>
                <!-- Form contact -->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-5 col-md-12">

                <!--Grid row-->
                <div class="row text-center">

                    <!--Grid column-->
                    <div class="col-lg-7 col-md-12 mb-3">

                        <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>Urk, 8321 ZG</p>
                        <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Maandag - Vrijdag, 8:00-22:00</p>
                        <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+ 01 234 567 89</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-3">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-3">

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Google map-->
                <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px"></div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
        </div>
    </section>
    <!--Section: Contact-->

    <footer class="row">
        @include('layouts.partials.footer')
    </footer>
@endsection

<script>
    // Regular map
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "New York"
        });
    }

    // Initialize maps
    google.maps.event.addDomListener(window, 'load', regular_map);
</script>
