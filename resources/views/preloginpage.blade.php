<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Philam Life</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset('template/font-awesome-4.5.0/css/font-awesome.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('template/slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/css/tooplate-style.css') }}">
    <!-- tooplate style -->

    <script>
        var renderPage = true;

        if (navigator.userAgent.indexOf('MSIE') !== -1
            || navigator.appVersion.indexOf('Trident/') > 0) {

            alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
            renderPage = false;
        }
    </script>

</head>
<body>
<!-- Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="container">
        <section class="tm-section-head" id="top">
            <header id="header" class="text-center tm-text-gray">
                <div class = "header">
                    <h1>Philam Life</h1>
                </div>
            </header>
            <ul>                        <!-- Insert here in the donation. The loginpage   -->
                    <li><a class="active" href="loginpage"><strong>DONATE</strong></a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li style="float:right"><a href="loginpage"><b>LOGIN</b></a></li>
            </ul>
<!-- Slider Pictures -->
        <section class="row" id="tm-section-1">
            <div class="col-lg-12 tm-slider-col">
                <div class="tm-img-slider">
                    <div class="tm-img-slider-item" href="template/img/gallery-img-01.jpg">
                        <p class="tm-slider-caption">The family plants together grows together</p>
                        <img src="template/img/family.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="template/img/hands.jpg">
                        <p class="tm-slider-caption">Plant a TREE</p>
                        <img src="template/img/hands.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="template/img/silo.jpg">
                        <p class="tm-slider-caption">Take action for your hereafter</p>
                        <img src="template/img/silo.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="template/img/black.jpg">
                        <p class="tm-slider-caption">Help a child today by providing them a clean environment.</p>
                        <img src="template/img/black.jpg" alt="Image" class="tm-slider-img">
                    </div>
                </div>
            </div>
        </section>

<!--Rewards and Another info -->
        <section class="tm-section-2 tm-section-mb" id="tm-section-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="template/img/soil.jpeg" class="img-fluid"/>
                    </div>
                    <div class="tm-box-3">
                        <h2>REWARDS</h2>
                        <p> It's future proof initiative that will lead a bright path for the next generation.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                        <div class="image">
                            <img src="template/img/planting1.jpg" class="img-fluid"/>
                        </div>
                        <div class="tm-box-3">
                            <h2>BIGAY BUHAY</h2>
                            <p> Tree Planting 2019. Build the future by building the environment</p>
                        </div>
                </div>
            </div>
        </section>
<!-- Contact Us -->
                <div class="col-lg-5 col-md-5 col-xs-12 tm-contact-right">
                    <div class="tm-address-box">
                        <h2 class="mb-4"><b>Contact Us</b></h2>
                        <p class="mb-5">Be the part of the the journey to save our mother earth</p>
                        <address>
                            MetroWalk Pasig
                            <br> Metrotent
                            <br> Philam Life Insurance
                        </address>
                    </div>
                </div>
        </section>
        <footer class="mt-5">
        </footer>
    </div>

    <!-- load JS files -->
    <script type="text/javascript" src="{{ asset('template/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js')}}"></script>
    <!-- https://popper.js.org/ -->
    <script src="{{ asset('template/js/bootstrap.min.js') }} "></script>
    <!-- https://getbootstrap.com/ -->
    <script type="text/javascript" src="{{ asset('template/slick/slick.min.js') }}"></script>
    <!-- Slick Carousel -->

    <script>
        function setCarousel() {
            var slider = $('.tm-img-slider');

            if (slider.hasClass('slick-initialized')) {
                slider.slick('destroy');
            }

            if ($(window).width() > 991) {
                // Slick carousel
                slider.slick({
                    autoplay: true,
                    fade: true,
                    speed: 800,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            } else {
                slider.slick({
                    autoplay: true,
                    fade: true,
                    speed: 800,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            }
        }

        $(document).ready(function () {
            if (renderPage) {
                $('body').addClass('loaded');
            }

            setCarousel();

            $(window).resize(function () {
                setCarousel();
            });

            // Close menu after link click
            $('.nav-link').click(function () {
                $('#mainNav').removeClass('show');
            });

            // https://css-tricks.com/snippets/jquery/smooth-scrolling/
            // Select all links with hashes
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function (event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top + 1
                            }, 1000, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });
        });
    </script>

</body>

</html>
