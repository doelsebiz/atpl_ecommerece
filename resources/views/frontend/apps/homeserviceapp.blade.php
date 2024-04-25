@extends('frontend.layouts.main')
@php
    $page = DB::table('travelpages')->where('url' , 'home-service-app')->first();
@endphp
@section('tittle')
@include('frontend.apps.mettatittle')
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('public/assets/css/home-service-app/style.css') }}" />
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
                  Become A Home
Services Marketplace
Leader Like TaskRabbit
               </h2>
               <!-- Text -->
               <p class="p-lg animated" data-animation="fadeInUp" data-animation-delay="400">
                  Offer your clients a one-stop intuitive platform to book on-demand
multivendor home services on the go!
               </p>
               <div class="onlyRowCtas"> 
               		<a class="primary-btn3" style="display: inline-block;">Get Started</a>
               	</div>
               
            </div>
            <!-- End row -->
         </div>
         <!-- End container -->
         <!-- HERO IMAGE -->
         <div class="col-md-5 col-lg-5 offset-lg-1 animated" data-animation="fadeInRight" data-animation-delay="400">
            <div class="">
            	<img src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm_banner_img.webp?var=500326631">
            </div>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<section class="common-section-all section--benefits">
   <div class="container container--narrow">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="common-heading-section text-center text-lg-left">
					<h2>Top Benefits of Choosing Us</h2>
					<p>Our robust tech product has the competencies of an end-to-end home services solution crafted around premium customer service at the core.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 col-xxl-12">
				<div class="row align-items-stretch">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="benefits_wrapper">
							<div class="benefits_img">
								<img src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm_benefits_icon1.webp?var=305602029" class="img-fluid">
							</div>
							<div class="benefits_content">
								<h4>100% Customizable <br> Solution</h4>
								<p>We custom build home service marketplace from scratch; one that suits your business type and fulfills your business needs, within your budget.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="benefits_wrapper">
							<div class="benefits_img">
								<img src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm_benefits_icon2.webp?var=870769031" class="img-fluid">
							</div>
							<div class="benefits_content">
								<h4>Multi-Currency and <br> Multilingual</h4>
								<p>Our home services platform is integrated with multiple currencies and languages. This removes any geographical barriers to business growth.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="benefits_wrapper">
							<div class="benefits_img">
								<img src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm_benefits_icon3.webp?var=1999001940" class="img-fluid">
							</div>
							<div class="benefits_content">
								<h4>Third-Party API <br> Integration</h4>
								<p>Other home service platforms can be fully integrated with the base mobile app solution. So, you get infinite on-demand capabilities in one solution.</p>
							</div>
						</div>
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

<section class="common-section-all section--rental pb-0" style="background-image: radial-gradient(circle at 81% 55%, #f8e074, #f8b654 56%) !important;padding-bottom: 50px !important;">
	<div class="container container--narrow">
		<div class="common-heading-section">
			<h2>A Comprehensive Software For All Types of Home Services </h2>
			<p>Build home service marketplace that seamlessly becomes a one-stop solution for all your clients’ home services needs.</p>
		</div>
		<div class="row align-items-stretch">
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="rental_wrapper">
					<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-services-img_1.webp?var=1940811454">
					<div class="rental_content clickcustomform">
						<h5>Plumbing</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="rental_wrapper">
					<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-services-img_2.webp?var=346567689">
					<div class="rental_content clickcustomform">
						<h5>Salon</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="rental_wrapper">
					<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-services-img_3.webp?var=1846039786">
					<div class="rental_content clickcustomform">
						<h5>Lawn Services</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="rental_wrapper">
					<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-services-img_4.webp?var=1375906582">
					<div class="rental_content clickcustomform">
						<h5>Home Cleaning</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="rental_wrapper">
					<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-services-img_5.webp?var=1377552733">
					<div class="rental_content clickcustomform">
						<h5>Carpet Cleaning</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="rental_wrapper">
					<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-services-img_6.webp?var=147747955">
					<div class="rental_content clickcustomform">
						<h5>Window Cleaning</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="rental_wrapper">
					<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-services-img_7.webp?var=546375497">
					<div class="rental_content clickcustomform">
						<h5>Appliance Servicing</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="rental_wrapper">
					<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-services-img_8.webp?var=1766514631">
					<div class="rental_content clickcustomform">
						<h5>Room Rentals</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="common-section-all section--benefits">
   <div class="container container--narrow">
		<div class="row-flexible-center-all cta-wrapper">
			<div class="col-md-12 col-lg-10">
				<div class="row-flexible-center-all">
					<div class="col-sm-6">
						<div class="common-heading-section mb-0">
							<h2 class="robust">Build a Robust On Demand <br> Home Service App with Us</h2>
							<a class="primary-btn3">Book Consultation</a>
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-responsive bg_img" src="https://www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2023/03/hsm-ondemand-img.webp?var=1501893452">
					</div>
				</div>
				
			</div>
		</div>
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