<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Brand</a>
                </div>
            </nav>

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </body>
</html>
