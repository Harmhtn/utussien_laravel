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
                    <h4 class="white-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                        Deleniti
                        consequuntur.</h4>
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
                        <p> Ik ben Janneke van Slooten</p>
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
                    <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
                                                                  class="crt-logo crt-tag">Powered by Curator.io</a>
                    </div>
                    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                    <script type="text/javascript">
                        /* curator-feed-default-feed-layout */
                        (function () {
                            var i, e, d = document, s = "script";
                            i = d.createElement("script");
                            i.async = 1;
                            i.src = "https://cdn.curator.io/published/47c541c0-d2be-423d-b9c2-714a101f4112.js";
                            e = d.getElementsByTagName(s)[0];
                            e.parentNode.insertBefore(i, e);
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
