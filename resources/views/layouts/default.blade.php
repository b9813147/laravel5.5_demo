<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'laravel5.5_Demo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('layouts._header')
<div class="container">
    @include('share._message')
    @yield('content')
    @include('layouts._footer')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
