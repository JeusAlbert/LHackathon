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
            <ul>          
                <li><a class="active" href="modeofpayment"><strong>DONATE</strong></a></li>
                <li><a  href="preloginpage"><strong>HOME</strong></a></li>
                <li><a href="#contact">Contact</a></li>
                <li style="float:right"><a href="aboutuspage"><b>ABOUT US</b></a></li>
                <li style="float:right"><a href="userpage"><b>MY ACCOUNT</b></a></li>
                <li style="float:right"><a href="userpage"><b>DASHBOARD</b></a></li>
            </ul>
        <section class="row" id="tm-section-1">
            <div class="col-lg-12 tm-slider-col">
                <img src="template/img/hands.jpg" alt="Image" style="width:1260px;height:350px;">
                <p>With the rapid pace of industrialization and innovation to better serve the world, 
                   there is also the inevitable deterioration of the natural and marine ecosystem of the world. 
                   We are not only residents to this Earth but the guardians of our home. Last October 6, 
                   the United Nations Intergovernmental Panel on CLimate Change (IPCC) released a warning that we are on track towards having an 1.5℃ in temperature between 2030 and 2052. 
                   This is our wake-up call and we have to heed it. We have to take a stan</p>
            </div>
        </section>      
<!--INFORMATION -->
        <section class="tm-section-2 tm-section-mb" id="tm-section-2">
            <div class="row">
                <div class="col-lg-12 tm-2col-r">
                    <h1>I WILL DONATE:</h1>
                <form action="/action_page.php">
                    <div class="container">    
                    <div id="accordion">
                    <div class="card">
                    <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        <div class="form-check">
                            <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                            ₱500
                            </label>
                        </div> 
                    </a>
                </form>
                </div>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        <div class="form-check">
                            <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                            ₱1000
                            </label>
                        </div> 
                    </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            <div class="form-check">
                            <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                            ₱2000
                            </label>
                        </div>
                        </div> 
                        </a>
                    </div>
                    <div class="card">
                    <div class="card-header">
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                    ₱3000
                                    </label>
                                </div>
                                </div> 
                                </a>
                            </div>
                            <div class="card">
                            <div class="card-header">
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                            <div class="form-check">
                                            <label class="form-check-label" for="check1">
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                            ₱3000
                                            </label>
                                        </div>
                                        </div> 
                                        </a>
                                    </div>
                                    <div class="card">
                                    <div class="card-header">
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                    
            <br><br>    
        </section>
        <h2><u>Information Sheet</u></h2>
        <section class="tm-section-6" id="tm-section-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="contact_message">
                                <form action="/action_page.php" method="post" class="contact-form">
                                    <div class="row mb-2">
                                        <div class="form-group col-xl-6 tm-2col-r">
                                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required/>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required/>
                                        </div>
                                        <div class="form-group col-xl-6 tm-2col-r">
                                            <input type="email" id="email_address" name="email_address" class="form-control" placeholder="Email Address" required/>
                                        </div>
                                        <div class="form-group col-xl-6">
                                            <input type="text" id="contact_num" name="contact_num" class="form-control" placeholder="Contact Number" required/>
                                        </div>
                                        <div class="form-group col-xl-6 tm-2col-r">
                                                 <div class="form-group">
                                                <label for="comment">Message:</label>
                                                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-xs-12">
                            <h2> </h2>
                        </div>  
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
$(document).ready(function(){
$('[data-toggle="popover"]').popover();   
});
        var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
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