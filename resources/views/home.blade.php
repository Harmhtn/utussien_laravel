@extends('layouts.app')
@include('layouts.partials.nav')

<!--Main Navigation-->
<header>
    @yield('head')
    {{--    scripts--}}

    <script>

        // Load this when the DOM is ready
        $(function () {
            // You used .myCarousel here.
            // That's the class selector not the id selector,
            // which is #myCarousel
            $('carousel1').carousel();
        });
    </script>
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
    <main class="container">
        <section id="beleefhuis" class="text-center">
            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold">Beleefhuis</h2>
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
        <!--Section:Beleefhuis-->
        <hr class="my-5">
        <!--Section: Workshops-->
        <section id="workshops" class="text-center">
            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold">Workshops</h2>
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
                <div class="workshop_button">
                    <a class="btn btn-primary btn-md text-center" href="{{route('workshops.index')}}">Lees meer</a>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!--Section: Workshops-->
        <hr class="my-5">
        <!--Section: Subsidie-->
        <section id="subsidie" class="text-center">
            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold">Subsidie</h2>
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
            <div class="row justify-content-center">
                <!--Grid column-->
                <div class="col-md-5 mb-5">
                    <i><img src="images/europa_vlag.jpg" width="100px" height="50px"></i>
                    <h4 class="my-4 font-weight-bold">Europa</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <div class="col-md-5 mb-5">
                    <i><img src="images/leader_flevoland_logo.jpg" width="100px" height="80px"></i>
                    <h4 class="my-4 font-weight-bold">Leader</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-5 mb-1">
                    <i><img src="images/leader_flevoland.jpg" width="100px" height="100px"></i>
                    <h4 class="my-4 font-weight-bold">Leader Flevoland</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 mb-1">
                    <i><img src="images/gemeente_urk_vlag.jpg" width="100px" height="80px"></i>
                    <h4 class="my-4 font-weight-bold">Gemeente Urk</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

        </section>
        <!--Section:Subsidie-->
        <hr class="my-5">
        <!--Section: Contact-->
        <section id="contact">
            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Contact</h2>
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 mb-4">
                    <div class="container m-0 p-0">
                        <div id="map-container-google-4" class="z-depth-1-half map-container-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2419.842960385446!2d5.59237981632885!3d52.662814033387185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c884a211a87ddf%3A0x8f6c2506163c9dd6!2sWijk%204%2094%2C%208321%20GH%20Urk%2C%20Nederland!5e0!3m2!1snl!2sus!4v1597148702120!5m2!1snl!2sus"
                                width="500" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <!--Excerpt-->
                    <h4 class="mb-3"><strong>Zo kun je ons bereiken</strong></h4>
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
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!--Section: contact-->
        <hr class="my-5">
        <section id="nieuws">
            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Nieuws</h2>
            <div class="instagram_feed">
                <!-- section nieuws-->
                <!-- Place <div> tag where you want the feed to appear -->
                <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                <script type="text/javascript">
                    /* curator-feed-default-feed-layout */
                    (function(){
                        var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
                        i.src = "https://cdn.curator.io/published/47c541c0-d2be-423d-b9c2-714a101f4112.js";
                        e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
                    })();
                </script>

            </div>
        </section>
    </main>
<!--Main layout-->

<!-- Footer -->
<footer class="page-footer font-small">
    <!-- Social buttons -->
    <div class="primary-color">
        <div class="container">
            <!--Grid row-->
            <div class="social_links row py-4 d-flex align-items-center">
                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Blijf op de hoogte door ons te volgen op social media!</h6>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="social_buttons col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic" href="https://www.facebook.com/utussien">
                        <i class="fa fa-facebook white-text m-4"></i>
                    </a>
                    <!--Instagram-->
                    <a class="social_buttons ins-ic" href="https://www.instagram.com/utussien/">
                        <i class="fa fa-instagram white-text m-lg-4"></i>
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
