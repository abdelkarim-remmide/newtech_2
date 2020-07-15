<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <!-- Basic page needs
    ============================================ -->
    <title>New Tech Mek | @yield('title', '')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="keywords"
        content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description"
        content="eMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->

    <link rel="shortcut icon" type="image/png" href="/ico/favicon-16x16.png" />


    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('/css/themecss/lib.css')}}" rel="stylesheet">
    <link href="{{asset('/js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('/js/minicolors/miniColors.css')}}" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{asset('/css/themecss/so_searchpro.css')}}" rel="stylesheet">
    <link href="{{asset('/css/themecss/so_megamenu.css')}}" rel="stylesheet">
    <link href="{{asset('/css/themecss/so-categories.css')}}" rel="stylesheet">
    <link href="{{asset('/css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
    <link href="{{asset('/css/themecss/so-newletter-popup.css')}}" rel="stylesheet">

    <link href="{{asset('/css/footer/footer2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/header/header2.css')}}" rel="stylesheet">
    <link id="color_scheme" href="{{asset('/css/home2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/responsive.css')}}" rel="stylesheet">

    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700' rel='stylesheet'
        type='text/css'>
    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif
        }
    </style>
    @yield('extra-css')
</head>

<body class="common-home res layout-2">

    <div id="wrapper" class="wrapper-fluid banners-effect-7">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
    <!-- Include Libs & Plugins
============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('/js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/themejs/libs.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/unveil/jquery.unveil.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/countdown/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/datetimepicker/moment.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- Theme files
============================================ -->

    <script type="text/javascript" src="{{ asset('/js/themejs/application.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/themejs/so_megamenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/themejs/addtocart.js')}}"></script>
    @yield('extra-js')
</body>

</html>
