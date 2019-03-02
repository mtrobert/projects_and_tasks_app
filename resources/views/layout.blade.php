<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page_title', 'Projects App')</title>

    </head>
    <body>
        @yield('nav')
        @yield('content')
    </body>
</html>
