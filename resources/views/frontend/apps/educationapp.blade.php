@extends('frontend.layouts.main')
@php
    $page = DB::table('travelpages')->where('url' , 'education-app')->first();
@endphp
@section('tittle')
@include('frontend.apps.mettatittle')
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('public/assets/css/taxi/style.css') }}" />
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
               <h2 class="h2-lg animated" data-animation="fadeInUp" data-animation-delay="300">
                  Build Your Educational App Launch Today!
               </h2>
               <!-- Text -->
               <p class="p-lg animated" data-animation="fadeInUp" data-animation-delay="400">
                  Transform your educational aspirations into reality with our streamlined app launch process. Empower learners of all ages with seamless access to quality education anytime, anywhere. Join us in revolutionizing the future of learning - launch your app today!
               </p>
               <!-- HERO STORE BADGES -->
               
               <!-- End Store Badges -->
            </div>
            <!-- End row -->
         </div>
         <!-- End container -->
         <!-- HERO IMAGE -->
         <div class="col-md-5 col-lg-5 offset-lg-1 animated" data-animation="fadeInRight" data-animation-delay="400">
            <div class="hero-img">
            	<h1 style="
    font-size: 29px;
    margin-bottom: 40px;
">Let’s Build Your Dream App</h1>
               <form>
               		<div class="form-group mt-2">
               			<input type="text" placeholder="Name" class="custominput" name="">
               		</div>
               		<div class="form-group mt-2">
               			<input type="text" placeholder="Email" class="custominput" name="">
               		</div>
               		<div class="form-group mt-2">
               			<input type="text" placeholder="Phonenumber" class="custominput" name="">
               		</div>
               		<div class="form-group mt-2">
               			<textarea placeholder="Write Your Message" class="customtextarea"></textarea>
               		</div>
               		<div class="form-group mt-2">
               			<button style="
    border: none;
    width: 100%;
    color: white;
    font-size: 22px;
" class="primary-btn3" type="submit">Book Your Call</button>
               		</div>
               </form>
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
         <h5>Features In This App</h5>
         <h4 class="text-center">We’ve Many More Features To Make<br> Your Education App Outshine</h4>
      </div>
      <ul class="setting-consult-list customSettingList">
         <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
            <img src="https://www.code-brew.com//wp-content/uploads/2020/09/group-20@2x.png" alt="Build-Interactive-Engaging-Fully-Featured-Education-Apps" style="">
            <h5>Share Availability</h5>
            <p>Let tutors &amp; set their availability and time slots as per their convenience</p>
         </li>
         <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
            <img src="https://www.code-brew.com//wp-content/uploads/2020/09/group-21@2x.png" alt="Create-Education-Apps-That-Transform-Learning-Experience" style="">
            <h5>Schedule Classes</h5>
            <p>Students can schedule a classroom session for a day or time that suits them.</p>
         </li>
         <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
            <img src="https://www.code-brew.com//wp-content/uploads/2020/09/group-22@2x.png" alt="Build-Next-Gen-Learning-&amp;-Education-Mobile-Apps" style="">
            <h5>Performance Tracker</h5>
            <p>Tutors &amp; students can track performance to identify the areas of improvement.</p>
         </li>
         <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
            <img src="https://www.code-brew.com//wp-content/uploads/2020/09/group-23@2x.png" alt="Advance-Features-To-Make-Your-Education-App" style="">
            <h5>Memberships &amp; Subscription</h5>
            <p>Offer memberships &amp; subscription to increase engagement &amp; revenue for your app.</p>
         </li>
         <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
            <img src="https://www.code-brew.com//wp-content/uploads/2020/09/group-24@2x.png" alt="We-Create-Finest-Edtech-Apps-For-Businesses" style="">
            <h5>Discounts &amp; Offers</h5>
            <p>Offer discounts, promo codes, etc. on educational courses to attract new customers &amp; boost sales.</p>
         </li>
         <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
            <img src="https://www.code-brew.com//wp-content/uploads/2020/09/group-25@2x.png" alt="Build-Finest-Edtech-Apps-With-Code-Brew-Labs" style="">
            <h5>Track History</h5>
            <p>Allow teachers &amp; students to track all their past sessions, downloaded documents, videos &amp; transactions.</p>
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
          font-size: 18px;
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


<!-- END FEATURES-1 -->
<!-- CONTENT-5
   ============================================= -->
