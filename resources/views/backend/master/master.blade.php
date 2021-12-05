<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @yield('title')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favicon.png') }}">
    <link href="{{ asset('backend/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/chartist.min.css') }}">
    <link href="{{ asset('backend/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    @yield('css')
</head>
<body>

<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>

<div id="main-wrapper">

    @include('backend.layouts.header')

    @include('backend.layouts.sidebar')

    @yield('content')

    @include('backend.layouts.footer')

</div>

<!-- Required vendors -->
<script src="{{ asset('backend/js/global.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('backend/js/custom.min.js') }}"></script>
<script src="{{ asset('backend/js/deznav-init.js') }}"></script>

<!-- Counter Up -->
<script src="{{ asset('backend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.counterup.min.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('backend/js/jquery.peity.min.js') }}"></script>
@yield('js')
</body>
</html>
