<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title') Maggoplastgel</title>

    <meta name="author" content="Maggoplastgel.com">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/bootstrap.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/responsive.css') }}">

    <!-- icoomon font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/icomoon.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('assets/icon/Favicon.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('assets/icon/Favicon.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('assets/icon/Favicon.png') }}" rel="shortcut icon">

    <!-- anime -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/animate.css') }}">

    @stack('style')

</head>

<body>

    @include('components.header')

    @yield('main')

    @include('components.footer')

    @stack('scripts')

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/owlcarousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/jquery-validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/countto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>
    <!-- /javascript -->

    <!-- slider -->
    <script src="{{ asset('assets/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/rev-slider.js') }}"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js') }}"></script>

</body>

</html>
