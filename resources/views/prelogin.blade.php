<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!-- set language using php blade templating engine -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Philam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Style / CSS -->
        <link href="{{ asset('css/sample.css') }}" rel="stylesheet"> <!-- @Albert located in ./public/sample.css -->
        
    </head>
    <body>
        <!-- @Albert all HTML FILES are in resources/views -->
        <!-- @Albert all CS and JAVASCRIPT are in public resources -->

        <header>
                <h2>PHILAM LIFE</h2>
              </header> 
              <div class="container">
              <section>
                    <div class="topnav">
                            <a  href="#home">Home</a>
                            <a href="#news">News</a>
                            <a href="#contact">Contact</a>
                            <div class="topnav-right">
                              <a class="active" href="#search">LOGIN</a>
                              <a href="#about">About</a>
                            </div>
                          </div>
              </section>
            </div>  
              <footer>
                <p>Footer</p>
              </footer>
    </body>
</html>
