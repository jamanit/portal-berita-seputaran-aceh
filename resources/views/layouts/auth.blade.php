<?php date_default_timezone_set('Asia/Jakarta'); ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'Seputaran Aceh - Halaman Depan' }}</title>
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('/') }}img/default/logo-square.png" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}adminlte3/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}adminlte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}adminlte3/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page bg-danger">
    <div class="login-box">
        <div class="card card-outline card-primary text-dark">
            <div class="card-header text-center">
                <a href="{{ asset('/') }}" style="text-decoration:none; color: inherit;">
                    <img src="{{ asset('/') }}img/default/logo-longsquare.png" alt="" width="160px" height="35">
                </a>
            </div>

            @yield('content')

        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/') }}adminlte3/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/') }}adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/') }}adminlte3/dist/js/adminlte.min.js"></script>
</body>

</html>