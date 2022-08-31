<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codelab infotech</title>
    <link rel="stylesheet" href="{{ url('public/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    @yield('css')
</head>
<body class="home-section">
@include('layouts.header')
@yield('content')
@include('layouts.footer')
</body>
<script src="{{ url('public/js/jquery.js') }}"></script>
<script src="{{ url('public/js/bootstrap/bootstrap.js') }}"></script>
</html>


