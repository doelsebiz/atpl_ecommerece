@extends('frontend.layouts.main')
@section('tittle')
<title>Education App</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<!-- PLUGINS STYLESHEET -->
<link href="{{ url('public/app/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick.css') }}" rel="stylesheet">
<link href="{{ url('public/app/css/slick-theme.css') }}" rel="stylesheet">

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
<!-- END HERO-1 -->
<!-- FEATURES-1
   ============================================= -->
<section id="features-1" style="padding-top: 50px;" class="p-bottom-60 featuress-section division">
   <div class="container">
      <div class="row">
         <!-- FEATURE BOX #1 -->
         <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="fbox-1 box-icon-lg blue-icon">
               <!-- Icon -->
               <span class="pe-7s-global"></span>
               <!-- Title -->
               <h5 class="h5-md">Global Experience</h5>
               <!-- Text -->
               <p class="grey-color">Semper lacus cursus porta, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor, felis lacinia risus porta
               </p>
            </div>
         </div>
         <!-- FEATURE BOX #2 -->
         <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="400">
            <div class="fbox-1 box-icon-lg blue-icon">
               <!-- Icon -->
               <span class="pe-7s-safe"></span>
               <!-- Title -->
               <h5 class="h5-md">Secure Payments</h5>
               <!-- Text -->
               <p class="grey-color">Feugiat primis ultrice semper lacus cursus porta, in ligula risus auctor tempus feugiat dolor, felis lacinia risus porta
               </p>
            </div>
         </div>
         <!-- FEATURE BOX #3 -->
         <div class="col-md-4 animated" data-animation="fadeInUp" data-animation-delay="500">
            <div class="fbox-1 box-icon-lg blue-icon">
               <!-- Icon -->
               <span class="pe-7s-bell"></span>
               <!-- Title -->
               <h5 class="h5-md">Notifications</h5>
               <!-- Text -->
               <p class="grey-color">Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor, felis lacinia risus porta
               </p>
            </div>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<!-- END FEATURES-1 -->
<!-- CONTENT-4
   ============================================= -->
<section id="content-4" class="bg-scroll wide-60 content-section division">
   <div class="container">
      <div class="row d-flex align-items-center">
         <!-- CONTENT IMAGE -->
         <div class="col-md-6 animated" data-animation="fadeInRight" data-animation-delay="500">
            <div class="content-img">
               <img class="img-fluid" src="{{ url('public/app/images/hero-5-img.png') }}" alt="content-image" />
            </div>
         </div>
         <!-- CONTENT TEXT -->
         <div class="col-md-6">
            <div class="content-txt ind-45">
               <!-- Title -->
               <h2 class="h2-xs animated" data-animation="fadeInLeft" data-animation-delay="300">
                  Most Efficient Bitcoin Wallet
               </h2>
               <!-- Text -->
               <p class="animated" data-animation="fadeInLeft" data-animation-delay="400">
                  An enim nullam tempor sapien gravida donec enim ipsum porta justo integer at odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus
               </p>
               <!-- Title -->
               <h5 class="h5-md animated" data-animation="fadeInLeft" data-animation-delay="500">
                  Feature Integration
               </h5>
               <!-- Text -->
               <p class="animated" data-animation="fadeInLeft" data-animation-delay="600">
                  An nullam tempor sapien, eget gravida donec enim ipsum porta justo integer at odio velna vitae auctor integer congue
               </p>
               <!-- Title -->
               <h5 class="h5-md animated" data-animation="fadeInLeft" data-animation-delay="700">
                  Multiple Discussions
               </h5>
               <!-- Text -->
               <p class="animated" data-animation="fadeInLeft" data-animation-delay="800">
                  Justo integer at odio velna vitae auctor integer congue magna undo impedit. Gravida magna lacus odio ac risus
               </p>
            </div>
         </div>
         <!-- END CONTENT TEXT -->
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<!-- END CONTENT-4 -->
<!-- CONTENT-5
   ============================================= -->
