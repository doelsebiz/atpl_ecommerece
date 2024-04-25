@extends('frontend.layouts.main')
@php
    $page = DB::table('travelpages')->where('url' , 'health-care-app')->first();
@endphp
@section('tittle')
@include('frontend.apps.mettatittle')
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('public/assets/css/health-care-app/style.css') }}" />
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
                  Launch Your Healthcare Business Online
               </h2>
               <!-- Text -->
               <p class="p-lg animated" data-animation="fadeInUp" data-animation-delay="400">
                  Help Your Customers Fight With Covid-19 Outbreak, Taking Your Healthcare Services To Their Doorstep
               </p>
               <div class="onlyRowCtas"> 
               		<a class="btn-register-header newStyleBtnss clickcustomform " style="display: inline-block;">Get Started</a>
               	</div>
            </div>
            <!-- End row -->
         </div>
         <!-- End container -->
         <!-- HERO IMAGE -->
         <div class="col-md-5 col-lg-5 offset-lg-1 animated" data-animation="fadeInRight" data-animation-delay="400">
            <div class="">
            	<img src="https://www.code-brew.com/wp-content/uploads/2020/01/device@3x-1.png">
            </div>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<section class="common-section-all what-you-get beckDarkGround noBeckGroundOnlyGrey">
   <div class="container">
      <div class="new-heading-style text-center">
         <h5>Healthcare App Development Solutions</h5>
         <p class="text-center text-white">Bridging the gap between the medical industry and patients with technology & innovation</p>
      </div>
      <ul class="rated-now-sec ">
	   <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
	      <img src="https://www.code-brew.com/wp-content/uploads/2020/01/bitmap@3x-2-1.jpg">
	      <img class="ico-steal" src="https://www.code-brew.com/wp-content/uploads/2020/01/group-26@3x-1.png">
	      <h3>On-Demand Medicine Delivery </h3>
	      <p>
	         <b>On-Demand Medicine Delivery 
	         </b>Let your patients buy &amp; make payments for medicines online through web &amp; mobile apps<span>Get Started</span>
	      </p>
	   </li>
	   <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
	      <img src="https://www.code-brew.com/wp-content/uploads/2020/01/bitmap@3x-3-1.jpg">
	      <img class="ico-steal" src="https://www.code-brew.com/wp-content/uploads/2020/01/group-34@3x-1.png">
	      <h3>On-Demand Caretaker</h3>
	      <p>
	         <b>On-Demand Caretaker</b>
	         Enable your customers hire professional caretakers to get the best care for their loved ones
	         <span>Get Started</span>
	      </p>
	   </li>
	   <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
	      <img src="https://www.code-brew.com/wp-content/uploads/2020/01/bitmap@3x-4-1.jpg">
	      <img class="ico-steal" src="https://www.code-brew.com/wp-content/uploads/2020/01/group-25@3x-1.png">
	      <h3>On-Demand Doctor/ Nurses</h3>
	      <p>
	         <b>On-Demand Doctor/ Nurses</b>
	         With on-demand healthcare website &amp; apps connect patients with medical service providers 
	         <span>Get Started</span>
	      </p>
	   </li>
	   <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
	      <img src="https://www.code-brew.com/wp-content/uploads/2020/01/bitmap@3x-4.jpg">
	      <img class="ico-steal" src="https://www.code-brew.com/wp-content/uploads/2020/01/group-21@3x.png">
	      <h3>Hospital Appointment Management App</h3>
	      <p>
	         <b>Hospital Appointment Management App
	         </b>Get a healthcare app development solution to automate appointments and manage staff shifts
	         <span>Get Started</span>
	      </p>
	   </li>
	   <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
	      <img src="https://www.code-brew.com/wp-content/uploads/2020/01/bitmap@3x-2.jpg">
	      <img class="ico-steal" src="https://www.code-brew.com/wp-content/uploads/2020/01/group-33@3x-1.png">
	      <h3>On-Demand Laboratory App</h3>
	      <p>
	         <b>On-Demand Laboratory App</b>
	         Our laboratory &amp; phlebotomist software help you provide accurate reports &amp; manage your business
	         <span>Get Started</span>
	      </p>
	   </li>
	   <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
	      <img src="https://www.code-brew.com/wp-content/uploads/2020/01/bitmap@3x-3.jpg">
	      <img class="ico-steal" src="https://www.code-brew.com/wp-content/uploads/2020/01/group-32@3x-1.png">
	      <h3>Healthcare Aggregator App</h3>
	      <p>
	         <b>Healthcare Aggregator App
	         </b>Start aggregation services with healthcare providers to improve process efficiencies, clinical outcomes &amp; patient care<span>Get Started</span>
	      </p>
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
   .common-section-all {
    padding: 80px 0;
    float: left;
    width: 100%;
}
   </style>

<section class="common-section-all revolution-sec">
   <div class="container">
      <ul class="rated-now-sec ">
         <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
            <h5>
               And There’s Much More You Get to Revolutionize Your Healthcare Business
            </h5>
         </li>
         <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
            <h3>Easy Integration</h3>
            <figcaption>Empower healthcare business with the flexibility to integrate with any existing or new systems, along with multiple payment gateways</figcaption>
         </li>
         <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
            <h3>Conversational AI Chatbots</h3>
            <figcaption>Benefit your patients with chatbots that replies with the help of artificial intelligence &amp; machine learning, based on previous conversations</figcaption>
         </li>
         <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
            <h3>Supply &amp; Demand Management</h3>
            <figcaption>Manage your supply chain by keeping track of appointments &amp; growing needs of patients with help of supply chain software</figcaption>
         </li>
         <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
            <h3>Easy Integration</h3>
            <figcaption>With intelligent insights evaluate your staff's performance &amp; appointment in an easy, quick and non-intrusive way</figcaption>
         </li>
         <li class="clickcustomform wow flipInX" style="cursor: pointer; visibility: visible; animation-name: flipInX;">
            <h3>Customer Profile Management</h3>
            <figcaption>Treat your patients’ special, offering the rewards, reminder, and offers on their next booking or medicine order</figcaption>
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