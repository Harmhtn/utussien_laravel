@extends('layouts.app')
@include('layouts.partials.nav')
<head>
    <link href="{{ asset('public/css/contact.style.css') }}" rel="stylesheet">
</head>
@section('content')
    <!--Section: Contact-->
    <section id="contact">

        <!-- Heading -->
        <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-5 col-md-12">
                <!-- Form contact -->
                <form class="p-5 grey-text">
                    <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                        <input type="text" id="form3" class="form-control form-control-sm">
                        <label for="form3">Your name</label>
                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control form-control-sm">
                        <label for="form2">Your email</label>
                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
                        <input type="text" id="form32" class="form-control form-control-sm">
                        <label for="form34">Subject</label>
                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                        <label for="form8">Your message</label>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                    </div>
                </form>
                <!-- Form contact -->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-7 col-md-12">

                <!--Grid row-->
                <div class="row text-center">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-3">

                        <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>New York, NY 10012</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-22:00</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+ 01 234 567 89</p>

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
