@extends('frontend.layouts.main')
@php
    $page = DB::table('travelpages')->where('url' , 'laundry-app')->first();
@endphp
@section('tittle')
@include('frontend.apps.mettatittle')
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('public/assets/css/laundry-app/style.css') }}" />
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
                  Setup Your Online Laundry Business in No Time
               </h2>
               <!-- Text -->
               <p class="p-lg animated" data-animation="fadeInUp" data-animation-delay="400">
                  Build Your Dream Laundry App with Industry-Leading Tech Suite For Cleaning Services
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
            	<img src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2024/01/banner-phone-2-x.webp">
            </div>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<section class="common-section-all nitro-offscreen">
   <div class="container">
      <div class="common-heading-section text-center">
         <h4>How It Works?</h4>
         <p>Simple Functioning Of Your Laundry App Helps Your Business Grow Faster</p>
      </div>
      <div class=" row-flexible-center row thing-works-section">
         <div class="col-md-3 content-part wow fadeInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
            <div class="for-customer-side hidden-lg hidden-md">
               <img alt="On-Demand-Laundry-App-Development" nitro-lazy-src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2024/01/boss-3-x.webp" class="nitro-lazy" decoding="async" nitro-lazy-empty="" src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNjMgNzIiIHdpZHRoPSI2MyIgaGVpZ2h0PSI3MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48L3N2Zz4="> 
               <h5>Customer</h5>
            </div>
            <ul class="thing-works-section-left-side">
               <li>
                  <h4>Filter &amp; Search</h4>
                  <p>Choose service, price, location, etc.</p>
               </li>
               <li>
                  <h4>Order &amp; Schedule</h4>
                  <p>Add order details and schedule pickup &amp; delivery time</p>
               </li>
               <li>
                  <h4>Seamless Payment</h4>
                  <p>Pay via cards, wallets or cash on delivery</p>
               </li>
               <li>
                  <h4>Live Tracking</h4>
                  <p>Track the cleaning order status in real-time</p>
               </li>
            </ul>
         </div>
         <div class="col-md-6 images-part wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
            <div class="for-customer-side hidden-lg hidden-md">
               <img alt="On-Demand-Laundry-App-Development" nitro-lazy-src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2024/01/boss-3-x.webp" class="nitro-lazy" decoding="async" nitro-lazy-empty="" src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNjMgNzIiIHdpZHRoPSI2MyIgaGVpZ2h0PSI3MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48L3N2Zz4="> 
               <h5>Customer</h5>
            </div>
            <img alt="Get-Your-Laundry-Dry-Cleaning-App-Development" nitro-lazy-src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2024/01/Laundry_App_Helps.webp" class="main-circular center-block lazyloaded" decoding="async" nitro-lazy-empty="" src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2024/01/Laundry_App_Helps.webp"> 
            <div class="for-admin-side  hidden-lg hidden-md">
               <img alt="Get-Your-Laundry-Dry-Cleaning-App-Development" nitro-lazy-src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2024/01/manager-3-x.webp" class="nitro-lazy" decoding="async" nitro-lazy-empty="" src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNzIgNzIiIHdpZHRoPSI3MiIgaGVpZ2h0PSI3MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48L3N2Zz4="> 
               <h5>Admin</h5>
            </div>
         </div>
         <div class="col-md-3 content-part wow fadeInRight" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
            <div class="for-admin-side hidden-lg hidden-md">
               <img alt="Build-On-demand-Laundry-App" nitro-lazy-src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/themes/Avada-Child-Theme/media/2024/01/manager-3-x.webp" class="nitro-lazy" decoding="async" nitro-lazy-empty="" src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNzIgNzIiIHdpZHRoPSI3MiIgaGVpZ2h0PSI3MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48L3N2Zz4="> 
               <h5>Admin</h5>
            </div>
            <ul class="thing-works-section-right-side">
               <li>
                  <h4>Order Notification</h4>
                  <p>Get order notification instantly</p>
               </li>
               <li>
                  <h4>Full Order Information</h4>
                  <p>Get complete order &amp; customer details </p>
               </li>
               <li>
                  <h4>Dispatch Automation</h4>
                  <p>Automate dispatch with optimized route</p>
               </li>
               <li>
                  <h4>Invoices &amp; Reports</h4>
                  <p>Generate order invoices &amp; analytics reports</p>
               </li>
            </ul>
         </div>
      </div>
      <div class="only-cta-laundry"> <a class="primary-btn3">Start Now</a> </div>
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