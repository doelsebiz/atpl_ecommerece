@extends('frontend.layouts.main')
@section('tittle')
<title>ATPL</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<div class="banner-area3">
   <div class="banner-vector">
      <img class="img-fluid" src="assets/img/home-3/banner-vector.png" alt>
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
                  <h1>Empower Your Online Retail Presence</h1>
                  <p>Unlock the potential of your online business with our advanced Ecommerce Application. Seamlessly integrated features, intuitive user interface, and robust security protocols empower you to thrive in the competitive digital marketplace. Elevate your customer experience, streamline operations, and maximize profits effortlessly. Discover the power of our platform today.</p>
                  <div class="banner-btn-group">
                     <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Get Quote</a>
                     <a class="primary-btn4" href="{{ url('ecommerece-application') }}">
                        <span>
                           <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                           </svg>
                        </span>
                        Ecommerece Application
                     </a>
                  </div>
               </div>
               <div class="banner-image">
                  <img class="img-fluid" src="https://www.code-brew.com/wp-content/uploads/2019/08/img_1.png" alt>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="home6-choose-section">
   <div class="container-fluid">
      <div class="row">
         <div class="choose-top">
            <div class="row">
               <div class="col-lg-12">
                  <div class="choose-title">
                     <span>Why Choose Us</span>
                     <h2>Our Approach</h2>
                     <p class="text-white">Tailored Solutions for Your Ecommerce Success. Harnessing innovation and expertise, we craft intuitive and scalable applications that elevate your online retail experience. With a focus on user-centric design and cutting-edge technology, we empower businesses to thrive in the digital marketplace.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="choose-btm">
            <div class="row  g-lg-4 gy-5">
               <div class="col-lg-7">
                  <div class="choose-left-content">
                     <h4>Best Creative IT Agency And Solutions <br>
                        <span>Since 2005.</span>
                     </h4>
                     <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. Wikipedia In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. Wikipedia</p>
                     <div class="sl">
                        
                     </div>
                     <div class="about-btn">
                        <a href="{{ url('about-us') }}">
                           <svg width="7" height="7" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                           </svg>
                           About More
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="choose-feature">
                     <ul>
                        <li>
                           <div class="single-feature">
                              <div class="content">
                                 <h4>Build Interactive Designs</h4>
                                 <p class="text-white">Our in-house designer suite, Allurive, follows a unique approach to create outstanding customer experience for your business</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="single-feature">
                              <div class="content">
                                 <h4>Take Better Business Decisions</h4>
                                 <p class="text-white">A secret tool, Retainlytics, to gather accurate data and drive personalized, customer-focused marketing for your brand</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="single-feature">
                              <div class="content">
                                 <h4>Enjoy Flexibility To Customize</h4>
                                 <p class="text-white">Create extraordinary value for business with an app which is tailored specifically for your business needs</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="single-feature">
                              <div class="content">
                                 <h4>A Robust & Scalable App</h4>
                                 <p class="text-white">Greater scope of scalability help attract & manage new opportunities arising for your business in the future</p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="home4-feature-area mt-4 mb-4">
   <div class="container-fluid">
      <div class="row g-xl-4 gy-5">
          <div class="col-xl-12 d-flex justify-content-end">
            <div class="counter-area">
               <div class="row g-lg-0 gy-5">
                  <div class="col-lg-3 col-sm-6 d-flex justify-content-center wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms;">
                     <div class="single-counter">
                        <div class="icon">
                           
                        </div>
                        <div class="content">
                           <div class="number">
                              <h3 class="counter">600</h3>
                           </div>
                           <p>Top Vetted Developers</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex justify-content-center devider wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms;">
                     <div class="single-counter">
                        <div class="icon">
                          
                        </div>
                        <div class="content">
                           <div class="number">
                              <h3 class="counter">1.5</h3>
                              <h3 class="ml-5">k</h3>
                              <span>Customer</span>
                           </div>
                           <p>Global Businesses</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex justify-content-center devider wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms;">
                     <div class="single-counter">
                        <div class="icon">
                           
                        </div>
                        <div class="content">
                           <div class="number">
                              <h3 class="counter">800</h3>
                              <span>Project</span>
                           </div>
                           <p>Industries Covered</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex justify-content-center devider wow animate fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms;">
                     <div class="single-counter">
                        <div class="icon">
                           
                        </div>
                        <div class="content">
                           <div class="number">
                              <h3 class="counter">15</h3>
                              <span>Awards</span>
                           </div>
                           <p>Countries Served</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
              <div class="d-flex" style="padding-left: 100px;padding-right: 100px;padding-top: 30px;">
                <div style="width: 70%;">
                  <h2 class="text-white">Setup A Free Consultation To Know How To Take Your Ideas From Concept To Reality</h2>
                </div>
                <div style="width: 30%;text-align: end;">
                  <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Schedule a Call</a>
                </div>
                
              </div>
         </div>
      </div>
   </div>
