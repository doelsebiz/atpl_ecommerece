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
	<body class="home-dark2 tt-magic-cursor">
		@include('frontend.includes.header')
			@yield('content')
		@include('frontend.includes.footer')
        <div id="querymodal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-dialog-centered">

                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close pop-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="row">
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-8">
                            <div class="rightsidemodal">
                                <h4>Let’s Brew Success For Your <br> Business!</h4>
                                <form id="updategeneralepic" method="POST" action="{{ url('sendqnquery') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Name" class="form-control" name="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Name" class="form-control" name="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Email" name="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control" placeholder="Write Your Message"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="savechangebutton">Get In Touch</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

              </div>
            </div>
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
         $(".primary-btn3").on('click', function(e){
             $('#querymodal').modal('show');
          });
         $('#updategeneralepic').on('submit',(function(e) {
            $('.savechangebutton').html('<i class="fa fa-spin fa-spinner"></i>');
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: $(this).attr('action'),
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data){
                    
                }
            });
        }));
    </script>
    @yield('script')
    <style type="text/css">
        .savechangebutton{
            background-color: #89c728;
            font-size: 18px;
            font-weight: bold;
            text-align: left;
            color: #ffffff;
            border: 1px solid #89c628;
            transition: .5s;
            margin-bottom: 0;
            height: 50px;
            padding: 0 20px;
            border-radius: 5px;
            margin-top: 0;
            width: 200px;
            text-align: center;
        }
        .modal-dialog {
            max-width: 614px;
            margin: 1.75rem auto;
        }
        .rightsidemodal{
            padding: 10px;
        }
        .pop-close{
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            opacity: 1;
            position: absolute;
            width: 30px;
            height: 30px;
            font-size: 30px;
            background-color: #a7d86f !important;
            color: #fff;
            border-radius: 50%;
            top: -10px;
            right: -5px;
            float: right;
            font-size: 28px;
            padding-top: 5px;
            padding-left: 1px;
            line-height: 1;
            /* color: #000; */
            /* text-shadow: 0 1px 0 #fff; */
            filter: alpha(opacity = 20);
        }
        .pop-close span{
            line-height: .8;
            margin: 0px;
            padding: 0px;
            width: 30px;
            height: 30px;
            display: block;
            vertical-align: 0px;
            position: static;
            font-weight: 100;
            opacity: 1;
        }
        #querymodal h4 {
            font-size: 27px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            letter-spacing: normal;
            text-align: left;
            color: #2e343c;
            margin: 0;
            line-height: 1.3;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
    
</body>

</html>