<section id="content-5" class="p-bottom-80 content-section">
   <div class="bg-scroll p-top-100 bg-inner bg-lightpurple division" style="background-image: url(./{{ url('public/app/images/tra-bg-1.png') }});">
      <div class="container white-color">
         <div class="row d-flex align-items-center">
            <!-- CONTENT TXT -->
            <div class="col-md-6">
               <div class="content-txt ind-45">
                  <!-- Title -->
                  <h2 class="h2-xs animated" data-animation="fadeInRight" data-animation-delay="300">
                     Available On All Your Devices
                  </h2>
                  <!-- Text -->
                  <p class="animated" data-animation="fadeInRight" data-animation-delay="400">
                     An orci nullam tempor sapien, eget gravida integer donec ipsum porta justo at odio integer congue magna undo auctor gravida velna magna orci lacus odio ac risus auctor faucibus orci ligula massa luctus et ultrices posuere cubilia
                  </p>
                  <!-- APP DEVICES -->
                  <div class="app-devices clearfix animated" data-animation="fadeInRight" data-animation-delay="500">
                     <!-- Icons -->
                     <i class="fas fa-tablet-alt f-tablet"></i>
                     <i class="fas fa-mobile-alt f-phone"></i>
                     <!-- Text -->
                     <div class="app-devices-desc">
                        <p class="p-small">Available on iPhone, iPad and all Android devices from 5.5</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END CONTENT TXT -->
            <!-- CONTENT IMAGE -->
            <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="500">
               <div class="content-5-img ind-15">
                  <img class="img-fluid" src="{{ url('public/app/images/image-02.png') }}" alt="content-image">
               </div>
            </div>
         </div>
         <!-- End row -->
      </div>
      <!-- End container -->
   </div>
   <!-- End Inner Background -->
</section>
<section id="team-1" class="bg-fixed bg-lightgrey wide-100 team-section division">
   <div class="container">
      <!-- SECTION TITLE -->
      <div class="row">
         <div class="col-md-10 offset-md-1 section-title">
            <!-- Title 	-->
            <h2 class="h2-lg">Our Executive Team</h2>
            <!-- Text -->
            <p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius
            </p>
         </div>
         <!-- End row -->
      </div>
      <!-- END SECTION TITLE -->
      <div class="row">
         <!-- TEAM MEMBER #1 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="team-member green-hover">
               <div class="box-line"></div>
               <!-- Team Member Photo -->
               <div class="team-member-photo">
                  <img class="img-fluid" src="{{ url('public/app/images/team-1.jpg') }}" alt="team-member-foto">
               </div>
               <!-- Team Member Meta -->
               <div class="team-img-meta">
                  <h5 class="h5-sm">Jonathan Barnes</h5>
                  <span>Founder</span>
                  <!-- Social Icons -->
                  <div class="tm-social clearfix">
                     <ul class="text-center clearfix">
                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
                        <!--
                           <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>										
                           <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                           <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                           <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>
                           <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
                           <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>-->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- END TEAM MEMBER #1 -->
         <!-- TEAM MEMBER #2 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="400">
            <div class="team-member green-hover">
               <div class="box-line"></div>
               <!-- Team Member Photo -->
               <div class="team-member-photo">
                  <img class="img-fluid" src="{{ url('public/app/images/team-2.jpg') }}" alt="team-member-foto">
               </div>
               <!-- Team Member Meta -->
               <div class="team-img-meta">
                  <h5 class="h5-sm">Hannah Harper</h5>
                  <span>Project Manager</span>
                  <!-- Social Icons -->
                  <div class="tm-social clearfix">
                     <ul class="text-center clearfix">
                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
                        <!--
                           <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>										
                           <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                           <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                           <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>
                           <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
                           <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>-->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- END TEAM MEMBER #2 -->
         <!-- TEAM MEMBER #3 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="500">
            <div class="team-member green-hover">
               <div class="box-line"></div>
               <!-- Team Member Photo -->
               <div class="team-member-photo">
                  <img class="img-fluid" src="{{ url('public/app/images/team-3.jpg') }}" alt="team-member-foto">
               </div>
               <!-- Team Member Meta -->
               <div class="team-img-meta">
                  <h5 class="h5-sm">Matthew Anderson</h5>
                  <span>Programmer</span>
                  <!-- Social Icons -->
                  <div class="tm-social clearfix">
                     <ul class="text-center clearfix">
                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
                        <!--
                           <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>										
                           <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                           <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                           <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>
                           <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
                           <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>-->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- END TEAM MEMBER #3 -->
         <!-- TEAM MEMBER #4 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="600">
            <div class="team-member green-hover">
               <div class="box-line"></div>
               <!-- Team Member Photo -->
               <div class="team-member-photo">
                  <img class="img-fluid" src="{{ url('public/app/images/team-4.jpg') }}" alt="team-member-foto">
               </div>
               <!-- Team Member Meta -->
               <div class="team-img-meta">
                  <h5 class="h5-sm">Megan Coleman</h5>
                  <span>Graphic Designer</span>
                  <!-- Social Icons -->
                  <div class="tm-social clearfix">
                     <ul class="text-center clearfix">
                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
                        <!--
                           <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>										
                           <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                           <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                           <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>
                           <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
                           <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>-->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- END TEAM MEMBER #4 -->
      </div>
      <!-- End row -->
      <!-- JOIN TEAM BUTTON -->
      <div class="row">
         <div class="col-lg-10 offset-lg-1">
            <div class="join-team text-center m-top-25">
               <!-- Title -->
               <h4 class="h4-md"><span>We Are Hiring!</span> Become part of our talented team</h4>
               <!-- Text -->
               <p class="p-md">Gravida enim tempor sapien eget gravida donec enim ipsum porta justo at odio velna auctor congue vitae magna at risus enim ipsum porta justo integer
               </p>
               <!-- Button -->
               <a href="#contacts-2" class="btn btn-lightgreen">Join Our Team</a>
            </div>
         </div>
      </div>
      <!-- END JOIN TEAM BUTTON -->
   </div>
   <!-- End container -->
