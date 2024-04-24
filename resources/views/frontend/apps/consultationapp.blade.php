@extends('frontend.layouts.main')
@section('tittle')
<title>Consultation App</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('public/assets/css/consultation-app/style.css') }}" />
<!-- On Scroll Animations -->
<link href="{{ url('public/app/css/animate.css') }}" rel="stylesheet">

<!-- TEMPLATE CSS -->
<link href="{{ url('public/app/css/style.css') }}" rel="stylesheet">

<!-- RESPONSIVE CSS -->
<link href="{{ url('public/app/css/responsive.css') }}" rel="stylesheet">
<!-- HERO-1
   ============================================= -->
<section id="hero-1" class="bg-fixed hero-section division">
   <div class="container">
      <div class="row">
         <!-- HERO TEXT -->
         <div class="col-md-7 col-lg-6">
            <div class="hero-txt white-color">
               <!-- Title -->
               <h2 style="font-size: 2.75rem;" class="h2-lg animated" data-animation="fadeInUp" data-animation-delay="300">
                  Launch Your Branded Online Consultation Mobile Apps For
               </h2>
               <!-- Text -->
               <h2>
                  <a href="" class="typewrite" data-period="2000" data-type='["Healthcare Services" , "Education Services", "Astrology Services","Legal Services","Fitness Services","Meditation Services"]'>
                  <span class="wrap"></span>
                  </a>
               </h2>
               <div class="onlyRowCtas"> 
               		<a class="primary-btn3" style="display: inline-block;">Get Started</a>
               	</div>
               <!-- HERO STORE BADGES -->
               <!-- End Store Badges -->
            </div>
            <!-- End row -->
         </div>
         <!-- End container -->
         <!-- HERO IMAGE -->
         <div class="col-md-5 col-lg-5 offset-lg-1 animated" data-animation="fadeInRight" data-animation-delay="400">
            <div class="">
            	<img src="https://www.code-brew.com/wp-content/uploads/2020/05/group-7@2x-1.png">
            </div>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<section class="common-section-all what-you-get beckDarkGround noBeckGroundOnlyGrey">
   <div class="container" bis_skin_checked="1">
		<ul class="setting-consult-list">
			<li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
				<sub class="green-small-head">Industries</sub>
				<h2 class="black-big-head">Online Consultation Solution For All Industries</h2>
			</li>
			<li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
				<img class="lazy_a" src="https://www.code-brew.com//wp-content/uploads/2020/05/bitmapertretrtwrewr456456ert@2x-1.jpg" data-original="/wp-content/uploads/2020/05/bitmapertretrtwrewr456456ert@2x-1.jpg" alt="How-Consultation-App-Works" style="">
				<i><img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/05/phonendoscope@3x.png" data-original="/wp-content/uploads/2020/05/phonendoscope@3x.png" alt="How-Consultation-App-Works" style=""></i>
				<h5>
					Doctors
				</h5>
			</li>
			<li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
				<img class="lazy_a" src="https://www.code-brew.com//wp-content/uploads/2020/05/lawyer@2x.png" data-original="/wp-content/uploads/2020/05/lawyer@2x.png" alt="Standalone-Consultation-App" style="">
				<i><img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/05/miscellaneous@2x.png" data-original="/wp-content/uploads/2020/05/miscellaneous@2x.png" alt="Standalone-Consultation-App" style=""></i>
				<h5>
					Lawyers
				</h5>
			</li>
			<li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
				<img class="lazy_a" src="https://www.code-brew.com//wp-content/uploads/2020/05/dietitian@2x.jpg" data-original="/wp-content/uploads/2020/05/dietitian@2x.jpg" alt="Online-Conversational-Marketplaces" style="">
				<i><img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/05/diet@2x.png" data-original="/wp-content/uploads/2020/05/diet@2x.png" alt="Online-Conversational-Marketplaces" style=""></i>
				<h5>
					Dietitians	
				</h5>
			</li>
			<li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
				<img class="lazy_a" src="https://www.code-brew.com//wp-content/uploads/2020/05/tutor@2x.jpg" data-original="/wp-content/uploads/2020/05/tutor@2x.jpg" alt="Online-Consultation-Business" style="">
				<i><img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/05/group-12@2x-1.png" data-original="/wp-content/uploads/2020/05/group-12@2x-1.png" alt="Online-Consultation-Business" style=""></i>
				<h5>
					Tutors
				</h5>
			</li>
			<li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
				<img class="lazy_a" src="https://www.code-brew.com//wp-content/uploads/2020/05/yogatrainer@2x.jpg" data-original="/wp-content/uploads/2020/05/yogatrainer@2x.jpg" alt="Online-Consultation-Solution" style="">
				<i><img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/05/yoga-1@2x.png" data-original="/wp-content/uploads/2020/05/yoga-1@2x.png" alt="Online-Consultation-Solution" style=""></i>
				<h5>
					Yoga Experts 
				</h5>
			</li>
			<li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
				<img class="lazy_a" src="https://www.code-brew.com//wp-content/uploads/2020/05/fitness@2x.jpg" data-original="/wp-content/uploads/2020/05/fitness@2x.jpg" alt="Fully-Customized-Consultation-App" style="">
				<i><img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/05/sports@2x.png" data-original="/wp-content/uploads/2020/05/sports@2x.png" alt="Fully-Customized-Consultation-App" style=""></i>
				<h5>
					Fitness Trainers
				</h5>
			</li>
			<li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
				<img class="lazy_a" src="https://www.code-brew.com//wp-content/uploads/2020/05/astrologers@2x.jpg" data-original="/wp-content/uploads/2020/05/astrologers@2x.jpg" alt="Online-Consultation-Apps-For-Fitness-Services" style="">
				<i><img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/05/shape-copy-2@2x.png" data-original="/wp-content/uploads/2020/05/shape-copy-2@2x.png" alt="Online-Consultation-Apps-For-Fitness-Services" style=""></i>
				<h5>
					Astrologers
				</h5>
			</li>
		</ul>
	</div>
