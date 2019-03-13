<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <title>@yield('page_title', 'Projects App')</title>
        <style media="screen">
          .is-complete{
            text-decoration: line-through;
          }
        </style>
    </head>
    <body>
        @include('nav')
        @yield('content')
    </body>
</html>
