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
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div class="container">
    <section class="tm-section-head" id="top">
        <header id="header" class="text-center tm-text-gray">
            <div class = "header">
                <h1>Dashboard</h1>
            </div>
        </header>
        <ul>                <!-- Header -->
            <li><a  href="preloginpage"><strong>HOME</strong></a></li>
            <li><a href="#contact">Contact</a></li>
            <li style="float:right"><a href=""><b>Sign out</b></a></li>
        </ul>
    </section>

    <!-- sidebar -->
    <section class="tm-section-6" id="tm-section-6">
        <div class="row">
            <div class="col-lg-3 col-md-7 col-xs-12">
                <div class="row">
                    <div class="col-lg-2 col-md-7 col-xs-12">
                        <!-- Profile picture -->
                        <img class="pl-2" src="{{ asset('user1.jpg') }}" alt="Profile picture" width="50px">
                    </div>

                    <div class="col-lg-9 col-md-5 col-xs-12 tm-contact-right">
                        <a href="#">Juan Dela Cruz</a> <br>
{{--                        <a href="#">Sign out</a>--}}
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-12 col-md-7 col-xs-12">
                        <h2>Level: 100</h2>
                    </div>
                </div>

                <!-- QR code -->
                <div class="row mt-3">
                    <div class="col-lg-12 col-md-7 col-xs-12">
                        <img class="pl-2" src="{{ asset("qr.png") }}" alt="Qr Code" width="130px">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-12 col-md-7 col-xs-12">
                        <h3>Upcoming events: </h3>
                        <a href="#">• event1</a> <br>
                        <a href="#">• event2</a> <br>
                        <a href="#">• event3</a> <br>
                        <a href="#">• event4</a> <br>
                        <a href="#">• event5</a> <br>
                    </div>
                </div>

            </div>


            <!-- Main -->
            <div class="col-lg-9 col-md-5 col-xs-12 tm-contact-right">
                <div class="col-lg-12">
                    <h2>Tip of the Day</h2>
                    <div class="image">
                        <img src="template/img/planting1.jpg" class="img-fluid"/>
                    </div>
                    <div class="tm-box-3">
                        <h2>REWARDS</h2>
                        <p> Earn points and get a discount to our partner stores.</p>
                    </div>
                </div>

                <hr>

                <!-- Leaderbord -->
                <div class="col-lg-12">
                    <h2>Leaderboards</h2>
                    <table class="table mt-2 table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jose</td>
                                <td>Luna</td>
                                <td>10000xp</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Juan</td>
                                <td>Dela Cruz</td>
                                <td>80000xp</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Juan</td>
                                <td>Dela Cruz</td>
                                <td>70000xp</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr>

                <!-- Philam users near you -->
                <div class="col-lg-12">
                    <h2>Philam users near you</h2>
                    <div style="width: 500px; height: 500px;">
                        @php
                            use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
                            Mapper::map(14.586553, 121.065575, ['zoom' => 17, 'markers' => ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP']])
                                ->circle([['latitude' => 14.586553, 'longitude' => 121.065575]],
                                    ['strokeColor' => '#000000', 'strokeOpacity' => 0.1, 'strokeWeight' => 2, 'fillColor' => '#add8e6', 'radius' => 150]);;
                            Mapper::marker(14.587186, 121.064824);
                            Mapper::marker(14.585986, 121.064824);
                            Mapper::marker(14.585785, 121.066358);
                        @endphp
                        {!! Cornford\Googlmapper\Facades\MapperFacade::render() !!}
                    </div>
                </div>

                <hr>

                <!-- Quest -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-7 col-xs-12" style="background-color: skyblue">
                            <h2>Quests 1: (4000 xp)</h2>
                            <p>Donate a tree</p>
                            <a type="button" class="btn btn-default btn-sm pull-right">Proceed to Quest
                            </a>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Quest -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-7 col-xs-12" style="background-color: skyblue">
                            <h2>Quests 2: (4000 xp)</h2>
                            <p>Donate to charity</p>
                            <a type="button" class="btn btn-default btn-sm pull-right">Proceed to Quest
                            </a>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Quest -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-7 col-xs-12" style="background-color: skyblue">
                            <h2>Quests 3: (4000 xp)</h2>
                            <p>Invite a friend</p>
                            <a type="button" class="btn btn-default btn-sm pull-right">Proceed to Quest
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--<!--Another information -->
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
    </section>--}}

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
