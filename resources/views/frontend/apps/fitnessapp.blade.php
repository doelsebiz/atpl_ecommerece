@extends('frontend.layouts.main')
@php
    $page = DB::table('travelpages')->where('url' , 'fitness-app')->first();
@endphp
@section('tittle')
@include('frontend.apps.mettatittle')
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('public/assets/css/fitness-app/style.css') }}" />
<!-- On Scroll Animations -->
<link href="{{ url('public/app/css/animate.css') }}" rel="stylesheet">

<!-- TEMPLATE CSS -->
<link href="{{ url('public/app/css/style.css') }}" rel="stylesheet">

<!-- RESPONSIVE CSS -->
<link href="{{ url('public/app/css/responsive.css') }}" rel="stylesheet">
<!-- HERO-1
   ============================================= -->
<section id="hero-1" style="background-image:url('{{ url("") }}/public/images/fadc_banner_bg.webp');" class="bg-fixed hero-section division">
   <div class="container">
      <div class="row">
         <!-- HERO TEXT -->
         <div class="col-md-7 col-lg-6">
            <div class="hero-txt white-color">
               <!-- Title -->
               <h2 style="font-size: 2.75rem;" class="h2-lg animated" data-animation="fadeInUp" data-animation-delay="300">
                  Fitness App Development Company
               </h2>
               <!-- Text -->
               <p class="p-lg animated" data-animation="fadeInUp" data-animation-delay="400">
                  Leverage our proficiency in delivering world-class digital solutions to build your fitness app.
               </p>
               <div class="onlyRowCtas"> 
               		<a class="btn-register-header newStyleBtnss clickcustomform " style="display: inline-block;">Get Started</a>
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
            	<img src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2024/01/10d26f6abb85407c5dc973d59bfce85f.Build_a_fitness_app.webp">
            </div>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<section class="common-section-all portfolio_section">
   	<div class="container-fluid">
   <div class="row align-items-center">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <h2>Now Create Your Fitness App For Everything</h2>
         <p>Our health &amp; fitness app development team has extensive experience to ensure that you get the most functional &amp; innovative solution for your fitness app idea.</p>
      </div>
   </div>
   <div class="row align-items-center portfolio_main">
      <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="portfolio_content lazyloaded">
            <div class="portfolio_con_sec">
               <h3>Yoga &amp; <br> Meditation App</h3>
               <p>We offer meditation app development services to create fitness apps that calm user’s mind &amp; body with power of yoga.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="portfolio_content lazyloaded">
            <div class="portfolio_con_sec">
               <h3>Fitness &amp; <br> Workout App</h3>
               <p>Maximize your profit &amp; boost your user client retention with top-notch workout app development services.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="portfolio_content lazyloaded">
            <div class="portfolio_con_sec">
               <h3>Diet &amp; <br> Nutrition App</h3>
               <p>Embrace the power of fitness app development services to grow your revenue with a custom-built diet and nutrition app.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="portfolio_content lazyloaded">
            <div class="portfolio_con_sec">
               <h3>Mood Tracking <br> App</h3>
               <p>Now builds a fitness tracker app that monitors users’ mood swings &amp; helps them with anxiety, fear, &amp; more emotions.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="portfolio_content lazyloaded">
            <div class="portfolio_con_sec">
               <h3>Sleep Cycle <br> App</h3>
               <p>Build a fitness app with several gamified elements to let users monitor their sleep cycle pattern &amp; be more relaxed and rejoiced.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="portfolio_content lazyloaded">
            <div class="portfolio_con_sec">
               <h3>Personal Trainer <br> App</h3>
               <p>Our fitness app development services help the coaches &amp; high-end gym chains to give their users a dedicated training app.</p>
            </div>
         </div>
      </div>
   </div>
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

<section class="common-section-all next-level-section">
	<div class="container">
		<div class="new-heading-style">
			<h4><b>Create Real Estate App For <br>Every Business Model</b></h4>
			<p>At Code Brew, we empower businesses of every size &amp; type with our<br> real estate app development services.</p>
		</div>
		<ul class="why-choose-list why-choose-rewamp">
			<li class="wow fadeInDown mobileappdevelopment" style="visibility: visible; animation-name: fadeInDown;">
				<img src="https://www.code-brew.com/wp-content/uploads/2021/05/group-36@2x.png">
				<h5>On-Demand Real<br> Estate App</h5>
				<p>Create real estate app to let users search, book &amp; pay for different properties listed.</p>
				<a class="newStyleBtnss clickcustomform ">Get Started</a>
			</li>
			<li class="wow fadeInDown mobileappdevelopment" style="visibility: visible; animation-name: fadeInDown;">
				<img src="https://www.code-brew.com/wp-content/uploads/2021/05/group-25@2x.png">
				<h5>Properties/Real<br> Estate Brokers</h5>
				<p>Build a real estate app marketplace solution to manage listings of properties, opening/closing hours, menu, and your staff.</p>
				<a class="newStyleBtnss clickcustomform ">Get Started</a>
			</li>
			<li class="wow fadeInDown mobileappdevelopment" style="visibility: visible; animation-name: fadeInDown;">
				<img src="https://www.code-brew.com/wp-content/uploads/2021/05/group-26@2x.png">
				<h5>Real Estate<br> Aggregators</h5>
				<p>Start real estate aggregation services to simplify property search, comparison, avail special offers, &amp; more.</p>
				<a class="newStyleBtnss clickcustomform ">Get Started</a>
			</li>
		</ul>
	</div>
</section>
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
@endsection