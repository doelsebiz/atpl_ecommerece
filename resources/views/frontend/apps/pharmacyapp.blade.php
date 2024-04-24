@extends('frontend.layouts.main')
@section('tittle')
<title>Pharmacy App</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('public/assets/css/pharmacy-app/style.css') }}" />
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
                  Launch Your Branded Pharmacy Delivery Apps & Website
               </h2>
               <!-- Text -->
               <p class="p-lg animated" data-animation="fadeInUp" data-animation-delay="400">
                  Create Your On-Demand Medicine Ordering App To Allow Your Customers Buy Medicines Online Seamlessly
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
            	<img src="https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-549b063/www.code-brew.com/wp-content/uploads/2020/03/images@3x-1.png">
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
         <h5>How it Works?</h5>
         <p class="text-center text-white">Boost your customer experience by offering a simple & efficient medicine ordering process</p>
      </div>
      <ul class="modals-list nitro-offscreen">
	   <li>
	      <span class="material-symbols-outlined icon search">search</span>
	      <h4 class="lazyloaded">Search</h4>
	      <p>Find &amp; Compare the Medicines</p>
	   </li>
	   <li>
	      <span class="material-symbols-outlined icon verification">license</span>
	      <h4>Verification</h4>
	      <p>Upload Prescription For Verification</p>
	   </li>
	   <li>
	      <span class="material-symbols-outlined icon cart">shopping_cart</span>
	      <h4>Cart Preparation</h4>
	      <p>Add Medicine to Cart</p>
	   </li>
	   <li>
	      <span class="material-symbols-outlined icon order">list_alt</span>
	      <h4>Order Placement</h4>
	      <p>Place Order with Free Shipping option</p>
	   </li>
	   <li>
	      <span class="material-symbols-outlined icon payement">payments</span>
	      <h4>Payment</h4>
	      <p>Pay via Online Methods or Choose COD</p>
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
.list-addon, .why-choose-list {
    list-style: none;
    padding: 0;
    margin: 0 -30px;
    text-align: left;
    display: flex;
}
body .why-choose-list li {
    width: calc(33.33% - 30px);
}
body .why-choose-list li h5 {
    font-size: 20px;
    font-weight: 900;
    color: black;
}
body .why-choose-list li p {
    font-size: 16px;
    font-weight: 400;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.38;
    letter-spacing: normal;
    padding-left: 30px;
    color: #404847;
    position: relative;
    margin-bottom: 15px;
}
body .why-choose-list li p:before {
    width: 15px;
    height: 15px;
    border: 3px solid #1fb7a0;
    background-color: #fff;
    position: absolute;
    content: "";
    left: 0;
    border-radius: 50%;
    top: 5px;
}
.why-choose-list li {
	padding: 20px;
	margin: 10px;
    border-radius: 10px;
    border: 1px solid #1fb7a0;
    background-color: #f3fffd !important;
}
.why-choose-list li {
    box-shadow: 0 19px 62px 4px rgba(179,179,179,.26);
    background-color: #fff;
}
   </style>

<section class="common-section-all next-level-section">
	<div class="container">
		<div class="new-heading-style">
			<h4><b>Unique Features</b></h4>
			<p>To Empower Your Online Pharmacy Store</p>
		</div>
		<ul class="why-choose-list" role="list">
		   <li class="wow fadeInDown clickcustomform" role="listitem" style="visibility: visible; animation-name: fadeInDown;">
		      <h5>Easy Ordering &amp; Checkout</h5>
		      <p>Get features like abandoned cart recovery, guest checkout, order tracking etc.</p>
		      <p>Customers can use in-built store credit system &amp; reorder any product</p>
		   </li>
		   <li class="wow fadeInDown clickcustomform" role="listitem" style="visibility: visible; animation-name: fadeInDown;">
		      <h5>Mcommerce Ready</h5>
		      <p>Get mobile commerce ready websites to maximize mobile users conversions</p>
		      <p>Mobile visitor tracking, SMS &amp; mobile push notification features</p>
		   </li>
		   <li class="wow fadeInDown clickcustomform" role="listitem" style="visibility: visible; animation-name: fadeInDown;">
		      <h5>Multiple Payments</h5>
		      <p>Accept multiple payments like credit-debit cards, wallets, PayPal, Amazon Pay</p>
		      <p>Integrated SSL certification &amp; secured payment gateways</p>
		   </li>
		   <li class="wow fadeInDown clickcustomform" role="listitem" style="visibility: visible; animation-name: fadeInDown;">
		      <h5>Shipping &amp; Logistics</h5>
		      <p>Absolute zero setup cost &amp; tied up with multiple delivery partners</p>
		      <p>Shipping label generation and printing through system</p>
		   </li>
		   <li class="wow fadeInDown clickcustomform" role="listitem" style="visibility: visible; animation-name: fadeInDown;">
		      <h5>Easy Returns &amp; Refunds</h5>
		      <p>Build trust among customers by offering easy return &amp; refund</p>
		      <p>Besides admin, sellers can also manage refund at their end.</p>
		   </li>
		   <li class="wow fadeInDown clickcustomform" role="listitem" style="visibility: visible; animation-name: fadeInDown;">
		      <h5>Discounts &amp; Coupons</h5>
		      <p>Run multiple email campaigns for discounts and promotional deals on products</p>
		      <p>Delight customers with combos, bulk discounts and customer loyalty programs</p>
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