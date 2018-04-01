<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Codetinerant, Jesray Garciano Web developer" />
        <meta name="keywords" content="Jesray, Codetinerant, Jesray Garcano, Garciano, Web developer, Jesray Garciano Web developer" />
        <meta name="author" content="Jesray Garciano" />
        <meta name="copyright" content="Jesray Garciano" />

        <title>{{ config('app.name', 'Codetinerant') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{-- Main CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />
<--end meta -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body>



        <div class="container">
        <div class="split left">
            <h1>Code mode</h1>
            <a href="#!" class="button">Click mode</a>
        </div>

        <div class="split right">
            <h1>Mountain mode</h1>
            <a href="#!" class="button">Click mode</a>
        </div>
        </div>

        
        <script type="text/javascript">
            const left = document.querySelector('.left');
            const right = document.querySelector('.right');
            const container = document.querySelector('.container');

            left.addEventListener('mouseenter', () => {
                container.classList.add('hover-left');
            });

            left.addEventListener('mouseleave', () => {
                container.classList.remove('hover-left');
            });

            right.addEventListener('mouseenter', () => {
                container.classList.add('hover-right');
            });

            right.addEventListener('mouseleave', () => {
                container.classList.remove('hover-right');
            });
        </script>
    </body>
</html>
