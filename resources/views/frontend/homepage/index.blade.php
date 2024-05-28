@extends('frontend.layouts.main')
@section('tittle')
<title>ATPL</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<div class="banner-area3">
   <div class="scroll-down">
      <a href="#home3-partner-area">
         Scroll Down
         <span>
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M0 1H12M12 1V13M12 1L0.5 12" />
            </svg>
         </span>
      </a>
   </div>
   <div class="banner-vector">
      <img class="img-fluid" src="{{ url('public/assets/img/home-3/banner-vector.png') }}" alt>
   </div>
   <div class="swiper-pagination1"></div>
   <div class="social-area">
      <ul>
         <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
         <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
         <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
         <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
      </ul>
   </div>
   <div class="swiper banner3-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <div class="banner-wrapper">
               <div class="banner-content">
                  <h1>Transform Your Business Today with Top-Notch Mobile Apps</h1>
                  <p> Elevate your business with our suite of mobile applications tailored for success. From e-commerce excellence to seamless delivery logistics and efficient freelance management, our apps drive growth and innovation</p>
                  <div class="banner-btn-group">
                     <a class="primary-btn3" href="javascript:void(0)">Free Consultancy</a>
                     <a class="primary-btn4" href="{{ url('about-us') }}">
                        <span>
                           <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                           </svg>
                        </span>
                        Explore More
                     </a>
                  </div>
               </div>
               <div class="banner-image magnetic-item">
                  <img class="img-fluid" src="{{ url('public/assets/img/home-3/home3-banner-img.png') }}" alt>
               </div>
               <!-- <div class="banner-video-area">
                  <div class="video-area">
                     <a data-fancybox="gallery" class="video-popup" href="https://www.youtube.com/watch?v=u31qwQUeGuM&ab_channel=JoomlaTemplate">
                        <svg width="30" height="34" viewBox="0 0 30 34" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3" d="M30 17.0012C30 16.0359 29.4735 15.1469 28.5906 14.6218L4.75661 0.46019C3.79257 -0.111681 2.61693 -0.153462 1.60777 0.351093C0.601772 0.855365 0 1.78612 0 2.83996V31.1609C0 32.2148 0.601723 33.1452 1.60931 33.6498C2.079 33.8837 2.5828 34 3.08665 34C3.66595 34 4.24144 33.8456 4.75628 33.5407L28.5903 19.3813C29.4734 18.8559 30 17.9669 30 17.0016V17.0012ZM27.7302 18.1537L3.89624 32.3131C3.42844 32.5905 2.85862 32.6093 2.36997 32.3668C1.88133 32.1225 1.58884 31.6719 1.58884 31.1607V2.83969C1.58884 2.32846 1.88133 1.8761 2.36997 1.63359C2.59834 1.52102 2.84346 1.46385 3.08699 1.46385C3.36811 1.46385 3.64734 1.53842 3.89658 1.68755L27.7306 15.8492C28.1646 16.1074 28.4135 16.5287 28.4135 17.0033C28.4131 17.4763 28.1642 17.8955 27.7302 18.1537Z" />
                        </svg>
                     </a>
                     <img class="video-img" src="{{ url('public/assets/img/home-3/home3-banner-video.png') }}" alt>
                  </div>
               </div> -->
            </div>
         </div>
         <div class="swiper-slide">
            <div class="banner-wrapper">
               <div class="banner-content">
                  <h1>Revolutionize Your Industry with Cutting-Edge Mobile Apps</h1>
                  <p> Experience innovation at its finest with our range of mobile applications. From optimized e-commerce experiences to streamlined delivery services and hassle-free freelance management, our apps redefine industry standards.</p>
                  <div class="banner-btn-group">
                     <a class="primary-btn3" href="javascript:void(0)">Free Consultancy</a>
                     <a class="primary-btn4" href="{{ url('about-us') }}">
                        <span>
                           <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                           </svg>
                        </span>
                        Explore More
                     </a>
                  </div>
               </div>
               <div class="banner-image magnetic-item">
                  <img class="img-fluid" src="{{ url('public/assets/img/home-3/home3-banner-img3.png') }}" alt>
               </div>
               <!-- <div class="banner-video-area">
                  <div class="video-area">
                     <a data-fancybox="gallery" class="video-popup" href="https://www.youtube.com/watch?v=u31qwQUeGuM&ab_channel=JoomlaTemplate">
                        <svg width="30" height="34" viewBox="0 0 30 34" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3" d="M30 17.0012C30 16.0359 29.4735 15.1469 28.5906 14.6218L4.75661 0.46019C3.79257 -0.111681 2.61693 -0.153462 1.60777 0.351093C0.601772 0.855365 0 1.78612 0 2.83996V31.1609C0 32.2148 0.601723 33.1452 1.60931 33.6498C2.079 33.8837 2.5828 34 3.08665 34C3.66595 34 4.24144 33.8456 4.75628 33.5407L28.5903 19.3813C29.4734 18.8559 30 17.9669 30 17.0016V17.0012ZM27.7302 18.1537L3.89624 32.3131C3.42844 32.5905 2.85862 32.6093 2.36997 32.3668C1.88133 32.1225 1.58884 31.6719 1.58884 31.1607V2.83969C1.58884 2.32846 1.88133 1.8761 2.36997 1.63359C2.59834 1.52102 2.84346 1.46385 3.08699 1.46385C3.36811 1.46385 3.64734 1.53842 3.89658 1.68755L27.7306 15.8492C28.1646 16.1074 28.4135 16.5287 28.4135 17.0033C28.4131 17.4763 28.1642 17.8955 27.7302 18.1537Z" />
                        </svg>
                     </a>
                     <img class="video-img" src="{{ url('public/assets/img/home-3/home3-banner-video.png') }}" alt>
                  </div>
               </div> -->
            </div>
         </div>
         <!-- <div class="swiper-slide">
            <div class="banner-wrapper">
               <div class="banner-content">
                  <h1>Grow Your Business With Innovative Ideas.</h1>
                  <p>Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero. Donec nec duomoi luctus, pellentesque lacus sed, mollis going leo.</p>
                  <div class="banner-btn-group">
                     <a class="primary-btn3" href="contact.html">Free Consultancy</a>
                     <a class="primary-btn4" href="about.html">
                        <span>
                           <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                           </svg>
                        </span>
                        Explore More
                     </a>
                  </div>
               </div>
               <div class="banner-image magnetic-item">
                  <img class="img-fluid" src="{{ url('public/assets/img/home-3/home3-banner-img2.png') }}" alt>
               </div>
               <div class="banner-video-area">
                  <div class="video-area">
                     <a data-fancybox="gallery" class="video-popup" href="https://www.youtube.com/watch?v=u31qwQUeGuM&ab_channel=JoomlaTemplate">
                        <svg width="30" height="34" viewBox="0 0 30 34" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3" d="M30 17.0012C30 16.0359 29.4735 15.1469 28.5906 14.6218L4.75661 0.46019C3.79257 -0.111681 2.61693 -0.153462 1.60777 0.351093C0.601772 0.855365 0 1.78612 0 2.83996V31.1609C0 32.2148 0.601723 33.1452 1.60931 33.6498C2.079 33.8837 2.5828 34 3.08665 34C3.66595 34 4.24144 33.8456 4.75628 33.5407L28.5903 19.3813C29.4734 18.8559 30 17.9669 30 17.0016V17.0012ZM27.7302 18.1537L3.89624 32.3131C3.42844 32.5905 2.85862 32.6093 2.36997 32.3668C1.88133 32.1225 1.58884 31.6719 1.58884 31.1607V2.83969C1.58884 2.32846 1.88133 1.8761 2.36997 1.63359C2.59834 1.52102 2.84346 1.46385 3.08699 1.46385C3.36811 1.46385 3.64734 1.53842 3.89658 1.68755L27.7306 15.8492C28.1646 16.1074 28.4135 16.5287 28.4135 17.0033C28.4131 17.4763 28.1642 17.8955 27.7302 18.1537Z" />
                        </svg>
                     </a>
                     <img class="video-img" src="{{ url('public/assets/img/home-3/home3-banner-video.png') }}" alt>
                  </div>
               </div>
            </div>
         </div> -->
      </div>
   </div>