<section id="features-3" class="bg-fixed featuress-section division" style="background-image: url(./{{ url('public/app/images/tra-waves.png') }}); background-position: center bottom;">
   <div class="container">
      
      <div class="row">
         <!-- FEATURE BOX #1 -->
   
         
         <!-- FEATURE BOX #7 -->
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<style type="text/css">
   .setting-consult-list {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    padding: 0;
    margin: 70px -15px 0;
}
.setting-consult-list li {
    width: calc(25% - 10px);
    margin: 5px;
    cursor: pointer;
    text-align: center;
    background-color: white;
    padding: 15px 15px 35px;
    border-radius: 30px;
    border: 1px solid transparent;
    color: black;
}
@media (min-width: 992px)
{
    .setting-consult-list li {
    width: calc(33.33% - 30px);
    text-align: left;
    margin-top: 60px;
}
}
.setting-consult-list li>img {
    width: 100px;
    margin-top: -50px;
    margin-bottom: -20px;
}
.setting-consult-list li h5 {
    font-size: 21px;
    font-weight: 700;
    line-height: normal;
    color: #1e1e1e;
    margin: 5px 0 0;
}
.setting-consult-list li p {
    font-size: 18px;
    font-weight: 400;
    line-height: 1.56;
    color: #626262;
    margin: 10px 0 0;
}
.cta-section-ride.blue-beck h4 {
    color: #fff;
    font-weight: 400;
}
.cta-section-ride h4 {
    font-size: 30px;
    font-weight: 900;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.33;
    letter-spacing: -.83px;
    color: #07004f;
    margin-bottom: 25px;
    margin-top: 0;
}
.cta-section-ride.blue-beck {
    background-color: rgba(0, 0, 0, .5);
    margin-top: 70px;
}
.cta-section-ride.blue-beck {
    background-color: #272727;
    padding: 50px;
}
.edutechFeatureText .new-heading-style {
    margin-bottom: 30px;
}
.new-heading-style h4 {
    font-size: 30px;
    font-weight: 800;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.3;
    letter-spacing: normal;
    text-align: left;
    color: #131d2b;
    margin: 20px 0;
    margin-bottom: 10px;
}
.new-heading-style p {
    font-size: 18px;
    font-weight: normal;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.44;
    letter-spacing: normal;
    text-align: left;
    color: white;
}
</style>
<section id="download-2" class="wide-70 download-section">
   <div class="bg-scroll bg-inner division">
      <div class="container white-color">
         <div class="row d-flex align-items-center">
            <!-- DOWNLOAD TXT -->
            <div class="col-md-12 col-lg-12">
               <div class="download-txt ind-45" style="padding-top:50px;padding-bottom:50px;">
                  <!-- Title -->
                  <h2 class="h2-xs animated text-center" data-animation="fadeInRight" data-animation-delay="300">
                     Different Consultation Modes To Enable Learning Anywhere, Anytime
                  </h2>
                  <!-- Text -->
                  <ul class="setting-consult-list customSettingList">
                     <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
                        <img src="https://www.code-brew.com/wp-content/uploads/2020/09/group-17@3x.png" alt="Create-Your-Own-Online-Education-Application" style="">
                        <h5>Video Consultation</h5>
                        <p>Students can leverage from 1:1 video consultation with the tutor of their choice</p>
                     </li>
                     <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
                        <img src="https://www.code-brew.com/wp-content/uploads/2020/09/group-18@3x.png" alt="Create-Your-Own-Online-Education-Application" style="">
                        <h5>Voice Consultation</h5>
                        <p>Enable voice calling to communicate with tutors through built-in call feature.</p>
                     </li>
                     <li class="clickcustomform wow flipInX" style="visibility: visible; animation-name: flipInX;">
                        <img src="https://www.code-brew.com/wp-content/uploads/2020/09/group-19@3x.png" alt="Education-App-Development-Services" style="">
                        <h5>Text Consultation</h5>
                        <p>In-app chat feature to get queries, doubts, etc.resolved in real-time from tutors.</p>
                     </li>
                  </ul>
               </div>
            </div>
            <!--END DOWNLOAD TXT -->
            <!-- DOWNLOAD IMAGE -->
         </div>
         <!-- End row -->
      </div>
      <section class="cta-section-ride blue-beck ">
         <div class="container text-center">
            <h4><b>Launch Your Branded &amp; Feature-Loaded Tutoring Marketplace<br> With Our Education App Development Services</b></h4>
            <a href="" class="primary-btn3">Book Free Demo</a>
         </div>
      </section>
      <!-- End container -->
   </div>
   <!-- End Inner Background -->
</section>
<div class="home3-blog-area sec-mar">
   <div class="container">
      <div class="row mb-55  wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
         <div class="col-lg-12 d-flex">
            <div class="section-title-3">
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