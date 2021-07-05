<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bruges - Interior and Architecture HTML Template | Homepage Style One</title>
<!-- Stylesheets -->
<link href="{{ asset('front/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('front/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('front/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('front/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('front/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('front/css/responsive.css')}}" rel="stylesheet">

<link href="{{ asset('front/css/jquery.datetimepicker.css')}}" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('front/css/color-themes/olive-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('front/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('front/images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>

    @include('front.layouts.header')

    @yield('front_content')

    @include('front.layouts.footer')