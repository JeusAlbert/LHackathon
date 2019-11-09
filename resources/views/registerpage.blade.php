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
    <link rel="stylesheet" type="text/css" href="{{ asset('template/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('template/slick/slick-theme.css') }}"/>
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
            <div class="header">
                <h1>Philam Life</h1>
            </div>
        </header>
        <ul>                <!-- Papasok sa prelogin page lang -->
            <li><a href="#tm-section-1"><strong>HOME</strong></a></li>
            <li><a href="#contact">Contact</a></li>
            <li style="float:right"><a href="#tm-section-3"><b>ABOUT US</b></a></li>
        </ul>

        <section class="tm-section-6" id="tm-section-6">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-xs-12">
                    <div class="contact_message">
                            <form action="{{ route("register.store") }}" method="post" class="contact-form">
                            {{ csrf_field() }}
                            @if($errors->any())
                                <ul>
                                @foreach ($errors->all() as $message)
                                    <li style="color:red">{{ $message }}</li>
                                @endforeach
                                </ul>
                            @endif

                            @if(session()->has('success-msg'))
                                <p style="color:green">{!! session()->get('success-msg') !!}</p>
                            @endif
                            <div class="row mb-2">
                                <div class="form-group col-xl-6 tm-2col-r">
                                    <input type="text" id="first_name" name="first_name" class="form-control"
                                           placeholder="Firstname" required/>
                                </div>
                                <div class="form-group col-xl-6">
                                    <input type="text" id="last_name" name="last_name" class="form-control"
                                           placeholder="Lastname" required/>
                                </div>
                                <div class="form-group col-xl-6 tm-2col-r">
                                    <input type="email" id="email_address" name="email" class="form-control"
                                           placeholder="Email Address" required/>
                                </div>
                                <div class="form-group col-xl-6">
                                    <input type="number" id="contact_num" name="contact_number" class="form-control"
                                           placeholder="Contact Number" required/>
                                </div>
                                <div class="form-group col-xl-6 tm-2col-r">
                                    <select style="height: 55px" name="gender" id="gender" class="form-control">
                                        <option value="">--Select Gender--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-6">
                                    <input type="password" id="password" name="password" class="form-control"
                                           placeholder="Password" required/>
                                </div>
                                <div class="col-lg-5 col-md-5 tm-2col-r">
                                    <div class="form-group col-xl-6 pl-xl-1">
                                        <button type="submit" class="btn tm-btn-submit btn-big">Register</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12">
                    <h2>Please fill up all the requirements needed for something big</h2>
                </div>
            </div>
        </section>

        <!--INFORMATION -->
        <section class="tm-section-2 tm-section-mb" id="tm-section-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image">
                        <img src="template/img/planting1.jpg" class="img-fluid"/>
                    </div>
                    <div class="tm-box-3">
                        <h2>REWARDS</h2>
                        <p> Earn points and get a discount to our partner stores.</p>
                    </div>
                </div>
            </div>
        </section>

        <footer class="mt-5">

        </footer>
    </section>
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
                                }
                                ;
                            });
                        }
                    }
                });
        });
    </script>

</body>
</html>
