<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ url('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/jquery.fancybox.min.css') }}">
    <link href="{{ url('public/assets/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/style2.css') }}">
    <link rel="icon" href="{{ url('public/assets/img/sm-logo..svg') }}" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/4.0.0/font/MaterialIcons-Regular.ttf">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  	@yield('tittle')
</head>
	<body class="body-five">
		@include('frontend.includes.header')
			@yield('content')
		@include('frontend.includes.footer')
		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ url('public/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ url('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('public/assets/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ url('public/assets/js/waypoints.min.js') }}"></script>

    <script src="{{ url('public/assets/js/jquery.counterup.min.js') }}"></script>

    <script src="{{ url('public/assets/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ url('public/assets/js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ url('public/assets/js/gsap.min.js') }}"></script>
    <script src="{{ url('public/assets/js/simpleParallax.min.js') }}"></script>
    <script src="{{ url('public/assets/js/TweenMax.min.js') }}"></script>

    <script src="{{ url('public/assets/js/jquery.marquee.min.js') }}"></script>

    <script src="{{ url('public/assets/js/wow.min.js') }}"></script>

    <script src="{{ url('public/assets/js/preloader.js') }}"></script>
    <script src="{{ url('public/assets/js/custom.js') }}"></script>
    <script>
        $(".marquee_text").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "top",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>
    @yield('script')
</body>

</html>
