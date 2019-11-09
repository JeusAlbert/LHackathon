<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!-- set language using php blade templating engine -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Philam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Style / CSS -->
        <!-- @Albert all FRONTEND FILES are in the following folders -->
        <!-- ./public/ -->
        <!-- ./resources/views -->

        <!-- @Albert all WEBSITE LINKS are found in ./routes/web file-->
    </head>
    <body>
        <!-- @Albert all HTML FILES are in resources/views -->
        <!-- @Albert all CS and JAVASCRIPT are in public resources -->


        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Philam Life
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                </div>

            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
