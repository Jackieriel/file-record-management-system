<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('File Indexing Management System') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/toastr/toastr.min.css') }}" >

</head>

<body>
    <x-admin.sidebar />
    @yield('content')
    <x-admin.footer />




    <!-- Scripts -->
    {{-- <script src="{{ asset('assets/bootstrap/jquery-3.2.1.slim.min.js') }}"></script> --}}


    <script src="{{ asset('assets/toastr/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>

    {{-- <script src="{{ asset('assets/bootstrap/popper.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script> --}}


    <script src="{{ asset('assets/js/admin.js') }}"></script>

    <x-notifications />

    @yield('scripts')
</body>

</html>