</div>
<!-- <div class="home3-partner-area" id="home3-partner-area">
   <div class="container-fluid">
      <div class="row g-4">
         <div class="col-lg-3">
            <div class="partner-title">
               <h3>Our Collaborators</h3>
            </div>
         </div>
         <div class="col-lg-9">
            <div class="partner-wrapper">
               <div class="marquee_text">
                  <img src="{{ url('public/assets/img/home-3/partner-01.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-02.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-03.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-04.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-05.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-01.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-02.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-03.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-04.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-05.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-01.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-02.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-03.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-04.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/partner-05.svg') }}" alt>
                  <img src="{{ url('public/assets/img/home-3/star.svg') }}" alt>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->
<div class="home3-solution-section sec-mar">
   <div class="container">
      <div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
         <div class="col-lg-12 d-flex align-items-center justify-content-between gap-4 flex-wrap">
            <div class="section-title-3">
               <h2>Our Solutions</h2>
               <p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
            </div>
            <div class="swiper-btn-group">
               <div class="swiper-btn prevbtn1">
                  <i class="bi bi-arrow-left"></i>
               </div>
               <div class="swiper-btn nextbtn1">
                  <i class="bi bi-arrow-right"></i>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="swiper home3-solution-slider">
               <div class="swiper-wrapper">
                  @foreach(DB::table('services')->where('homepage' , 1)->get() as $r)
                  <div class="swiper-slide">
                     <div class="solution-card">
                        <div class="solution-content">
                           <h4><a href="{{ url('service') }}/{{ $r->url }}">{{ $r->name }}</a></h4>
                           <p>{{ $r->short_description }}</p>
                           <ul class="solution-feature">
                              
                              @foreach(array_slice(explode(',' , $r->bullet_points), 0, 2) as $b)
                              <li>
                                 <svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.226556 4.90093C-0.148557 5.12756 -0.0348499 5.69917 0.398417 5.76502C0.746772 5.81799 0.914159 6.22206 0.705247 6.50583C0.445407 6.85872 0.769204 7.34333 1.19469 7.23832C1.53676 7.15388 1.84612 7.46322 1.76168 7.80531C1.65668 8.23081 2.14127 8.55459 2.49417 8.29475C2.77794 8.08586 3.18208 8.25324 3.23497 8.60158C3.30081 9.03483 3.87242 9.14856 4.09907 8.77344C4.28129 8.47186 4.71872 8.47186 4.90093 8.77344C5.12756 9.14856 5.69917 9.03485 5.76502 8.60158C5.818 8.25323 6.22206 8.08584 6.50583 8.29475C6.85873 8.55459 7.34333 8.2308 7.23832 7.80531C7.15388 7.46324 7.46322 7.15388 7.80531 7.23832C8.23081 7.34332 8.55459 6.85872 8.29475 6.50583C8.08586 6.22206 8.25324 5.81792 8.60158 5.76502C9.03484 5.69918 9.14856 5.12758 8.77344 4.90093C8.47186 4.71871 8.47186 4.28128 8.77344 4.09907C9.14856 3.87244 9.03485 3.30083 8.60158 3.23497C8.25323 3.182 8.08584 2.77794 8.29475 2.49417C8.55459 2.14127 8.23079 1.65667 7.80531 1.76168C7.46324 1.84612 7.15388 1.53678 7.23832 1.19469C7.34332 0.769192 6.85873 0.445407 6.50583 0.705247C6.22206 0.914139 5.81792 0.74676 5.76502 0.398417C5.69918 -0.0348359 5.12758 -0.148563 4.90093 0.226557C4.71871 0.528142 4.28128 0.528142 4.09907 0.226557C3.87244 -0.148557 3.30083 -0.03485 3.23497 0.398417C3.182 0.746772 2.77794 0.914159 2.49417 0.705247C2.14127 0.445407 1.65667 0.769204 1.76168 1.19469C1.84612 1.53676 1.53678 1.84612 1.19469 1.76168C0.769192 1.65668 0.445407 2.14127 0.705247 2.49417C0.914139 2.77794 0.74676 3.18208 0.398417 3.23497C-0.0348358 3.30081 -0.148563 3.87242 0.226556 4.09907C0.528142 4.28129 0.528142 4.71872 0.226556 4.90093Z" />
                                 </svg>
                                 {{ $b }}
                              </li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="home3-about-section">
   <div class="container-fluid">
      <div class="row g-lg-4 gy-5">
         <div class="col-lg-9">
            <div class="section-title-3 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
               <h2>Our Approach</h2>
               <p>At ATPL, we believe in delivering mobile applications that not only meet but exceed your expectations. Our approach is centered around collaboration, innovation, and customer-centricity, ensuring that every app we create is a true reflection of your vision and objectives. Here's how we do it:</p>
            </div>
            <div class="about-left">
               <div class="about-img  wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                  <img class="img-fluid magnetic-item" src="{{ url('public/assets/img/home-3/home3-about-1.png') }}" alt>
               </div>
               <div class="about-content wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                  <h2>Unlock the potential of your business.</h2>
                  <p>With our collaborative approach and unwavering dedication to quality, we strive to be your trusted partner in bringing your mobile app vision to reality.</p>
                  <div class="devider"></div>
                  <ul class="about-feature">
                     <li>
                        <h5>Collaborative Ideation</h5>
                        <p>Services are professional w offerings provided.</p>
                     </li>
                     <li>
                        <h5>Creative Design</h5>
                        <p>Services are professional w offerings provided.</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="about-right">
               <div class="about-img wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <img class="img-fluid magnetic-item" src="{{ url('public/assets/img/home-3/home3-about-2.png') }}" alt>
               </div>
               <div class="about-exprience d-flex align-items-center justify-content-center wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                  <div class="exp-text">
                     <img src="{{ url('public/assets/img/home-3/rotate-text.png') }}" alt>
                  </div>
                  <div class="years">
                     <h2>10<br><span>Years</span></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="home3-success-stories-area sec-mar">
   <div class="container">
      <div class="row mb-60 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
         <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-4">
            <div class="section-title-3">
               <h2>Complited Projects</h2>
               <p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
            </div>
            <div class="view-all-btn">
               <a class="primary-btn3" href="{{ url('portfolio') }}">View All Project</a>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="swiper home3-success-stories-slider">
               <div class="swiper-wrapper">
                  @foreach(DB::table('projects')->get() as $r)
                  <div class="swiper-slide">
                     <div class="success-storie-card">
                        <div class="success-img">
                           <img class="img-fluid magnetic-item" src="{{ url('public/images') }}/{{ $r->image }}" alt>
                        </div>
                        <div class="success-content">
                           <h3><a href="{{ url('project') }}/{{ $r->slug }}">{{ $r->name }}</a></h3>
                           <div class="view-btn">
                              <a href="{{ url('project') }}/{{ $r->slug }}">
                                 <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
      <div class="row pt-50">
         <div class="col-lg-12 position-relative">
            <div class="swiper-pagination11"></div>
         </div>
      </div>
   </div>
