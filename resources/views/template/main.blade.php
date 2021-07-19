<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Metadata -->
    <meta name="description" content="Ganesha Interactive Media ITB">
    <!-- END of Metadata -->

    <!-- Local CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <!-- END of Local CSS -->

    <!-- Metas -->
    <link rel="icon" type="image/png" sizes="192x171" href="{{URL::asset('assets/logo/itbmun2020-logo.png')}}">
    <!-- END of Metas -->

    <!-- CSS -->
    <!-- JS -->

    @yield('style')
</head>

<body>
    @include('components.navbar-main')
    @yield('content')
    @include('components.footer-main')
</body>
    @yield('script')
</html>