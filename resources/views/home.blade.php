@extends('layouts.app')
@include('layouts.partials.nav')

<!--Main Navigation-->
<header>
@yield('head')
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
            <h2 class="m-5 font-weight-bold">Beleefhuis</h2>
            <!--Grid row-->
            <div class="row d-flex justify-content-center mb-4">
                <!--Grid column-->
                <div class="col-md-8">
                    <img src="images/sfeerfoto1.jpg" id="sfeerfoto">
                    <!-- Description -->
                    <p>Zo gauw je het huisje (Ut Ussien) binnenkomt,
                        is het of je een stap terug in de tijd maakt.
                        Oude netten die op zolder hangen te drogen,
                        Koffie die staat te pruttelen op een petroleumstelletje,
                        De klederdracht, de bedstee en een stukje van de schuilkelder.
                        In dit huisje ervaar je hoe het was in de periode tussen 1940 en 1950.
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-4 mb-5">
                    <h4 class="my-4 font-weight-bold">Ervaring</h4>
                    <p>Kijk en doe mee en ervaar hoe het vroeger was hier op het mooie Urk
                    </p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-4 mb-1">
                    <h4 class="my-4 font-weight-bold">Gratis toegang</h4>
                    <p>Kom gezellig langs, en doe een stap terug in de tijd!</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-1 rondleiding">
                    <h4 class="my-4 font-weight-bold">Rondleiding</h4>
                    <ul>
                        <li>Tot 2 jaar oud gratis</li>
                        <li>&#x20AC;2,50 p.p. tot 12 jaar,</li>
                        <li>&#x20AC;4,00 p.p. vanaf 12 jaar</li>
                        <li>Onder de 5 personen hebben we een vast tarief van &#x20AC;16,00</li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

        </section>
        <!--Section:Beleefhuis-->
        <div class="divide_line">
            <hr class="my-5">
        </div>
        <!--Section: Workshops-->
        <section id="workshops" class="text-center">
            <!-- Heading -->
            <h2 class="m-5 font-weight-bold">Workshops</h2>
            <p>In “Ut Kunstige Vissers Ussien” is meer te doen dan alleen maar te kijken!
                Janneke van Slooten, van “Kunst in Opdracht’’ biedt verschillende workshops aan.
                De workshops zijn voor jong, oud, en groepen.
                In overleg is heel veel mogelijk, vraag geheel vrijblijvend voor meer informatie.
                U kunt o.a. kiezen uit verschillende workshops
            </p>
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col col-md-6 mb-4">
                    <h4 class="my-4 font-weight-bold">Urker workshops</h4>
                    <button class="btn btn-outline-info m-2" type="button" data-toggle="collapse"
                            data-target="#collapseUrker" aria-expanded="false" aria-controls="collapseUrker">
                        Meer info
                    </button>
                    <div class="collapse" id="collapseUrker">
                        <div class="card card-body">
                            <ul>
                                <li>Sleutelhangers beschilderen of knopen</li>
                                <li>Schilderen(van Urker tafereeltjes)</li>
                                <li>Tegeltjes beschilderen of stippen</li>
                                <li>Gewoen een vissien eeten(zelf je vis schoonmaken, bakken en natuurlijk opeten)
                                </li>
                                <li>Netten breien/boeten(hier zijn ook lessen in te volgen)</li>
                                <li>Een klomp met een zeiltje(erg populair bij de kinderen)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col col-md-6 mb-4">
                    <h4 class="my-4 font-weight-bold">Workshops met een boodschap</h4>
                    <button class="btn btn-outline-info m-2" type="button" data-toggle="collapse"
                            data-target="#collapseMetBoodschap" aria-expanded="false"
                            aria-controls="collapseMetBoodschap">
                        Meer info
                    </button>
                    <div class="collapse" id="collapseMetBoodschap">
                        <div class="card card-body">
                            <ul>
                                <li>Schilderen</li>
                                <li>Biblejournaling</li>
                                <li>Handlettering</li>
                            </ul>
                            <p>Deze workshops worden gegeven naar aanleiding van een bepaalde Bijbeltekst en is
                                eventueel met Bijbelstudie</p>
                        </div>
                    </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col col-md-6 mb-4">
                    <h4 class="my-4 font-weight-bold">Meer workshops</h4>
                    <button class="btn btn-outline-info m-2" type="button" data-toggle="collapse"
                            data-target="#collapseMeer" aria-expanded="false"
                            aria-controls="collapseMeer">
                        Meer info
                    </button>
                    <div class="collapse" id="collapseMeer">
                        <div class="card card-body">
                            <ul>
                                <li>Handlettering 2.0</li>
                                <li>Schilderen op doek</li>
                                <li>Pegdolls/houten poppetjes beschilderen</li>
                                <li>Aquarellen</li>
                                <li>Tekenen</li>
                            </ul>
                            <p>Deze workshops zijn altijd mogelijk</p>
                        </div>
                    </div>
                </div>
                <!--Grid column-->
                </div>
            <div class="workshop_button ml-1">
                <p><strong>Prijzen zijn vanaf &#x20AC;9,50 p.p.
                        Minimaal 5 personen of vanaf &#x20AC;47,50</strong>
                </p>
                <p>In overleg is heel veel mogelijk</p>
                {{--                <a class="btn btn-primary btn-md text-center" href="{{route('workshops.index')}}">Lees meer</a>--}}
            </div>
            <!--Grid row-->
        </section>
        <!--Section: Workshops-->
        <div class="divide_line">
            <hr class="my-5">
        </div>
        <!--Section: Subsidie-->
        <section id="subsidie" class="text-center">
            <!-- Heading -->
            <h2 class="m-5 font-weight-bold">Subsidie</h2>
            <!--Grid row-->
            <div class="row d-flex justify-content-center mb-4">
                <!--Grid column-->
                <div class="col-md-8">
                    <!-- Description -->
                    <p class="grey-text">‘’Ut Kunstige Vissers Ussien’’ is eigendom van Roel en Janneke van Slooten.
                        Het realiseren van het project is mede mogelijk gemaakt door steun vanuit </p>
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
                    <p class="grey-text">E.L.F.P.O. Europees landbouwfonds voor plattelandsontwikkeling.</p>
                </div>
                <div class="col-md-5 mb-5">
                    <i><img src="images/leader_flevoland_logo.jpg" width="100px" height="50px"></i>
                    <h4 class="my-4 font-weight-bold">Leader</h4>
                    <p class="grey-text">LEADER is onderdeel van het Europese subsidieprogramma voor
                        plattelandsontwikkeling en draagt bij aan de ontwikkeling van plattelandsgebieden en stimuleert
                        de plattelandseconomie. LEADER begon in 1990 en heeft inmiddels twee programmaperioden achter de
                        rug.
                    </p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-5 mb-1">
                    <i><img src="images/leader_flevoland.jpg" width="100px" height="100px"></i>
                    <h4 class="my-4 font-weight-bold">Leader Flevoland</h4>
                    <p class="grey-text">LEADER Flevoland is een subsidieprogramma dat nieuwe projecten op het
                        platteland van Flevoland helpt realiseren.
                        De doelstelling is het platteland duurzaam te ontwikkelen door bottom-up initiatieven te
                        stimuleren die zich richten op economische, ecologische en sociale innovatie.</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 mb-1">
                    <i><img src="images/gemeente_urk_vlag.jpg" width="120px" height="100px"></i>
                    <h4 class="my-4 font-weight-bold">Gemeente Urk</h4>
                    <p class="grey-text">Gemeente Urk heeft meegeholpen om dit project te realiseren</p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

        </section>
        <!--Section:Subsidie-->
        <div class="divide_line">
            <hr class="my-5">
        </div>
        <!--Section: Contact-->
        <section id="contact">
            <!-- Heading -->
            <h2 class="m-5 font-weight-bold text-center">Contact</h2>
            <!--Grid row-->
            <div class="row justify-content-center">
                <!--Grid column-->
                <div class="map-responsive col-md-6 m-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2419.842960385446!2d5.59237981632885!3d52.662814033387185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c884a211a87ddf%3A0x8f6c2506163c9dd6!2sWijk%204%2094%2C%208321%20GH%20Urk%2C%20Nederland!5e0!3m2!1snl!2sus!4v1597150619551!5m2!1snl!2sus"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="container mt-5 mb-4 text-center text-md-left">
                    <div class="row mt-3">

                        <!--First column-->
                        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>'t Kunstige Ussien</strong>
                            </h6>
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
                            <p>
                                <i class="fa fa-home mr-3"></i>Urk, Wijk 4-91</p>
                            <p>
                                <i class="fa fa-envelope mr-3"></i>Janneke@ussien.nl</p>
                            <p>
                                <i class="fa fa-phone mr-3"></i> + 31 6 227 027 84</p>

                        </div>
                        <!--/.Fourth column-->

                    </div>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!--Section: contact-->
        <div class="divide_line">
            <hr class="my-5">
        </div>
        <section id="nieuws">
            <!-- Heading -->
            <h2 class="m-5 font-weight-bold text-center">Nieuws</h2>
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
        <!--/.Footer Links-->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright: Harm Hendrik ten Napel
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</main>
