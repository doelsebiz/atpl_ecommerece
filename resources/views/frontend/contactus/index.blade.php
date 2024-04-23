@extends('frontend.layouts.main')
@section('tittle')
<title>Contact Us</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<section class="breadcrumbs">
   <div class="breadcrumb-sm-images">
      <div class="inner-banner-1 magnetic-item">
         <img src="{{ url('public/assets/img/inner-pages/inner-banner-1.png') }}" alt>
      </div>
      <div class="inner-banner-2 magnetic-item">
         <img src="{{ url('public/assets/img/inner-pages/inner-banner-2.png') }}" alt>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb-wrapper">
               <div class="breadcrumb-cnt">
                  <h1>"Contact Us"</h1>
                  <div class="breadcrumb-list">
                     <a href="index.html">Home</a><img src="{{ url('public/assets/img/inner-pages/breadcrumb-arrow.svg') }}" alt> Contact Us
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="contact-page-wrap sec-mar">
   <div class="container">
      <div class="row g-lg-4 gy-5">
         <div class="col-lg-6">
            <div class="contact-content">
               <span>CONTACT WITH US</span>
               <h2>LET’S WORK TOGETHER?</h2>
               <p>I have worls-class, flexible support via live chat, email and hone. I guarantee that you’ll be able to have any issue resolved within 24 hours.</p>
               <div class="informations">
                  <div class="single-info">
                     <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                     </div>
                     <div class="info">
                        <p>168/170, Avenue 01, Old York <br> Drive Rich Mirpur DOHS, Bangladesh</p>
                     </div>
                  </div>
                  <div class="single-info">
                     <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                     </div>
                     <div class="info">
                        <a href="tel:05661111985">+880 566 1111 985</a>
                        <a href="tel:06571111576">+880 657 1111 576</a>
                     </div>
                  </div>
                  <div class="single-info">
                     <div class="icon">
                        <i class="far fa-envelope"></i>
                     </div>
                     <div class="info">
                        <a href="/cdn-cgi/l/email-protection#89a9e0e7efe6c9ecf1e8e4f9e5eca7eae6e4"><span class="__cf_email__" data-cfemail="60090e060f200518010d100c054e030f0d">[email&#160;protected]</span></a>
                        <a href="/cdn-cgi/l/email-protection#2c0c45424a436c5f595c5c435e58024f4341"><span class="__cf_email__" data-cfemail="c7aea9a1a887b4b2b7b7a8b5b3e9a4a8aa">[email&#160;protected]</span></a>
                     </div>
                  </div>
               </div>
               <div class="follow-area">
                  <h5 class="blog-widget-title">Follow Us</h5>
                  <p class="para">Follow us on Social Network</p>
                  <div class="blog-widget-body">
                     <ul class="follow-list d-flex flex-row align-items-start gap-4">
                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="contact-form-wrap">
               <div class="form-tltle">
                  <h5>Make a Free Consulting</h5>
               </div>
               <div class="contact-form">
                  <form>
                     <div class="row">
                        <div class="col-md-6 mb-20">
                           <div class="form-inner">
                              <label>first name</label>
                              <input type="text">
                           </div>
                        </div>
                        <div class="col-md-6 mb-20">
                           <div class="form-inner">
                              <label>Last name</label>
                              <input type="text">
                           </div>
                        </div>
                        <div class="col-lg-12 mb-20">
                           <div class="form-inner">
                              <label>Company/Organization</label>
                              <input type="text">
                           </div>
                        </div>
                        <div class="col-lg-12 mb-20">
                           <div class="form-inner">
                              <label>Email</label>
                              <input type="email">
                           </div>
                        </div>
                        <div class="col-lg-12 mb-20">
                           <div class="form-inner">
                              <label>Phone</label>
                              <input type="email">
                           </div>
                        </div>
                        <div class="col-lg-12 mb-20">
                           <div class="form-inner">
                              <label>Message</label>
                              <textarea></textarea>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-inner">
                              <button class="primary-btn3" type="submit">Submit</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection