<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eVoting') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('vendor/assets/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendor/assets/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/fontawesome/css/all.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/assets/main.css') }}">
</head>

<body class="land-bg height-100-vh">

    @yield('content')

</body>

</html>