</div>
<div class="home3-solution-section mt-4 mb-4">
  <div class="container-fluid">
      <div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="col-lg-12 d-flex align-items-center justify-content-between gap-4 flex-wrap">
              <div class="section-title-3">
                  <h2 class="text-center">Top Ratted Applications</h2>
                  <p class="text-center">Welcome to our premier mobile application hub, where convenience meets innovation! Explore top-rated apps across diverse categories including eCommerce, Taxi, and Education. Shop effortlessly, simplify your commute, and unlock a world of knowledge with interactive lessons and personalized study plans. Discover the perfect app for every need, right at your fingertips. Start exploring today!</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4">
              <div class="solution-card">
                  <a href="{{ url('ecommerece-app') }}">
                      <div class="icon d-flex">
                        <span class="material-symbols-outlined solution-icon">shopping_cart</span> <span class="serviceheading">Ecommerece App</span>
                    </div>
                    <div class="solution-content">
                        <p>Empower your business with our cutting-edge eCommerce mobile application. Seamlessly bridging the gap between your products and your customers, our app delivers an unparalleled shopping experience on the go. From browsing to checkout, we've crafted every detail to enhance engagement and drive sales.</p>
                        <ul class="solution-feature">
                            <li>Intuitive user interface for effortless navigation</li>
                            <li>Secure payment gateway integration for safe transactions</li>
                            <li>Personalized recommendations based on user preferences</li>
                            <li>Real-time order tracking to keep customers informed</li>
                            <li>Push notifications for exclusive deals and updates</li>
                        </ul>
                    </div>
                  </a>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="solution-card">
                  <a href="{{ url('taxi-app') }}">
                      <div class="icon d-flex">
                        <span class="material-symbols-outlined solution-icon">local_taxi</span> <span class="serviceheading">Taxi App</span>
                    </div>
                    <div class="solution-content">
                        <p>Revolutionize urban transportation with our innovative Taxi mobile application. Designed to simplify commuting and enhance passenger experiences, our app connects riders with reliable transportation services at their fingertips. From quick bookings to secure payments, we've engineered every aspect to redefine the way people move around the city.</p>
                        <ul class="solution-feature">
                            <li>Instant booking for on-demand rides</li>
                            <li>GPS-based tracking for real-time driver location</li>
                            <li>Secure in-app payments for hassle-free transactions</li>
                            <li>Ratings and reviews system for driver feedback</li>
                            <li>Multi-language support for broader accessibility</li>
                        </ul>
                    </div>
                  </a>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="solution-card">
                  <a href="{{ url('education-app') }}">
                    <div class="icon d-flex">
                      <span class="material-symbols-outlined solution-icon">school</span> <span class="serviceheading">Education App</span>
                  </div>
                  <div class="solution-content">
                      <p>Embark on a journey of knowledge and discovery with our Education mobile application. Empowering learners of all ages and backgrounds, our app provides access to a vast array of educational resources, interactive lessons, and personalized learning experiences. Whether you're a student, educator, or lifelong learner, our platform is your gateway to limitless learning opportunities anytime, anywhere.</p>
                      <ul class="solution-feature">
                          <li>Instant booking for on-demand rides</li>
                          <li>GPS-based tracking for real-time driver location</li>
                          <li>Secure in-app payments for hassle-free transactions</li>
                          <li>Ratings and reviews system for driver feedback</li>
                          <li>Multi-language support for broader accessibility</li>
                      </ul>
                  </div>
                  </a>
              </div>
          </div>
          <div class="col-lg-4 mt-4">
              <div class="solution-card">
                  <a href="{{ url('pharmacy-app') }}">
                    <div class="icon d-flex">
                      <span class="material-symbols-outlined solution-icon">medication</span> <span class="serviceheading">Pharmacy App</span>
                  </div>
                  <div class="solution-content">
                      <p>Embark on a journey of knowledge and discovery with our Education mobile application. Empowering learners of all ages and backgrounds, our app provides access to a vast array of educational resources, interactive lessons, and personalized learning experiences. Whether you're a student, educator, or lifelong learner, our platform is your gateway to limitless learning opportunities anytime, anywhere.</p>
                      <ul class="solution-feature">
                          <li>Instant booking for on-demand rides</li>
                          <li>GPS-based tracking for real-time driver location</li>
                          <li>Secure in-app payments for hassle-free transactions</li>
                          <li>Ratings and reviews system for driver feedback</li>
                          <li>Multi-language support for broader accessibility</li>
                      </ul>
                  </div>
                  </a>
              </div>
          </div>
          <div class="col-lg-4 mt-4">
              <div class="solution-card">
                  <a href="{{ url('fitness-app') }}">
                    <div class="icon d-flex">
                      <span class="material-symbols-outlined solution-icon">fitness_center</span> <span class="serviceheading">Fitness App</span>
                  </div>
                  <div class="solution-content">
                      <p>Embark on a journey of knowledge and discovery with our Education mobile application. Empowering learners of all ages and backgrounds, our app provides access to a vast array of educational resources, interactive lessons, and personalized learning experiences. Whether you're a student, educator, or lifelong learner, our platform is your gateway to limitless learning opportunities anytime, anywhere.</p>
                      <ul class="solution-feature">
                          <li>Instant booking for on-demand rides</li>
                          <li>GPS-based tracking for real-time driver location</li>
                          <li>Secure in-app payments for hassle-free transactions</li>
                          <li>Ratings and reviews system for driver feedback</li>
                          <li>Multi-language support for broader accessibility</li>
                      </ul>
                  </div>
                  </a>
              </div>
          </div>
          <div class="col-lg-4 mt-4">
              <div class="solution-card">
                  <a href="{{ url('education-app') }}">
                    <div class="icon d-flex">
                      <span class="material-symbols-outlined solution-icon">laundry</span> <span class="serviceheading">Laundry App</span>
                  </div>
                  <div class="solution-content">
                      <p>Embark on a journey of knowledge and discovery with our Education mobile application. Empowering learners of all ages and backgrounds, our app provides access to a vast array of educational resources, interactive lessons, and personalized learning experiences. Whether you're a student, educator, or lifelong learner, our platform is your gateway to limitless learning opportunities anytime, anywhere.</p>
                      <ul class="solution-feature">
                          <li>Instant booking for on-demand rides</li>
                          <li>GPS-based tracking for real-time driver location</li>
                          <li>Secure in-app payments for hassle-free transactions</li>
                          <li>Ratings and reviews system for driver feedback</li>
                          <li>Multi-language support for broader accessibility</li>
                      </ul>
                  </div>
                  </a>
              </div>
          </div>

      </div>
  </div>
</div>
<div class="home3-blog-area sec-mar">
  <div class="container-fluid">
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