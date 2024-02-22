@extends('frontend.layouts.main')
@section('tittle')
<title>ATPL</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<div class="home3-solution-section">
  <div class="container-fluid">
      <div class="headersection">
          <div class="row">
              <div class="col-md-6"> 
                  <div class="heading">
                      <h1 class="text-white">Transforming The Way YouLaunch.</h1>
                      <h1>Run. Grow YourBusiness Digitally</h1>
                  </div>
              </div>
              <div class="col-md-6"> 
                <div style="background-image: url('https://cdn-gnpmp.nitrocdn.com/zXfatNvCxdJLOJQwdBcjdAFpyWHclmaD/assets/images/optimized/rev-75d7a0a/www.code-brew.com/wp-content/uploads/2021/03/3b4889417bb5ae0f1b1e97c0f6ed721e.homeBanner.jpeg');height: 500px;">
                  
                </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="home3-solution-section">
  <div class="container-fluid">
      <div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="col-lg-12 d-flex align-items-center justify-content-between gap-4 flex-wrap">
              <div class="section-title-3">
                  <h2 class="text-left">Top Ratted Applications</h2>
                  <p>Welcome to our premier mobile application hub, where convenience meets innovation! Explore top-rated apps across diverse categories including eCommerce, Taxi, and Education. Shop effortlessly, simplify your commute, and unlock a world of knowledge with interactive lessons and personalized study plans. Discover the perfect app for every need, right at your fingertips. Start exploring today!</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4">
              <div class="solution-card">
                  <div class="icon">
                      <span class="material-symbols-outlined solution-icon">shopping_cart</span>
                  </div>
                  <div class="solution-content">
                      <h4><a href="{{ url('ecommerece-app') }}">Ecommerece App</a></h4>
                      <p>Empower your business with our cutting-edge eCommerce mobile application. Seamlessly bridging the gap between your products and your customers, our app delivers an unparalleled shopping experience on the go. From browsing to checkout, we've crafted every detail to enhance engagement and drive sales.</p>
                      <ul class="solution-feature">
                          <li>
                             Intuitive user interface for effortless navigation
                          </li>
                          <li>
                             Secure payment gateway integration for safe transactions
                          </li>
                          <li>Personalized recommendations based on user preferences</li>
                          <li>Real-time order tracking to keep customers informed</li>
                          <li>Push notifications for exclusive deals and updates</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="solution-card">
                  <div class="icon">
                      <span class="material-symbols-outlined solution-icon">local_taxi</span>
                  </div>
                  <div class="solution-content">
                      <h4><a href="{{ url('taxi-app') }}">Taxi App</a></h4>
                      <p>Revolutionize urban transportation with our innovative Taxi mobile application. Designed to simplify commuting and enhance passenger experiences, our app connects riders with reliable transportation services at their fingertips. From quick bookings to secure payments, we've engineered every aspect to redefine the way people move around the city.</p>
                      <ul class="solution-feature">
                          <li>
                             Instant booking for on-demand rides
                          </li>
                          <li>
                             GPS-based tracking for real-time driver location
                          </li>
                          <li>Secure in-app payments for hassle-free transactions</li>
                          <li>Ratings and reviews system for driver feedback</li>
                          <li>Multi-language support for broader accessibility</li>
                          <li>Schedule rides in advance for convenience</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="solution-card">
                  <div class="icon">
                      <span class="material-symbols-outlined solution-icon">school</span>
                  </div>
                  <div class="solution-content">
                      <h4><a href="{{ url('taxi-app') }}">Education App</a></h4>
                      <p>Embark on a journey of knowledge and discovery with our Education mobile application. Empowering learners of all ages and backgrounds, our app provides access to a vast array of educational resources, interactive lessons, and personalized learning experiences. Whether you're a student, educator, or lifelong learner, our platform is your gateway to limitless learning opportunities anytime, anywhere.</p>
                      <ul class="solution-feature">
                          <li>
                             Instant booking for on-demand rides
                          </li>
                          <li>
                             GPS-based tracking for real-time driver location
                          </li>
                          <li>Secure in-app payments for hassle-free transactions</li>
                          <li>Ratings and reviews system for driver feedback</li>
                          <li>Multi-language support for broader accessibility</li>
                          <li>Schedule rides in advance for convenience</li>
                      </ul>
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
                  <p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
              </div>
              <div class="about-left">
                  <div class="about-img  wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                      <img class="img-fluid magnetic-item" src="{{ url('public/assets/img/home-3/home3-about-1.png') }}" alt>
                  </div>
                  <div class="about-content wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                      <h2>Unlock the potential of your business.</h2>
                      <p>We believe in delivering tailored solutions that are designed to address your unique requirements. We take the time to understand your business and provide personalized services that align with your goals.</p>
                      <div class="devider"></div>
                      <ul class="about-feature">
                          <li>
                              <h5>Customized Solutions</h5>
                              <p>Services are professional w offerings provided.</p>
                          </li>
                          <li>
                              <h5>Quality Reliability</h5>
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
                  <a class="primary-btn3" href="project.html">View All Project</a>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="swiper home3-success-stories-slider">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="success-storie-card">
                              <div class="success-img">
                                  <img class="img-fluid magnetic-item" src="{{ url('public/assets/img/home-3/home3-suc-sto-01.png') }}" alt>
                              </div>
                              <div class="success-content">
                                  <span>Web development</span>
                                  <h3><a href="project-details.html">Streamlining IT Infrastructure</a></h3>
                                  <div class="view-btn">
                                      <a href="project-details.html">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="success-storie-card">
                              <div class="success-img">
                                  <img class="img-fluid magnetic-item" src="{{ url('public/assets/img/home-3/home3-suc-sto-02.png') }}" alt>
                              </div>
                              <div class="success-content">
                                  <span>Web development</span>
                                  <h3><a href="project-details.html">Transforming Customer Experience</a></h3>
                                  <div class="view-btn">
                                      <a href="#">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="success-storie-card">
                              <div class="success-img">
                                  <img class="img-fluid magnetic-item" src="{{ url('public/assets/img/home-3/home3-suc-sto-03.png') }}" alt>
                              </div>
                              <div class="success-content">
                                  <span>Web development</span>
                                  <h3><a href="project-details.html">Scaling Agile Development</a></h3>
                                  <div class="view-btn">
                                      <a href="project-details.html">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="success-storie-card">
                              <div class="success-img">
                                  <img class="img-fluid magnetic-item" src="{{ url('public/assets/img/home-3/home3-suc-sto-04.png') }}" alt>
                              </div>
                              <div class="success-content">
                                  <span>Web development</span>
                                  <h3><a href="project-details.html">Optimizing IT Operations</a></h3>
                                  <div class="view-btn">
                                      <a href="project-details.html">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="success-storie-card">
                              <div class="success-img">
                                  <img class="img-fluid magnetic-item" src="{{ url('public/assets/img/home-3/home3-suc-sto-05.png') }}" alt>
                              </div>
                              <div class="success-content">
                                  <span>Web development</span>
                                  <h3><a href="project-details.html">Maximizing Efficiency with DevOps</a></h3>
                                  <div class="view-btn">
                                      <a href="project-details.html">