</section>
<!-- END TEAM-1 -->
<!-- STATISTIC-2
   ============================================= -->
<div id="statistic-2" class="wide-60 statistic-section division">
   <div class="container">
      <div class="row d-flex align-items-center">
         <div class="col-md-6 m-bottom-40">
            <div class="row">
               <!-- STATISTIC BLOCK #1 -->
               <div class="col-sm-6 b-bottom b-right">
                  <div class="statistic-block text-center box-icon blue-icon animated" data-animation="fadeInUp" data-animation-delay="300">
                     <span class="pe-7s-smile"></span>
                     <div class="statistic-number">1154</div>
                     <p class="p-md">Happy Clients</p>
                  </div>
               </div>
               <!-- STATISTIC BLOCK #2 -->
               <div class="col-sm-6 b-bottom">
                  <div class="statistic-block text-center box-icon blue-icon animated" data-animation="fadeInUp" data-animation-delay="400">
                     <span class="pe-7s-help2"></span>
                     <div class="statistic-number">409</div>
                     <p class="p-md">Tickets Closed</p>
                  </div>
               </div>
               <!-- STATISTIC BLOCK #3 -->
               <div class="col-sm-6 b-right">
                  <div class="statistic-block text-center box-icon blue-icon animated" data-animation="fadeInUp" data-animation-delay="500">
                     <span class="pe-7s-users"></span>
                     <div class="statistic-number">869</div>
                     <p class="p-md">Followers</p>
                  </div>
               </div>
               <!-- STATISTIC BLOCK #4 -->
               <div class="col-sm-6">
                  <div class="statistic-block text-center box-icon blue-icon animated" data-animation="fadeInUp" data-animation-delay="600">
                     <span class="pe-7s-coffee"></span>
                     <div class="statistic-number">901</div>
                     <p class="p-md">Cups of Coffee</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- END STATISTIC BLOCKS -->
         <!-- STATISTIC IMAGE -->
         <div class="col-md-6 col-lg-5 offset-lg-1 animated" data-animation="fadeInLeft" data-animation-delay="400">
            <div class="statistic-img text-center m-bottom-40">
               <img class="img-fluid" src="{{ url('public/app/images/image-06.png') }}" alt="content-image" />
            </div>
         </div>
         <!-- END STATISTIC IMAGE -->
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</div>
<!-- END STATISTIC-2 -->
<!-- VIDEO-3
   ============================================= -->
