@extends('frontend.layouts.main')
@php
    $page = DB::table('travelpages')->where('url' , 'beauty-saloon-app')->first();
@endphp
@section('tittle')
@include('frontend.apps.mettatittle')
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('public/assets/css/beauty-saloon-app/style.css') }}" />
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
                  Take Your Salon Business Online With Beautiful Website & Apps
               </h2>
               <p class="p-lg animated" data-animation="fadeInUp" data-animation-delay="400">
                  Elegant & Powerful Tech-Suite To Boost Your Online Salon Services Business
               </p>
               <!-- Text -->
               <div class="onlyRowCtas"> 
               		<a class="primary-btn3" href="javascript:void(0)" style="display: inline-block;">Get Started</a>
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
            	<img src="{{ url('public/images/vector-smart-object-2-copy-12@3x.png') }}">
            </div>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<section class="same-common-section">
   <div class="container">
    <div class="new-heading-style">
      <h4 style="text-align:center">Business Models We Support
</h4>
		<p style="text-align:center">
			Launch Your Online Beauty Business With Our Salon Software That Suits All Business Needs

		</p>
   
   </div>
	  <ul class="why-choose-list why-choose-rewamp ">
         <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
			 <span>
            <img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/01/on-demand@3x.png" data-original="/wp-content/uploads/2020/01/on-demand@3x.png" style="" alt="On-Demand Beauty Service">
			</span>
            <h5>On-Demand Beauty Service 
</h5>
			 <p><b>
				 Provide Beauty Services On <br> Demand</b>

			 </p>
			 <p>Serve beauty services on demand by bridging the gap between customers &amp; stylist or salon owners</p>
			 
			 <a class="primary-btn3" href="javascript:void(0)">Get Started</a>
         </li>
		  
		  <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
			  <span>
            <img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/01/aggregator@3x.png" data-original="/wp-content/uploads/2020/01/aggregator@3x.png" style="" alt="Beauty &amp; Salon Aggregator">
			</span>
            <h5>Beauty &amp; Salon Aggregator
</h5>
			  <p><b>
				  Bring Salon Providers Under One Platform</b>
			  </p>
			 <p>Build a collaborative online marketplace to sell hot-selling beauty services of various service providers
</p>
			 <a class="primary-btn3" href="javascript:void(0)">Get Started</a>
         </li>
		  
		  <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
			  <span>
            <img class="lazy_a" src="https://www.code-brew.com/wp-content/uploads/2020/01/standlone@3x.png" data-original="/wp-content/uploads/2020/01/standlone@3x.png" style="" alt="Standalone Beauty Salon">
			</span>
            <h5>Standalone Beauty Salon
</h5>
			  <p><b>
				  Launch Your Brand With Apps <br> Websites</b>

			  </p>
			 <p>Provide easy appointment booking &amp; manage your clients with fully customized beauty 
software solution
</p>
			 <a class="primary-btn3" href="javascript:void(0)">Get Started</a>
         </li>
	  </ul>
	  
	</div>
</section>
<section class="same-common-section beauty-purple-section">
   <div class="container">
      <div class="new-heading-style">
         <h4 style="text-align:center; text-align:center">Add Feathers To Your Beauty Service App<br>
            With Special Benefits/ Features
         </h4>
      </div>
      <ul>
         <li class="wow fadeInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
            <span class="material-symbols-outlined icon">monitoring</span>
            <h4>Live Geo Tracking</h4>
         </li>
         <li class="wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <span class="material-symbols-outlined icon">cancel</span>
            <h4>Cancel Booking
               Anytime
            </h4>
         </li>
         <li class="wow fadeInDown" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInDown;">
            <span class="material-symbols-outlined icon">info</span>
            <h4>See Profiles in
               Detail
            </h4>
         </li>
         <li class="wow fadeInDown" data-wow-delay="1.3s" style="visibility: visible; animation-delay: 1.3s; animation-name: fadeInDown;">
            <span class="material-symbols-outlined icon">manage_history</span>
            <h4>Check Work
               History
            </h4>
         </li>
         <li class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <span class="material-symbols-outlined icon">tune</span>
            <h4>Flexibility To
               Customize
            </h4>
         </li>
         <li class="wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
            <span class="material-symbols-outlined icon">timeline</span>
            <h4>Start In No Time</h4>
         </li>
         <li class="wow fadeInUp" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeInUp;">
            <span class="material-symbols-outlined icon">sentiment_satisfied</span>
            <h4>Ease To Scale</h4>
         </li>
         <li class="wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
            <span class="material-symbols-outlined icon">storefront</span>
            <h4>Marketing
               Campaigns
            </h4>
         </li>
      </ul>
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
@endsection