</section>
<section class="common-section-all next-level-section" style="
    /* background-color: red; */
    background-image: linear-gradient(255deg, #262b6e 96%, #1b1e5a 11%);
    padding: 50px;
">
	<div class="container text-center">
		<h4  class="consultationheading"><b style="display: block;">Want To Develop Online Consultation App For Another Vertical?</b>
			We’ve Got Your Covered.
		</h4>
		<a class="primary-btn3">Get in Touch </a>
	</div>
</section>
<!-- END HERO-1 -->
<!-- FEATURES-1
   ============================================= -->
   <style type="text/css">
      .fbox-1{
         background-color: #1e1c22;
    border-radius: 5px;
    padding: 10px;
    color: white;
      }
      .new-heading-style h4 {
          color: white !important;
/*          font-size: 18px;*/
      }
      .new-heading-style h5{
         color: white;
         font-size: 40px;
      }
      .noBeckGroundOnlyGrey {
       background-image: none;
/*       background-color: rgba(143, 209, 210, .14);*/
       padding-bottom: 70px;
   }
   .common-section-all {
    padding: 80px 0;
    float: left;
    width: 100%;
}
   </style>

<div class="home3-blog-area sec-mar" >
   <div class="container">
      <div class="row mb-55  wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
         <div class="col-lg-12 d-flex">
            <div style="margin-top: 100px;" class="section-title-3">
               <h2>Looking for Informative Business Content?</h2>
               <p>Look no further! Our Blogs & videos will keep you up-to-date with the market.</p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center g-lg-4 gy-5">
         <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="single-blog magnetic-item">
               <div class="blog-img">
                  <img class="img-fluid" src="{{ url('public/assets/img/home-3/home3-blog-01.png') }}" alt>
                  <div class="blog-tag">
                     <a href="blog.html">Education App</a>
                  </div>
               </div>
               <div class="blog-content">
                  <ul class="blog-meta">
                     <li><a href="blog.html">May 20, 2023</a></li>
                     <li><a href="blog.html">Comment (3)</a></li>
                  </ul>
                  <h4><a href="blog-details.html">Donec finibus laoreet exte eu pellentesque. </a></h4>
                  <div class="blog-footer">
                     <div class="read-btn">
                        <a href="blog-details.html">
                           Read More
                           <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                           </svg>
                        </a>
                     </div>
                     <div class="social-area">
                        <ul>
                           <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                           <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                           <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                           <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                        <span><img src="{{ url('public/assets/img/home-3/plain-icon.svg') }}" alt></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="single-blog magnetic-item">
               <div class="blog-img">
                  <img class="img-fluid" src="{{ url('public/assets/img/home-3/home3-blog-02.png') }}" alt>
                  <div class="blog-tag">
                     <a href="blog.html">Education App</a>
                  </div>
               </div>
               <div class="blog-content">
                  <ul class="blog-meta">
                     <li><a href="blog.html">May 20, 2023</a></li>
                     <li><a href="blog.html">Comment (3)</a></li>
                  </ul>
                  <h4><a href="blog-details.html">feugiat varius mattis mass enim est egestas.</a></h4>
                  <div class="blog-footer">
                     <div class="read-btn">
                        <a href="blog-details.html">
                           Read More
                           <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                           </svg>
                        </a>
                     </div>
                     <div class="social-area">
                        <ul>
                           <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                           <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                           <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                           <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                        <span><img src="{{ url('public/assets/img/home-3/plain-icon.svg') }}" alt></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="single-blog magnetic-item">
               <div class="blog-img">
                  <img class="img-fluid" src="{{ url('public/assets/img/home-3/home3-blog-03.png') }}" alt>
                  <div class="blog-tag">
                     <a href="blog.html">Education App</a>
                  </div>
               </div>
               <div class="blog-content">
                  <ul class="blog-meta">
                     <li><a href="blog.html">May 20, 2023</a></li>
                     <li><a href="blog.html">Comment (3)</a></li>
                  </ul>
                  <h4><a href="blog-details.html">Navigating the Journey off Cloud Solution.</a></h4>
                  <div class="blog-footer">
                     <div class="read-btn">
                        <a href="blog-details.html">
                           Read More
                           <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                           </svg>
                        </a>
                     </div>
                     <div class="social-area">
                        <ul>
                           <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                           <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                           <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                           <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                        <span><img src="{{ url('public/assets/img/home-3/plain-icon.svg') }}" alt></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{ url('public/app/js/modernizr.custom.js') }}"></script>