<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
</svg>
</a>
                                  </div>
                              </div>
                          </div>
                      </div>
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
                      <div class="swiper-slide">
                          <div class="testimonial-card3">
                              <div class="quate-icon">
                                  <img src="{{ url('public/assets/img/home-4/left-quote.svg') }}" alt>
                              </div>
                              <div class="testimonial-top">
                                  <div class="review-left">
                                      <img src="{{ url('public/assets/img/home-4/trustpilot.svg') }}" alt>
                                  </div>
                                  <div class="review-right">
                                      <img src="{{ url('public/assets/img/home-4/trastpilot-star.svg') }}" alt>
                                  </div>
                              </div>
                              <div class="testimonial-content">
                                  <p>“Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. and utoor himenaeos. Praesent nec neque at dolor venenatis consectetur european gon Donec lacinia placerat felis non aliquam.”</p>
                              </div>
                              <div class="testimonial-btm">
                                  <div class="author-area">
                                      <div class="author-content">
                                          <h4>Mateo Daniel</h4>
                                          <span>CEO At atlantis.com</span>
                                      </div>
                                  </div>
                                  <div class="review-date-and-time">
                                      <p>May 9, 2023</p>
                                      <span>10.30 PM</span>
                                  </div>
                              </div>
                          </div>
                          <div class="author-img">
                              <img src="{{ url('public/assets/img/home-3/h3-testi-01.png') }}" alt>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="testimonial-card3">
                              <div class="quate-icon">
                                  <img src="{{ url('public/assets/img/home-4/left-quote.svg') }}" alt>
                              </div>
                              <div class="testimonial-top">
                                  <div class="review-left">
                                      <img src="{{ url('public/assets/img/home-4/google.svg') }}" alt>
                                  </div>
                                  <div class="review-right">
                                      <ul class="star">
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="testimonial-content">
                                  <p>“Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. and utoor himenaeos. Praesent nec neque at dolor venenatis consectetur european gon Donec lacinia placerat felis non aliquam.”</p>
                              </div>
                              <div class="testimonial-btm">
                                  <div class="author-area">
                                      <div class="author-content">
                                          <h4>Mateo Daniel</h4>
                                          <span>CEO At atlantis.com</span>
                                      </div>
                                  </div>
                                  <div class="review-date-and-time">
                                      <p>May 9, 2023</p>
                                      <span>10.30 PM</span>
                                  </div>
                              </div>
                          </div>
                          <div class="author-img">
                              <img src="{{ url('public/assets/img/home-3/h3-testi-02.png') }}" alt>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="testimonial-card3">
                              <div class="quate-icon">
                                  <img src="{{ url('public/assets/img/home-4/left-quote.svg') }}" alt>
                              </div>
                              <div class="testimonial-top">
                                  <div class="review-left">
                                      <img src="{{ url('public/assets/img/home-4/trustpilot.svg') }}" alt>
                                  </div>
                                  <div class="review-right">
                                      <img src="{{ url('public/assets/img/home-4/trastpilot-star.svg') }}" alt>
                                  </div>
                              </div>
                              <div class="testimonial-content">
                                  <p>“Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. and utoor himenaeos. Praesent nec neque at dolor venenatis consectetur european gon Donec lacinia placerat felis non aliquam.”</p>
                              </div>
                              <div class="testimonial-btm">
                                  <div class="author-area">
                                      <div class="author-content">
                                          <h4>Mateo Daniel</h4>
                                          <span>CEO At atlantis.com</span>
                                      </div>
                                  </div>
                                  <div class="review-date-and-time">
                                      <p>May 9, 2023</p>
                                      <span>10.30 PM</span>
                                  </div>
                              </div>
                          </div>
                          <div class="author-img">
                              <img src="{{ url('public/assets/img/home-3/h3-testi-03.png') }}" alt>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="home3-pricing-plan-area sec-mar">
  <div class="container">
      <div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="col-lg-12 d-flex align-items-center justify-content-between gap-4 flex-wrap">
              <div class="section-title-3">
                  <h2>Choose Your Plan</h2>
                  <p>Services are professional offerings provided by businesses to meet specific needs or solve problems for their customers. Services can range from your budject.</p>
              </div>
              <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Billed Monthly</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Billed Yearly</button>
                  </div>
              </nav>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                      <div class="row g-lg-0 g-4 align-items-center justify-content-center">
                          <div class="col-xl-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                              <div class="pricing-card">
                                  <div class="pricing-top">
                                      <div class="left">
                                          <span>Basic Plan</span>
                                          <h2><sup>$</sup>29<sub>/Month</sub></h2>
                                      </div>
                                      <div class="right">
                                          <img src="{{ url('public/assets/img/home-3/pricing-vec1.svg') }}" alt>
                                      </div>
                                  </div>
                                  <div class="pricing-content">
                                      <ul>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Email & communication services
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Basic data backup and storage
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Standard security measuresimg
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Limited software support
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Suitable for small businesses
                                          </li>
                                      </ul>
                                      <div class="pay-btn">
                                          <a class="primary-btn3" href="#">Pay Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                              <div class="pricing-card two">
                                  <div class="pricing-top">
                                      <div class="left">
                                          <span>Professional Plan</span>
                                          <h2><sup>$</sup>44<sub>/Month</sub></h2>
                                      </div>
                                      <div class="right">
                                          <div class="offer-tag">
                                              <img src="{{ url('public/assets/img/home-3/price-bg.svg') }}" alt>
                                              <h5>30% <br><span>Off</span></h5>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="pricing-content">
                                      <ul>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Email & communication services
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Basic data backup and storage
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Standard security measuresimg
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Limited software support
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Suitable for small businesses
                                          </li>
                                      </ul>
                                      <div class="pay-btn">
                                          <a class="primary-btn3" href="#">Pay Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6 wow animate fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                              <div class="pricing-card">
                                  <div class="pricing-top">
                                      <div class="left">
                                          <span>Enterprise Plan</span>
                                          <h2><sup>$</sup>89<sub>/Month</sub></h2>
                                      </div>
                                      <div class="right">
                                          <img src="{{ url('public/assets/img/home-3/pricing-vec2.svg') }}" alt>
                                      </div>
                                  </div>
                                  <div class="pricing-content">
                                      <ul>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Email & communication services
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Basic data backup and storage
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Standard security measuresimg
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Limited software support
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Suitable for small businesses
                                          </li>
                                      </ul>
                                      <div class="pay-btn">
                                          <a class="primary-btn3" href="#">Pay Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                      <div class="row g-lg-0 g-4 align-items-center justify-content-center">
                          <div class="col-xl-4 col-md-6">
                              <div class="pricing-card">
                                  <div class="pricing-top">
                                      <div class="left">
                                          <span>Basic Plan</span>
                                          <h2><sup>$</sup>290<sub>/Year</sub></h2>
                                      </div>
                                      <div class="right">
                                          <img src="{{ url('public/assets/img/home-3/pricing-vec1.svg') }}" alt>
                                      </div>
                                  </div>
                                  <div class="pricing-content">
                                      <ul>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Email & communication services
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Basic data backup and storage
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Standard security measuresimg
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Limited software support
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Suitable for small businesses
                                          </li>
                                      </ul>
                                      <div class="pay-btn">
                                          <a class="primary-btn3" href="#">Pay Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                              <div class="pricing-card two">
                                  <div class="pricing-top">
                                      <div class="left">
                                          <span>Professional Plan</span>
                                          <h2><sup>$</sup>440<sub>/Year</sub></h2>
                                      </div>
                                      <div class="right">
                                          <div class="offer-tag">
                                              <img src="{{ url('public/assets/img/home-3/price-bg.svg') }}" alt>
                                              <h5>30% <br><span>Off</span></h5>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="pricing-content">
                                      <ul>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Email & communication services
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Basic data backup and storage
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Standard security measuresimg
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Limited software support
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Suitable for small businesses
                                          </li>
                                      </ul>
                                      <div class="pay-btn">
                                          <a class="primary-btn3" href="#">Pay Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                              <div class="pricing-card">
                                  <div class="pricing-top">
                                      <div class="left">
                                          <span>Enterprise Plan</span>
                                          <h2><sup>$</sup>890<sub>/Year</sub></h2>
                                      </div>
                                      <div class="right">
                                          <img src="{{ url('public/assets/img/home-3/pricing-vec2.svg') }}" alt>
                                      </div>
                                  </div>
                                  <div class="pricing-content">
                                      <ul>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Email & communication services
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Basic data backup and storage
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Standard security measuresimg
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Limited software support
                                          </li>
                                          <li>
                                              <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<circle cx="8" cy="8" r="8" />
