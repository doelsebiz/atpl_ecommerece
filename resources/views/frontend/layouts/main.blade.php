<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ url('public/front/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ url('public/front/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ url('public/front/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ url('public/front/css/fontawesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public/front/css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ url('public/front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/jquery.fancybox.min.css') }}">

    <link href="{{ url('public/front/css/boxicons.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public/front/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/style2.css') }}">

    <link rel="icon" href="{{ url('public/front/img/sm-logo..svg') }}" type="image/gif" sizes="20x20">
  	@yield('tittle')
</head>
	<body class="body-five">
		@include('frontend.includes.header')
			@yield('content')
		@include('frontend.includes.footer')
		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ url('public/front/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ url('public/front/js/popper.min.js') }}"></script>
    <script src="{{ url('public/front/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('public/front/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ url('public/front/js/waypoints.min.js') }}"></script>

    <script src="{{ url('public/front/js/jquery.counterup.min.js') }}"></script>

    <script src="{{ url('public/front/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ url('public/front/js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ url('public/front/js/gsap.min.js') }}"></script>
    <script src="{{ url('public/front/js/simpleParallax.min.js') }}"></script>
    <script src="{{ url('public/front/js/TweenMax.min.js') }}"></script>

    <script src="{{ url('public/front/js/jquery.marquee.min.js') }}"></script>

    <script src="{{ url('public/front/js/wow.min.js') }}"></script>

    <script src="{{ url('public/front/js/preloader.js') }}"></script>
    <script src="{{ url('public/front/js/custom.js') }}"></script>
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