<section id="video-3" class="bg-scroll bg-dark video-section division">
   <div class="container">
      <!-- SECTION TITLE -->
      <div class="row">
         <div class="col-md-10 offset-md-1 white-color section-title">
            <!-- Title 	-->
            <h2 class="h2-lg">How MobiCom Works</h2>
            <!-- Text -->
            <p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius
            </p>
         </div>
         <!-- End row -->
      </div>
      <!-- END SECTION TITLE -->
      <div class="row">
         <div class="video-inner-bg">
            <div class="col-xl-10 offset-xl-1">
               <div class="video-content">
                  <div class="row d-flex align-items-center">
                     <!-- VIDEO TEXT -->
                     <div class="col-md-7">
                        <div class="video-txt p-right-30">
                           <!-- Title -->
                           <h4 class="h4-xl">Modern, Powerful and Creative</h4>
                           <!-- Text -->
                           <p>Gravida donec integer ipsum porta justo at velna vitae auctor integer magna at risus auctor purus rutrum primis ultrice ligula luctus impedit magna dolor vitae risus auctor purus pretium
                           </p>
                           <!-- Text  -->
                           <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor purus unt pretium ligula rutrum sapien ultrice eros dolor luctus odio placerat massa magna cursus
                           </p>
                           <!-- Button -->
                           <a href="#" class="btn btn-lightgreen">Discover More</a>
                        </div>
                     </div>
                     <!-- END VIDEO TEXT -->
                     <!-- VIDEO PREVIEW -->
                     <div class="col-md-5">
                        <div class="video-preview text-center">
                           <!-- Change the link HERE!!! -->
                           <a class="video-popup" href="https://www.youtube.com/watch?v=kuceVNBTJio">
                              <!-- Play Icon -->
                              <div class="video-block-wrapper">
                                 <div class="play-icon-green"></div>
                              </div>
                              <!-- Preview Image -->
                              <img class="img-fluid" src="{{ url('public/app/images/video-3-img.png') }}" alt="video-preview">
                           </a>
                        </div>
                     </div>
                     <!-- END VIDEO PREVIEW -->
                  </div>
                  <!-- End row -->
               </div>
               <!-- End video-content -->
            </div>
            <!-- END CONTENT TEXT -->
         </div>
         <!-- End Inner Background -->
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<!-- END VIDEO-3 -->
<!-- FEATURES-3
   ============================================= -->
<section id="features-3" class="bg-fixed wide-70 featuress-section division" style="background-image: url(./{{ url('public/app/images/tra-waves.png') }}); background-position: center bottom;">
   <div class="container">
      <!-- SECTION TITLE 	-->
      <div class="row">
         <div class="col-md-10 offset-md-1 section-title">
            <!-- Title 	-->
            <h2 class="h2-lg">Features In This App</h2>
            <!-- Text -->
            <p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius
            </p>
         </div>
      </div>
      <!-- END SECTION TITLE -->
      <div class="row">
         <!-- FEATURE BOX #1 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="fbox-3 box-icon-lg purple-hover">
               <div class="box-line"></div>
               <!-- Icon -->
               <span class="pe-7s-piggy"></span>
               <!-- Title -->
               <h5 class="h5-md">Free Trial</h5>
               <!-- Text -->
               <p class="grey-color">Ligula risus auctor tempus dolor lacinia</p>
            </div>
         </div>
         <!-- FEATURE BOX #2 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="400">
            <div class="fbox-3 box-icon-lg purple-hover">
               <div class="box-line"></div>
               <!-- Icon -->
               <span class="pe-7s-vector"></span>
               <!-- Title -->
               <h5 class="h5-md">Unique Design</h5>
               <!-- Text -->
               <p class="grey-color">Dolor feugiat felis lacinia risus an auctor porta</p>
            </div>
         </div>
         <!-- FEATURE BOX #3 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="500">
            <div class="fbox-3 box-icon-lg purple-hover">
               <div class="box-line"></div>
               <!-- Icon -->
               <span class="pe-7s-target"></span>
               <!-- Title -->
               <h5 class="h5-md">Cross-Platform</h5>
               <!-- Text -->
               <p class="grey-color">Ligula auctor tempus unt dolor feugiat felis</p>
            </div>
         </div>
         <!-- FEATURE BOX #4 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="600">
            <div class="fbox-3 box-icon-lg purple-hover">
               <div class="box-line"></div>
               <!-- Icon -->
               <span class="pe-7s-edit"></span>
               <!-- Title -->
               <h5 class="h5-md">User Friendly</h5>
               <!-- Text -->
               <p class="grey-color">Ultrice ligula risus auctor tempus dolor lacinia</p>
            </div>
         </div>
         <!-- FEATURE BOX #5 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="700">
            <div class="fbox-3 box-icon-lg purple-hover">
               <div class="box-line"></div>
               <!-- Icon -->
               <span class="pe-7s-mail-open-file"></span>
               <!-- Title -->
               <h5 class="h5-md">Mailer Engine</h5>
               <!-- Text -->
               <p class="grey-color">Feugiat primis in lacinia risus an auctor</p>
            </div>
         </div>
         <!-- FEATURE BOX #6 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="800">
            <div class="fbox-3 box-icon-lg purple-hover">
               <div class="box-line"></div>
               <!-- Icon -->
               <span class="pe-7s-bell"></span>
               <!-- Title -->
               <h5 class="h5-md">Notifications</h5>
               <!-- Text -->
               <p class="grey-color">Semper lacus cursus porta primis ultrice</p>
            </div>
         </div>
         <!-- FEATURE BOX #7 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="900">
            <div class="fbox-3 box-icon-lg purple-hover">
               <div class="box-line"></div>
               <!-- Icon -->
               <span class="pe-7s-refresh-2"></span>
               <!-- Title -->
               <h5 class="h5-md">Free Updates</h5>
               <!-- Text -->
               <p class="grey-color">Cursus porta in ultrice risus auctor porta</p>
            </div>
         </div>
         <!-- FEATURE BOX #8 -->
         <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="1000">
            <div class="fbox-3 box-icon-lg purple-hover">
               <div class="box-line"></div>
               <!-- Icon -->
               <span class="pe-7s-help2"></span>
               <!-- Title -->
               <h5 class="h5-md">Fast Support</h5>
               <!-- Text -->
               <p class="grey-color">Risus auctor dolor feugiat felis an auctor</p>
            </div>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<!-- END FEATURES-3 -->