</div>
<div class="home3-testimonil-area sec-mar">
   <div class="container">
      <div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
         <div class="col-lg-12 d-flex align-items-center justify-content-between gap-4 flex-wrap">
            <div class="section-title-3">
               <h2>Happy Customers</h2>
               <p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
            </div>
            <div class="swiper-btn-group">
               <div class="swiper-btn prevbtn2">
                  <i class="bi bi-arrow-left"></i>
               </div>
               <div class="swiper-btn nextbtn2">
                  <i class="bi bi-arrow-right"></i>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="swiper home3-testimonial-slider">
               <div class="swiper-wrapper">
                  @foreach(DB::table('testimonials')->get() as $r)
                  <div class="swiper-slide">
                     <div class="testimonial-card3">
                        <div class="testimonial-content">
                           <p>“{{ $r->testimonial }}”
                           </p>
                        </div>
                        <div class="testimonial-btm">
                           <div class="author-area">
                              <div class="author-content">
                                 <h4>{{ $r->name }}</h4>
                              </div>
                           </div>
                           <div class="review-date-and-time">
                              <p>{{ Cmf::date_format($r->created_at) }}</p>
                           </div>
                        </div>
                     </div>
                     <div class="author-img">
                        <img src="{{ url('public/images') }}/{{ $r->image }}" alt>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="home3-contact-area sec-mar">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="contact-wrapper text-center">
               <h2 class="marquee_text">We take care of your IT, So You Can Focus on Your Business.</h2>
               <div class="contact-btn magnetic-item  wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <a href="{{ url('contact-us') }}">
                     Contact With Us.
                     <svg width="32" height="32" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                     </svg>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="home3-team-area sec-mar">
   <div class="container">
      <div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
         <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-title-3 text-center">
               <h2>Team Members</h2>
               <p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach(DB::table('agents')->get() as $r)
         <div class="col-lg-3 col-sm-6 experts wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="experts-card magnetic-item">
               <div class="experts-img">
                  <img class="img-fluid" src="{{ url('public/images') }}/{{ $r->image }}" alt>
               </div>
               <div class="experts-content">
                  <h4>{{ $r->name }}</h4>
                  <span>{{ $r->designation }}</span>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<div class="home3-blog-area sec-mar">
   <div class="container">
      <div class="row mb-55  wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
         <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-title-3 text-center">
               <h2>The Latest Article</h2>
               <p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center g-lg-4 gy-5">
         @foreach(DB::table('blogs')->orderby('id' , 'desc')->limit(3)->get() as $r)
         <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="single-blog magnetic-item">
               <div class="blog-img">
                  <img class="img-fluid" src="{{ url('public/assets/img/home-3/home3-blog-01.png') }}" alt>
                  <div class="blog-tag">
                     <a href="{{ url('category') }}/{{ DB::table('blogcategories')->where('id' , $r->category_id)->first()->url }}">{{ DB::table('blogcategories')->where('id' , $r->category_id)->first()->name }}</a>
                  </div>
               </div>
               <div class="blog-content">
                  <ul class="blog-meta">
                     <li><a href="{{ url('blog') }}/{{ $r->url }}">{{ Cmf::date_format($r->created_at) }}</a></li>
                  </ul>
                  <h4><a href="blog-details.html">{{ $r->title }}</a></h4>
                  <div class="blog-footer">
                     <div class="read-btn">
                        <a href="{{ url('blog') }}/{{ $r->url }}">
                           Read More
                           <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection