<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
    @yield('header')
    </header>
    <div class="container uform">
    @yield('dictform')
    </div>

    @yield('content')

    <script type="text/javascript" src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/app.js') }}"></script>
</body>
</html>