<script src="{{ url('public/app/js/jquery.easing.js') }}"></script>
<script src="{{ url('public/app/js/retina.js') }}"></script>
<script src="{{ url('public/app/js/jquery.stellar.min.js') }}"></script>
<script src="{{ url('public/app/js/jquery.scrollto.js') }}"></script>
<script src="{{ url('public/app/js/jquery.appear.js') }}"></script>
<script src="{{ url('public/app/js/slick.min.js') }}"></script>
<script src="{{ url('public/app/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('public/app/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ url('public/app/js/contact-form.js') }}"></script>
<script src="{{ url('public/app/js/quick-form.js') }}"></script>
<script src="{{ url('public/app/js/comment-form.js') }}"></script>
<script src="{{ url('public/app/js/jquery.validate.min.js') }}"></script>

<!-- Custom Script -->
<script src="{{ url('public/app/js/custom.js') }}"></script>
<script type="text/javascript">
//made by vipul mirajkar thevipulm.appspot.com

var TxtType = function(el, toRotate, period) {

        this.toRotate = toRotate;

        this.el = el;

        this.loopNum = 0;

        this.period = parseInt(period, 10) || 2000;

        this.txt = '';

        this.tick();

        this.isDeleting = false;

    };



    TxtType.prototype.tick = function() {

        var i = this.loopNum % this.toRotate.length;

        var fullTxt = this.toRotate[i];



        if (this.isDeleting) {

        this.txt = fullTxt.substring(0, this.txt.length - 1);

        } else {

        this.txt = fullTxt.substring(0, this.txt.length + 1);

        }



        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';



        var that = this;

        var delta = 200 - Math.random() * 100;



        if (this.isDeleting) { delta /= 2; }



        if (!this.isDeleting && this.txt === fullTxt) {

        delta = this.period;

        this.isDeleting = true;

        } else if (this.isDeleting && this.txt === '') {

        this.isDeleting = false;

        this.loopNum++;

        delta = 500;

        }



        setTimeout(function() {

        that.tick();

        }, delta);

    };



    window.onload = function() {

        var elements = document.getElementsByClassName('typewrite');

        for (var i=0; i<elements.length; i++) {

            var toRotate = elements[i].getAttribute('data-type');

            var period = elements[i].getAttribute('data-period');

            if (toRotate) {

              new TxtType(elements[i], JSON.parse(toRotate), period);

            }

        }

        // INJECT CSS

        var css = document.createElement("style");

        css.type = "text/css";

        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";

        document.body.appendChild(css);

    };



</script>
@endsection