<!-- TESTIMONIALS-2
   ============================================= -->
<section id="reviews-2" class="wide-100 bg-lightgrey reviews-section division">
   <div class="container">
      <!-- SECTION TITLE -->
      <div class="row">
         <div class="col-md-10 offset-md-1 section-title">
            <!-- Title 	-->
            <h2 class="h2-lg">Customers Feedback</h2>
            <!-- Text -->
            <p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius
            </p>
         </div>
      </div>
      <!-- END SECTION TITLE -->
      <!-- TESTIMONIALS CAROUSEL -->
      <div class="reviews-carousel">
         <div class="center slider">
            <!-- TESTIMONIAL #1 -->
            <div class="review-2">
               <!-- Testimonial Text -->
               <div class="review-txt">
                  <!-- Title -->
                  <h5 class="h5-lg">Super Support!</h5>
                  <!-- Testimonial Text -->
                  <p>Etiam sapien sem at sagittis congue augue massa varius egestas magna suscipit magna tempus aliquet porta rutrum sodales auctor integer risus auctor rutrum
                  </p>
               </div>
               <!-- Testimonial Author Avatar -->
               <div class="testimonial-avatar text-center">
                  <img src="{{ url('public/app/images/review-author-1.jpg') }}" alt="review-author-avatar">
                  <p class="testimonial-autor">pebz13</p>
                  <span>Programmer</span>
               </div>
               <!-- App Rating -->
               <div class="app-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            <!-- END TESTIMONIAL #1 -->
            <!-- TESTIMONIAL #2 -->
            <div class="review-2">
               <!-- Testimonial Text -->
               <div class="review-txt">
                  <!-- Title -->
                  <h5 class="h5-lg">Simple and Useful!</h5>
                  <!-- Testimonial Text -->
                  <p>At sagittis congue augue egestas egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue egestas luctus donec diam ociis ultrice ligula magna suscipit lectus gestas augue in cubilia laoreet
                  </p>
               </div>
               <!-- Testimonial Author Avatar -->
               <div class="testimonial-avatar clearfix">
                  <img src="{{ url('public/app/images/review-author-2.jpg') }}" alt="review-author-avatar">
                  <p class="testimonial-autor">Evelyn Martinez</p>
                  <span>Housewife</span>
               </div>
               <!-- App Rating -->
               <div class="app-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half"></i>
               </div>
            </div>
            <!-- END TESTIMONIAL #2 -->
            <!-- TESTIMONIAL #3 -->
            <div class="review-2">
               <!-- Testimonial Text -->
               <div class="review-txt">
                  <!-- Title -->
                  <h5 class="h5-lg">Great Flexibility!</h5>
                  <!-- Testimonial Text -->
                  <p>Mauris donec ociis et magnis sapien etiam sapien sem sagittis congue augue egestas et ultrice ligula egestas magna suscipit lectus gestas magna suscipit luctus undo
                  </p>
               </div>
               <!-- Testimonial Author Avatar -->
               <div class="testimonial-avatar clearfix">
                  <img src="{{ url('public/app/images/review-author-3.jpg') }}" alt="review-author-avatar">
                  <p class="testimonial-autor">Robert Peterson</p>
                  <span>SEO Manager</span>
               </div>
               <!-- App Rating -->
               <div class="app-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            <!-- END TESTIMONIAL #3 -->
            <!-- TESTIMONIAL #4 -->
            <div class="review-2">
               <!-- Testimonial Text -->
               <div class="review-txt">
                  <!-- Title -->
                  <h5 class="h5-lg">I love this App!</h5>
                  <!-- Testimonial Text -->
                  <p>An augue in cubilia laoreet magna suscipit egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue ultrice ligula egestas magna suscipit lectus gestas magna viverra dolor neque est gravida
                  </p>
               </div>
               <!-- Testimonial Author Avatar -->
               <div class="testimonial-avatar clearfix">
                  <img src="{{ url('public/app/images/review-author-4.jpg') }}" alt="review-author-avatar">
                  <p class="testimonial-autor">Leslie Serpas</p>
                  <span>Internet Surfer</span>
               </div>
               <!-- App Rating -->
               <div class="app-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            <!-- END TESTIMONIAL #4 -->
            <!-- TESTIMONIAL #5 -->
            <div class="review-2">
               <!-- Testimonial Text -->
               <div class="review-txt">
                  <!-- Title -->
                  <h5 class="h5-lg">Best App for Around!</h5>
                  <!-- Testimonial Text -->
                  <p>Egestas egestas magna ipsum vitae purus efficitur ipsum primis in cubilia laoreet augue egestas luctus donec augue in cubilia laoreet ociis vitae purus diam
                  </p>
               </div>
               <!-- Testimonial Author Avatar -->
               <div class="testimonial-avatar clearfix">
                  <img src="{{ url('public/app/images/review-author-5.jpg') }}" alt="review-author-avatar">
                  <p class="testimonial-autor">Marisol19</p>
                  <span>Senior UX/UI Designer</span>
               </div>
               <!-- App Rating -->
               <div class="app-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half"></i>
               </div>
            </div>
            <!-- END TESTIMONIAL #5 -->
            <!-- TESTIMONIAL #6 -->
            <div class="review-2">
               <!-- Testimonial Text -->
               <div class="review-txt">
                  <!-- Title -->
                  <h5 class="h5-lg">Minimalistic & Beautiful!</h5>
                  <!-- Testimonial Text -->
                  <p>Augue egestas volutpat egestas et augue in cubilia laoreet magna suscipit luctus undo blandit vitae purus non diam tempus aliquet porta rutrum gestas neque est gravida
                  </p>
               </div>
               <!-- Testimonial Author Avatar -->
               <div class="testimonial-avatar clearfix">
                  <img src="{{ url('public/app/images/review-author-6.jpg') }}" alt="review-author-avatar">
                  <p class="testimonial-autor">Dan Hodges</p>
                  <span>Graphic Designer</span>
               </div>
               <!-- App Rating -->
               <div class="app-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            <!-- END TESTIMONIAL #6 -->
            <!-- TESTIMONIAL #7 -->
            <div class="review-2">
               <!-- Testimonial Text -->
               <div class="review-txt">
                  <!-- Title -->
                  <h5 class="h5-lg">Awesome Design!</h5>
                  <!-- Testimonial Text -->
                  <p>Egestas et lobortis magna suscipit luctus undo blandit vitae purus lobortis non diam tempus aliquet porta rutrum arcu aenean primis in augue in cubilia laoreet
                  </p>
               </div>
               <!-- Testimonial Author Avatar -->
               <div class="testimonial-avatar clearfix">
                  <img src="{{ url('public/app/images/review-author-4.jpg') }}" alt="review-author-avatar">
                  <p class="testimonial-autor">Amelie Peterson</p>
                  <span>Senior UX/UI Designer</span>
               </div>
               <!-- App Rating -->
               <div class="app-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            <!-- END TESTIMONIAL #7 -->
         </div>
      </div>
      <!-- TESTIMONIALS CAROUSEL -->
   </div>
   <!-- End container -->
