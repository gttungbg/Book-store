<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('title')
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    @yield('css')
</head>
<body>

@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')
<script src="{{ asset('frontend/js/menu.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
@yield('js')
</body>
</html>
