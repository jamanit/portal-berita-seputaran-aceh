<?php date_default_timezone_set('Asia/Jakarta'); ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('/') }}img/default/logo-square.png" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/') }}adminlte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}adminlte3/plugins/fontawesome-free/css/all.min.css">
    <!-- Navbar Costume -->
    <!-- <link rel="stylesheet" href="{{ asset('/') }}navbar-costume/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}navbar-costume/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}navbar-costume/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}navbar-costume/css/style.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}adminlte3/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="container">
        <div class="wrapper">
            @include('layouts.navbar')
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/') }}adminlte3/plugins/jquery/jquery.min.js"></script>
    <!-- Navbar Costume -->
    <!-- <script src="{{ asset('/') }}navbar-costume/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/') }}navbar-costume/js/popper.min.js"></script>
    <script src="{{ asset('/') }}navbar-costume/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}navbar-costume/js/jquery.sticky.js"></script>
    <script src="{{ asset('/') }}navbar-costume/js/main.js"></script> -->
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/') }}adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/') }}adminlte3/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/') }}adminlte3/dist/js/demo.js"></script>
    <!-- Content Script -->
    @yield('script')
</body>

</html>