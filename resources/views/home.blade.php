@extends('layouts.app')
@include('layouts.partials.nav')

<!--Main Navigation-->
<header>
    @yield('head')
    {{--    scripts--}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>

        // Load this when the DOM is ready
        $(function () {
            // You used .myCarousel here.
            // That's the class selector not the id selector,
            // which is #myCarousel
            $('carousel1').carousel();
        });
    </script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <link href="{{ asset('css/main.style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.style.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Mask-->
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-10">
                        <!-- Divider -->
                        <hr class="hr-light">
                        <!-- Description -->
                        <h4 class="white-text my-4">
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->
</header>
<!--Main Navigation-->
<!--Main layout-->
<main class="mt-5">
        <div class="container">
            <!--Section: Best Features-->
            <section id="best-features" class="text-center">
                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Wat kun je verwachten</h2>
                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">
                    <!--Grid column-->
                    <div class="col-md-8">
                        <!-- Description -->
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate
                            hic
                            provident nulla repellat
                            facere esse molestiae ipsa labore porro minima quam quaerat rem, natus repudiandae debitis
                            est
                            sit pariatur.</p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="fa fa-camera-retro fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Ervaring</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-heart fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Blijdschap</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-bicycle fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Avontuur</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

        </section>
        <!--Section: Best Features-->
        <hr class="my-5">
        <!--Section: Examples-->
        <section id="examples" class="text-center">
            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold">Prachtige voorbeelden</h2>
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>
                    <h4 class="my-4 font-weight-bold">Titel</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>
                    <h4 class="my-4 font-weight-bold">Titel</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>
                    <h4 class="my-4 font-weight-bold">Titel</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/10.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Titel</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/11.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Titel</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Titel</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!--Section: Examples-->
        <hr class="my-5">
        <!--Section: Gallery-->
        <section id="gallery">
            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Nieuwsbericht</h2>
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 mb-4">
                    <!--Carousel Wrapper-->
                    <div id="carousel1" class="carousel slide carousel-fade carousel-fade"
                         data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="carousel1" data-slide-to="0" class="active"></li>
                            <li data-target="carousel1" data-slide-to="1"></li>
                            <li data-target="carousel1" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner z-depth-1-half" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                     src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
                                     alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                     src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                                     alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                     src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                     alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Vorige</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Volgende</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <!--Excerpt-->
                    <a href="" class="teal-text">
                        <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Lifestyle </strong></h6>
                    </a>
                    <h4 class="mb-3"><strong>Dit is de titel van een nieuwsbericht</strong></h4>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                        quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                        officiis
                        debitis aut rerum.</p>

                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                        quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                        officiis
                        debitis aut rerum.</p>
                    <p>by <a><strong>Harm hendrik ten Napel</strong></a>, 26/08/2020</p>
                    <a class="btn btn-primary btn-md">Lees meer</a>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!--Section: Gallery-->
        <hr class="my-5">
    </div>
</main>
<!--Main layout-->

<!-- Footer -->
<footer class="page-footer font-small">
    <!-- Social buttons -->
    <div class="primary-color">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">
                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Blijf op de hoogte door ons te volgen op social media!</h6>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text mr-4"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-4"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </div>
    <!-- Social buttons -->

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>'t Kunstige Ussien</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Wij horen graag van u dus twijfel niet en neem contact me ons op</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Producten</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    Kwast
                </p>
                <p>
                    Papier
                </p>
                <p>
                    Inkt
                </p>
                <p>
                    Verf
                </p>
            </div>
            <!--/.Second column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i>Urk, Wijk 4-94</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i>Janneke@utussien.nl</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright: Harm Hendrik ten Napel
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<script>

    // Carousel options

    $('#carousel1').carousel({
        interval: 3000,
    });
</script>
