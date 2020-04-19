<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tweety</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
            Tweety
        </div>

        <div class="links ">


            @auth
                <a href="{{ url('/home') }}" class="ml-3">Home</a>

            @else
                <a href="{{ route('login') }}">Login</a>

                <a href="{{ route('register') }}">Register</a>

            @endauth

        </div>
    </div>
</div>
</body>
</html>
