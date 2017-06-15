<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                @yield('header')
            </div>
                @yield('content')
        </div>
    </body>
</html>
