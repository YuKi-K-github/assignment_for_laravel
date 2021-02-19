<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
        @yield('style')
        <title>assignment</title>
    </head>
    <body>
        <div class="close"></div>
        <div class="header">
            <div class="row no-gutters">
                <h4 class="col-lg-2">assignment</h4>
                @if($name === '')
                    <a href="/login" class="offset-lg-8 col-lg-1">Login</a>
                    <a href="/login/create" class="col-lg-1">Register</a>
                @else
                    <p class="user_name offset-lg-8 col-lg-2">{{ $name }} ▼</p>
                    <div class="logout">Logout</div>
                @endif
            </div>
        </div>
        <div class="contents">
            @yield('contents')
        </div>
        <script src="js/login.js"></script>
    </body>
</html>
