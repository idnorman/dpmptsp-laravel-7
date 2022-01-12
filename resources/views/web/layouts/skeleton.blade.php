<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }} &mdash; @yield('title', 'Portal')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/img/favicon.ico') }}">
    
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/plugins.css') }}">
    <!-- rypp -->
    <link rel="stylesheet" href="{{ asset('web/css/rypp.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('web/style.css') }}">

    <style type="text/css">
        .imagex{
            width:584px; 
            height:390px;
        }

        .imagexnya{
            width:100%; 
            height:100%; 
            object-fit:cover;
        }
    </style>
    <!-- Modernizer JS -->
    <script src="{{ asset('web/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper">
 

 @yield('app')


    
    
</div>
<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('web/js/vendor/jquery-1.12.0.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('web/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('web/js/plugins.js') }}"></script>
<!-- rypp JS -->
<script src="{{ asset('web/js/rypp.js') }}"></script>
<script src="{{ asset('web/js/ytp-playlist.js') }}"></script>
<!-- Ajax Mail JS -->
<script src="{{ asset('web/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('web/js/main.js') }}"></script>

</body>

</html>