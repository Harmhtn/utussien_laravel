@extends('layouts.app')
<head>
    <link href="{{ asset('css/kunst.style.css') }}" rel="stylesheet">
</head>
<!--Mask-->
<nav class="navbar sticky-top navbar-dark">
    <a class="navbar-brand" href="{{ url('/home') }}"><img src="favicon.ico" alt="logo_img">
    </a>
</nav>

<div id="intro" class="view">
    <div class="mask rgba-black-strong">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-10">
                    <!-- Heading -->
                    <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Janneke Kunst in
                        Opdracht</h2>
                    <!-- Divider -->
                    <hr class="hr-light">
                    <!-- Description -->
                    <h4 class="white-text my-4">Jullie moeten elkaar helpen. God zal ervoor zorgen dat jullie dat kunnen.
                        Want hij heeft aan ieder van jullie een bijzondere kracht gegeven,
                        die je goed moet gebruiken</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.Mask-->
<main class="container">
    <div class="divide_line">
        <hr class="my-5">
    </div>
    <section id="info" class="text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Over mij</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <img src="images/janneke_foto.jpg" alt="janneke_foto" class="janneke_foto">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>In 2014 is Janneke begonnen met schilderen.
                            Ze heeft veel lessen en workshops gevolgd om steeds nieuwe technieken te ontwikkelen. Ondertussen kreeg ze de smaak van tekenen ook te pakken.
                            Nu geeft ze creatieve  workshops en werkt ze vooral veel in Opdracht , zo wel schilderen als bv portret tekeningen.
                        </p>
                        <p> Als u goed kijkt zie je dat Opdracht met een hoofdletter is geschreven.
                            Dit is voor Janneke heel belangrijk, ze mag ervaren dat ze dit in Opdracht mag doen van haar Hemelse Vader.
                            Daar is ze elke dag zeer dankbaar voor en deelt ze dit graag met jou.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="divide_line">
        <hr class="my-5">
    </div>
    <section id="video" class="text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class='embed-container'>
                    <iframe src="https://www.youtube.com/embed/ZEiKTJG66uI" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <div class="divide_line">
        <hr class="my-5">
    </div>
    <section id="social_media" class="text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Social media</h1>
                <div class="instagram_feed">
                    <!-- section nieuws-->
                    <!-- Place <div> tag where you want the feed to appear -->
                    <div id="curator-feed-janneke-kunst-in-opdracht-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                    <script type="text/javascript">
                        /* curator-feed-janneke-kunst-in-opdracht-layout */
                        (function(){
                            var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
                            i.src = "https://cdn.curator.io/published/7a58bd2c-fcff-4caf-8e77-187783e7b82a.js";
                            e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
                        })();
                    </script>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="page-footer font-small">
    <!-- Social buttons -->
    <div class="primary-color">
        <div class="container">
            <div class="footer-copyright text-center py-3">
                © 2020 Copyright: Harm Hendrik ten Napel
            </div>
            <!-- Copyright -->
        </div>
    </div>
</footer>