</section>
<!-- END TESTIMONIALS-2 -->
<!-- MORE APPS
   ============================================= -->
<!-- END MORE APPS -->
<!-- DOWNLOAD-2
   ============================================= -->
<section id="download-2" class="wide-70 download-section">
   <div class="bg-scroll bg-inner division">
      <div class="container white-color">
         <div class="row d-flex align-items-center">
            <!-- DOWNLOAD TXT -->
            <div class="col-md-7 col-lg-7">
               <div class="download-txt ind-45">
                  <!-- Title -->
                  <h2 class="h2-xs animated" data-animation="fadeInRight" data-animation-delay="300">
                     Do even more with the MobiCom App
                  </h2>
                  <!-- Text -->
                  <p class="p-lg animated" data-animation="fadeInRight" data-animation-delay="400">
                     Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus posuere cubilia curae integer congue leo metus
                  </p>
                  <!-- HERO STORE BADGES -->
                  <div class="stores-badge animated" data-animation="fadeInRight" data-animation-delay="500">
                     <!-- AppStore -->
                     <a href="#" class="store">
                     <img class="appstore-white" src="{{ url('public/app/images/store_badges/appstore-tra-white.png') }}" width="155" height="50" alt="appstore-logo">
                     </a>
                     <!-- Google Play -->
                     <a href="#" class="store">
                     <img class="googleplay-white" src="{{ url('public/app/images/store_badges/googleplay-tra-white.png') }}" width="164" height="50" alt="googleplay-logo">
                     </a>
                  </div>
               </div>
            </div>
            <!--END DOWNLOAD TXT -->
            <!-- DOWNLOAD IMAGE -->
            <div class="col-md-5 col-lg-4 offset-lg-1 animated" data-animation="fadeInLeft" data-animation-delay="500">
               <div class="download-2-img text-center ind-15">
                  <img class="img-fluid" src="{{ url('public/app/images/image-14.png') }}" alt="download-image">
               </div>
            </div>
         </div>
         <!-- End row -->
      </div>
      <!-- End container -->
   </div>
   <!-- End Inner Background -->
