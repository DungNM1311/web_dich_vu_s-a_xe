<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../assets/images/nh-wrench-850x850.jpg" type="image/x-icon"> -->
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/soundcloud-plugin/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
 
  
</head>
<body>
@include('layouts.header')

@yield('content')


@include('layouts.footer')
  <script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/popper/popper.min.js')}}"></script>
  <script src="{{asset('assets/tether/tether.min.js')}}"></script>
  <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script>
  <script src="{{asset('assets/dropdown/js/script.min.js')}}"></script>
  <script src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
  <script src="{{asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')}}"></script>
  <script src="{{asset('assets/mbr-clients-slider/mbr-clients-slider.js')}}"></script>
  <script src="{{asset('assets/parallax/jarallax.min.js')}}"></script>
  <script src="{{asset('assets/theme/js/script.js')}}"></script>
 
</body>
</html>