<path d="M6.34172 12.8L6.28743 12.6983C5.45809 11.1441 3.25425 7.84599 3.23199 7.81286L3.2002 7.76536L3.95103 6.94922L6.32778 8.77458C7.82424 6.63876 9.22034 5.17178 10.131 4.31512C11.1272 3.37803 12.7936 3.20415 12.8002 3.20001C9.6713 6.26525 6.42863 12.632 6.39485 12.6975L6.34172 12.8Z" />
</svg> Suitable for small businesses
                                          </li>
                                      </ul>
                                      <div class="pay-btn">
                                          <a class="primary-btn3" href="#">Pay Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
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
                      <a href="contact.html">
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
          <div class="col-lg-3 col-sm-6 experts wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
              <div class="experts-card magnetic-item">
                  <div class="experts-img">
                      <img class="img-fluid" src="{{ url('public/assets/img/home-4/experts-01.png') }}" alt>
                      <div class="expert-social">
                          <ul>
                              <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                              <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                              <li><a href="https://www.instagram.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                              <li><a href="https://www.pinterest.com/"><i class="bx bxl-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="experts-content">
                      <h4>Mateo Daniel</h4>
                      <span>Founder, CTO</span>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 experts wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
              <div class="experts-card magnetic-item">
                  <div class="experts-img">
                      <img class="img-fluid" src="{{ url('public/assets/img/home-4/experts-02.png') }}" alt>
                      <div class="expert-social">
                          <ul>
                              <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                              <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                              <li><a href="https://www.instagram.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                              <li><a href="https://www.pinterest.com/"><i class="bx bxl-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="experts-content">
                      <h4>Elias Josiah</h4>
                      <span>Co-Founder, CEO</span>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 experts wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
              <div class="experts-card magnetic-item">
                  <div class="experts-img">
                      <img class="img-fluid" src="{{ url('public/assets/img/home-4/experts-03.png') }}" alt>
                      <div class="expert-social">
                          <ul>
                              <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                              <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                              <li><a href="https://www.instagram.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                              <li><a href="https://www.pinterest.com/"><i class="bx bxl-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="experts-content">
                      <h4>Miles Jaxon</h4>
                      <span>Head of HR & Manager</span>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 experts wow animate fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
              <div class="experts-card magnetic-item">
                  <div class="experts-img">
                      <img class="img-fluid" src="{{ url('public/assets/img/home-4/experts-04.png') }}" alt>
                      <div class="expert-social">
                          <ul>
                              <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                              <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                              <li><a href="https://www.instagram.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                              <li><a href="https://www.pinterest.com/"><i class="bx bxl-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="experts-content">
                      <h4>Silas Nicholas</h4>
                      <span>Software Engineer</span>
                  </div>
              </div>
          </div>
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
          <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
              <div class="single-blog magnetic-item">
                  <div class="blog-img">
                      <img class="img-fluid" src="{{ url('public/assets/img/home-3/home3-blog-01.png') }}" alt>
                      <div class="blog-tag">
                          <a href="blog.html">Web development</a>
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
                              <a href="blog-details.html">Read More
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
                          <a href="blog.html">Cloud solutions</a>
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
                              <a href="blog-details.html">Read More
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
                          <a href="blog.html">Web development</a>
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
                              <a href="blog-details.html">Read More
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