</section>
<!-- END DOWNLOAD-2 -->
<!-- FAQs-1
   ============================================= -->
<section id="faqs-1" class="bg-fixed wide-100 faqs-section division">
   <div class="container">
      <!-- SECTION TITLE -->
      <div class="row">
         <div class="col-md-10 offset-md-1 section-title">
            <!-- Title 	-->
            <h2 class="h2-lg">Troubles with MobiCom?</h2>
            <!-- Text -->
            <p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius
            </p>
         </div>
         <!-- End row -->
      </div>
      <!-- END SECTION TITLE -->
      <div class="row">
         <!-- QUESTIONS HOLDER -->
         <div class="col-lg-6">
            <div class="questions-holder ind-30">
               <!-- QUESTION #1 -->
               <div class="question animated" data-animation="fadeInUp" data-animation-delay="300">
                  <!-- Question -->
                  <h5 class="h5-sm">Lobortis sit magna ornare magna egestas?</h5>
                  <!-- Answer -->
                  <p>Etiam sit amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis blandit ultrice ligula egestas magna suscipit lectus magna suscipit luctus undo blandit vitae purus laoreet
                  </p>
               </div>
               <!-- QUESTION #2 -->
               <div class="question animated" data-animation="fadeInUp" data-animation-delay="400">
                  <!-- Question -->
                  <h5 class="h5-sm">Placeat axime facere omnis volute?</h5>
                  <!-- Answer -->
                  <p>An augue egestas an ipsum vitae emo ligula volute ante ipsum primis in faucibus sit ametn in odio. Integer congue leo metus, eu mollis lorem viverra suscipit lectus magna
                  </p>
               </div>
               <!-- QUESTION #3 -->
               <div class="question animated" data-animation="fadeInUp" data-animation-delay="500">
                  <!-- Question -->
                  <h5 class="h5-sm">An interdum lobortis pretium ornare?</h5>
                  <!-- Answer -->
                  <p>Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus et ultrices posuere cubilia curae</p>
               </div>
               <!-- QUESTION #4 -->
               <div class="question animated" data-animation="fadeInUp" data-animation-delay="600">
                  <!-- Question -->
                  <h5 class="h5-sm">Interdum lobortis pretium ornare?</h5>
                  <!-- Answer -->
                  <p>Praesent semper, lacus sed cursus porta, odio augue ligula massa risus laoreet. Laoreet auctor massa varius egestas amet mauris suscipit semper lacus sed cursus porta feugiat primis
                  </p>
               </div>
            </div>
         </div>
         <!-- END QUESTIONS HOLDER -->
         <!-- QUESTIONS HOLDER -->
         <div class="col-lg-6">
            <div class="questions-holder ind-30">
               <!-- QUESTION #5 -->
               <div class="question animated" data-animation="fadeInUp" data-animation-delay="300">
                  <!-- Question -->
                  <h5 class="h5-sm">Aliquam dapibus pretium ornare?</h5>
                  <!-- Answer -->
                  <p>Feugiat eros ligula massa lipsum primis in orci luctus et ultrices posuere cubilia curae congue lorem. ante ipsum primis in faucibus bibendum sit amet in odio
                  </p>
               </div>
               <!-- QUESTION #6 -->
               <div class="question animated" data-animation="fadeInUp" data-animation-delay="400">
                  <!-- Question -->
                  <h5 class="h5-sm">Pretium purus lacus tempor an ipsum vitae augue egestas emo ligula?</h5>
                  <!-- Answer -->
                  <p>Praesent semper lacus sed cursus porta, feugiat primis in orci luctus ligula eros ac ligula massa in faucibus orci luctus et ultrices posuere ante ipsum primis in faucibus bibendum sit amet in odio.
                  </p>
               </div>
               <!-- QUESTION #6 -->
               <div class="question animated" data-animation="fadeInUp" data-animation-delay="500">
                  <!-- Question -->
                  <h5 class="h5-sm">Dapibus lobortis pretium ornare?</h5>
                  <!-- Answer -->
                  <p>Praesent semper, lacus sed cursus porta,feugiat primis in faucibus orci luctus tincidunt ligula ultrice sapien egestas lobortis magna
                  </p>
               </div>
               <!-- QUESTION #7 -->
               <div class="question animated" data-animation="fadeInUp" data-animation-delay="600">
                  <!-- Question -->
                  <h5 class="h5-sm">Interdum lobortis pretium ornare?</h5>
                  <!-- Answer -->
                  <p>Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus et ultrices posuere cubilia curae integer congue leo metus, eu mollis lorem primis in orci
                  </p>
               </div>
            </div>
         </div>
         <!-- END  QUESTIONS HOLDER -->
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<!-- END FAQs-1 -->
<!-- PRESS-1
   ============================================= -->
<!-- END PRESS-1 -->
<!-- BLOG-1
   ============================================= -->
<!-- END BLOG-1 -->
<!-- NEWSLETTER-2
   ============================================= -->
<section id="newsletter-2" class="bg-scroll bg-green newsletter-section division">
   <div class="container white-color">
      <div class="row d-flex align-items-center">
         <!-- NEWSLETTER TEXT -->
         <div class="col-lg-6">
            <div class="newsletter-txt">
               <!-- Title -->
               <h3 class="h3-xs">Stay up to date with our news, ideas and updates</h3>
            </div>
         </div>
         <!-- NEWSLETTER FORM -->
         <div class="col-lg-6">
            <form class="newsletter-form p-left-30">
               <div class="input-group">
                  <input type="email" class="form-control" placeholder="Your email address" required id="s-email">
                  <span class="input-group-btn">
                  <button type="submit" class="btn"><i class="fas fa-arrow-right"></i></button>
                  </span>
               </div>
               <!-- Newsletter Form Notification -->
               <label for="s-email" class="form-notification"></label>
            </form>
         </div>
      </div>
      <!-- End row -->
   </div>
   <!-- End container -->
</section>
<!-- END NEWSLETTER-2 -->
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