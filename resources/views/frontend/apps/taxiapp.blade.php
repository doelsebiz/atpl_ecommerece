@extends('frontend.layouts.main')
@section('tittle')
<title>Taxi App</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<link rel="stylesheet" href="{{ url('public/assets/css/taxi/style.css') }}" />
<!-- Main Wrapper -->
<div class="main" role="main">

    <!-- Curve Hero -->
    <div class="ui-hero hero-lg ui-curve ui-gradient-peach">
        <div id='#home' class="container">
            <div class="row">
                <div class="col-md-6" data-vertical_center="true" data-vertical_offset="16">
                    <h1 class="heading animate" data-show="fade-in-up-big" data-delay="100">
                        On Demand Ride Hailing Application CAB2U
                    </h1>
                    <p class="paragraph animate" data-show="fade-in-up-big" data-delay="400">
                        CAB2U is an user-friendly mobile application designed to revolutionize the way people access transportation services.
                    </p>
                    <div class="actions animate" data-show="fade-in-up-big" data-delay="600">
                        <a class="btn ui-gradient-blue shadow-xl" href="javascript:void(0)">Customer</a>
                        <a class="btn ui-gradient-green shadow-xl" href="javascript:void(0)">Driver</a>
                        <a class="btn ui-gradient-blue shadow-xl" href="javascript:void(0)">Admin Panel</a>
                    </div>
                </div>
                <div class="col-md-6 animate" data-show="fade-in-left" data-delay="400">
                    <img src="https://demo.menpanitech.com/web/cab2u/home_page.png" data-uhd data-max_width="547" class="responsive-on-sm" />
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .ui-hero -->

    <!-- Features Section -->
    <div class="section ui-showcase-section">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading center">
                <h2 class="heading text-indigo">
                    Awesome Features
                </h2>
                <p class="paragraph">
                    Cab2U application boasts a wide range of awesome features that enhance the user experience and make it a top choice for on-demand ride-hailing.
                </p>
            </div>
            <div class="row">
                <!-- Image Column -->
                <div class="col-4 col-sm-5 col-md-6 col-lg-7 animate" data-show="fade-in-right">
                    <img src="https://demo.menpanitech.com/web\cab2u/feature.png" data-uhd data-max_width="547" />
                </div>
                <!-- Text Column -->
                <div class="col-8 col-sm-7 col-md-6 col-lg-5" data-vertical_center="true">
                    <!-- Icon blocks -->
                    <ul class="ui-icon-blocks ui-blocks-v icons-lg">
                        <li class="ui-icon-block animate" data-show="fade-in">
                            <h5 class="text-white d-flex"> <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span> <span>Multiple Vehicle categories</span></h5>
                            <p class="text-white">
                                With the Multiple Vehicle Categories feature, passengers have access to an array of vehicle options, ensuring there's a perfect match for every type of trip. This feature is a game-changer for users seeking flexibility and choice when it comes to their
                                transportation needs.It allows to add a vehicle categories from admin panel as per your wish.
                            </p>
                        </li>
                        <li class="ui-icon-block animate" data-show="fade-in">
                            <h5 class="text-white d-flex"> <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span> <span>Promo code</span></h5>
                            <p class="text-white">
                                Promo Code is a special code that passengers can use to receive discounts or other promotional offers when booking a ride. These codes are an effective way for ride-hailing platforms to attract and retain customers while providing passengers with cost-saving
                                opportunities.
                            </p>
                        </li>
                        <li class="ui-icon-block animate" data-show="fade-in">
                            <h5 class="text-white d-flex"> <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span> <span>Dynamic Fare Management</span></h5>
                            <p class="text-white">
                                While surge pricing is a component of this system, It is designed to create a fair and transparent pricing structure for both passengers and drivers, which can be manage from admin panel.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

    <!-- Tabbed Showcase Section -->
    <div class="section ui-gradient-blue">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading center">
                <h2 class="heading">
                    Trip Types
                </h2>
                <p class="paragraph">
                    Customer can ride different types of trips introduced in the mobile app.
                </p>
            </div>
            <!-- .section-heading -->
            <!-- UI Tabbed Showcase -->
            <div class="row ui-tabbed-showcase">

                <!-- Device Slider Column -->
                <div class="col-lg-6 col-md-5 animate" data-show="fade-in-right">
                    <!-- Device Slider -->
                    <div class="ui-device-slider">
                        <!-- Device Image -->
                        <div class="device">
                            <img src="https://demo.menpanitech.com/web/assets/img/device-slider/device.png" data-uhd />
                        </div>
                        <!-- Slider Images -->
                        <div id="device-slider-2" class="screens owl-carousel owl-theme">
                            <div class="item">
                                <img src="https://demo.menpanitech.com/web/cab2u/daily1.png" data-uhd />
                            </div>
                            <div class="item">
                                <img src="https://demo.menpanitech.com/web/cab2u/shared1.png" data-uhd />
                            </div>
                            <div class="item">
                                <img src="https://demo.menpanitech.com/web/cab2u/rental1.png" data-uhd />
                            </div>
                            <div class="item">
                                <img src="https://demo.menpanitech.com/web/cab2u/commercial1.png" data-uhd />
                            </div>
                        </div>
                    </div>
                    <!-- .ui-device-slider -->
                </div>
                <!-- Device Slider Column -->

                <!-- Tabs Column -->
                <div class="col-lg-6 col-md-7" data-vertical_center="true">
                    <!-- UI Tabs -->
                    <div class="ui-tabs">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <!-- Nav Tab 1 -->
                            <li role="presentation" class="nav-item">
                                <a class="nav-link active d-flex" href="#daily" role="tab" data-toggle="tab" data-toggle_screen="1" data-toggle_slider="device-slider-2">
                                    <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span> <span>Daily</span>
                                </a>
                            </li>
                            <!-- Nav Tab 2 -->

                            <!-- Nav Tab 3 -->
                            <li role="presentation" class="nav-item">
                                <a class="nav-link d-flex" href="#rental" role="tab" data-toggle="tab" data-toggle_screen="3" data-toggle_slider="device-slider-2">
                                 <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span> <span>Rental</span>
                             </a>
                            </li>
                            <!-- Nav Tab 4 -->
                            <li role="presentation" class="nav-item">
                                <a class="nav-link d-flex" href="#commercial" role="tab" data-toggle="tab" data-toggle_screen="4" data-toggle_slider="device-slider-2">
                                 <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span> <span>Commercial</span>
                             </a>
                            </li>
                        </ul>

                        <!-- Tab Panels -->
                        <div class="tab-content">
                            <!-- Tab 1 -->
                            <div role="tabpanel" class="tab-pane fade show active" id="daily">
                                <p class="sub-heading">Daily Trip feature is a simple and streamline process of booking rides for daily commuting needs. It offers convenience as a valuable tool for users who rely on taxis for their daily transportation.</p>
                            </div>
                            <!-- Tab 2 -->
                            <div role="tabpanel" class="tab-pane fade" id="shared">
                                <p class="sub-heading">Shared trips are designed to optimize transportation efficiency by pooling together passengers with similar travel routes. Instead of each passenger booking a separate ride, they can share the same vehicle, helping
                                    to reduce costs, traffic congestion, and environmental impact.</p>
                            </div>
                            <!-- Tab 3 -->
                            <div role="tabpanel" class="tab-pane fade" id="rental">
                                <p class="sub-heading">A rental trip is a versatile service that allows users to rent a vehicle for a specified duration and distance. It offers convenience, customization, and flexibility for a wide range of transportation needs.</p>
                            </div>
                            <!-- Tab 4 -->
                            <div role="tabpanel" class="tab-pane fade" id="commercial">
                                <p class="sub-heading"> Commercial trips are specifically designed to cater to the needs of businesses, organizations, and professionals. These trips may involve transporting goods, equipment, personnel, or clients for various commercial purposes.
                                </p>
                            </div>
                        </div>
                        <div class="ini-banner-btns">
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Get Quote</a>
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Schedule a Call</a>
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Book Demo</a>
                        </div>
                        <!-- .tab-content -->
                    </div>
                    <!-- .ui-tabs -->

                </div>
                <!-- Tabs Column -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

    <!-- App Features Section -->
    <div id="features" class="section">
        <div class="container ui-icon-blocks ui-blocks-h icons-lg">
            <div class="section-heading center">
                <h2 class="heading text-indigo">
                    KEY ATTRIBUTES
                </h2>
                <p class="paragraph">
                    These attributes combine to provide an exceptional user experience and create a reliable and convenient ride-hailing experience for all users.
                </p>
            </div>
            <!-- .section-heading -->
            <div class="row">
                <div class="col-sm-4 ui-icon-block">
                    <div class="icon icon-lg icon-circle icon-rocket text-blue"><span style="font-size:50px;margin-top: 15px;" class="material-symbols-outlined taxioptionicon">key</span></div>
                    <h4 class="text-white">Auto Assigning</h4>
                    <p class="text-white">
                        Auto-assigning to drivers matches passenger ride requests with available drivers based on nearest criteria. This ensures quicker response and a smoother experience for both passengers and drivers.
                    </p>
                </div>
                <div class="col-sm-4 ui-icon-block">
                    <div class="icon icon-lg icon-circle icon-rocket text-blue"><span style="font-size:50px;margin-top: 15px;" class="material-symbols-outlined taxioptionicon">key</span></div>
                    <h4 class="text-white">Earning Report</h4>
                    <p class="text-white">
                        A summary that provides drivers with a detailed breakdown of their income and earnings from completed trips. It help drivers track their income, expenses, and overall financial performance while using the application.
                    </p>
                </div>
                <div class="col-sm-4 ui-icon-block">
                    <div class="icon icon-lg icon-circle icon-rocket text-blue"><span style="font-size:50px;margin-top: 15px;" class="material-symbols-outlined taxioptionicon">key</span></div>
                    <h4 class="text-white">Auto Payment Mode</h4>
                    <p class="text-white">
                        After the completion of the trip application will check the wallet of the customer and app will automatically select the mode of the payment whether it will be a cash or wallet or cash/wallet.

                    </p>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

    <!-- Big Image Section -->
    <div id='dispatch' class="section ui-gradient-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-vertical_center="true">
                    <div class="section-heading center-on-md">
                        <h2 class="heading text-indigo">
                            Dispatch Panel
                        </h2>
                        <p class="paragraph">
                            Dispatch panel used to create a trip from admin panel. Also to filter out some specific information from the admin panel and display those.
                        </p>
                        <div class="ini-banner-btns">
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Get Quote</a>
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Schedule a Call</a>
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Book Demo</a>
                        </div>
                    </div>
                    <!-- .section-heading -->
                </div>
                <div class="col-lg-6">
                    <img src="https://demo.menpanitech.com/web/cab2u/dispatchpanel.png" data-uhd class="responsive-on-md shadow-xl" />
                </div>
            </div>
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

    <!-- Features - Icon Blocks Section -->
    <div id='feature' class="section">
        <div class="container ui-icon-blocks ui-blocks-h icons-md">
            <div class="section-heading center">
                <h2 class="heading text-indigo">
                    What's Under The Hood
                </h2>
                <p class="paragraph">
                    Cab2u application that encompasses various components to provide a seamless experience for both riders and drivers.
                </p>
            </div>
            <!-- .section-heading -->
            <!-- Icon Blocks -->
            <div class="row">
                <div class="col-md-3 col-sm-4 col-6 ui-icon-block">
                    <div class="underhoodbox">
                        <span style="font-size:50px;margin-bottom: 15px;" class="material-symbols-outlined taxioptionicon">key</span>
                        <h5 class="text-white">Booking Flexibility</h5>
                        <p class="text-white">
                            The user should be allowed to book a taxi right away or sometime later. Canceling ordered services should also be allowed.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-4 ui-icon-block">
                    <div class="underhoodbox">
                        <span style="font-size:50px;margin-bottom: 15px;" class="material-symbols-outlined taxioptionicon">phone</span>
                        <h5 class="text-white">Verification</h5>
                        <p class="text-white">
                            Twilio Technology is used in Cab2u for SMS verifications. Customer register the phone number and sms send to the particular phone number.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-4 ui-icon-block">
                    <div class="underhoodbox">
                        <span style="font-size:50px;margin-bottom: 15px;" class="material-symbols-outlined taxioptionicon">payment</span>
                        <h5 class="text-white">Payment Integration</h5>
                        <p class="text-white">
                            It can offer a variety of payment methods  to a diverse customer base, including credit cards, debit cards, digital wallets, and bank transfers.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-4 ui-icon-block">
                    <div class="underhoodbox">
                        <span style="font-size:50px;margin-bottom: 15px;" class="material-symbols-outlined taxioptionicon">schedule</span>
                        <h5 class="text-white">Trip History</h5>
                        <p class="text-white">
                            Records of travel details should be made available to the user. The user should feel that your app is the go-to choice when ordering a taxi.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-4 ui-icon-block">
                    <div class="underhoodbox">
                        <span style="font-size:50px;margin-bottom: 15px;" class="material-symbols-outlined taxioptionicon">bookmark</span>
                        <h5 class="text-white">Scheduled Booking</h5>
                        <p class="text-white">
                            Ride later is available for the riders to schedule the ride. Eventually the driver will also be triggered out by the request and the cab gets booked.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-4 ui-icon-block">
                    <div class="underhoodbox">
                        <span style="font-size:50px;margin-bottom: 15px;" class="material-symbols-outlined taxioptionicon">flag_circle</span>
                        <h5 class="text-white">Reports</h5>
                        <p class="text-white">
                            Admin has given access to multiple reports, which helps them plan and strategise various activities to support and grow the business.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-4 ui-icon-block">
                    <div class="underhoodbox">
                        <span style="font-size:50px;margin-bottom: 15px;" class="material-symbols-outlined taxioptionicon">wb_iridescent</span>
                        <h5 class="text-white">Ride History</h5>
                        <p class="text-white">
                            Rider can view all the rides completed, canceled including details of pickup and drop location, fare amount and time.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-4 ui-icon-block">
                    <div class="underhoodbox">
                        <span style="font-size:50px;margin-bottom: 15px;" class="material-symbols-outlined taxioptionicon">dashboard</span>
                        <h5 class="text-white">Dashboard Management</h5>
                        <p class="text-white">
                            Displays all the analytics reports in the admin panel for total customers, drivers and bookings.
                        </p>
                    </div>
                </div>
            </div>
            <!-- .ui-icon-block -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

    <!-- Support Section -->
    <div id="support" class="section ui-gradient-blue">
        <div class="container">
            <div class="row">
                <!-- Text Column -->
                <div class="col-lg-6 col-md-5" data-vertical_center="true">
                    <!-- Section Heading -->
                    <div class="section-heading mb-0 center-on-md">
                        <h2 class="heading">
                            5 Days Delivery
                        </h2>
                        <p class="paragraph">
                            Experience the convenience and reliability of our five-day delivery guarantee. Trust us with your packages, and we'll ensure they arrive safely and swiftly. Your satisfaction is our promise.
                            <br>*Terms & Conditions</br>
                        </p>
                        <div class="ini-banner-btns">
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Get Quote</a>
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Schedule a Call</a>
                            <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Book Demo</a>
                        </div>
                    </div>
                    <!-- .section-heading -->
                </div>
                <!-- Image Column -->
                <div class="col-lg-6 col-md-7 img-block animate" data-show="fade-in-left" data-vertical_center="true">
                    <img src="https://demo.menpanitech.com/web/cab2u/support.png" data-uhd class="img-fluid" data-max_width="460" />
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->
</div>
<!-- .section -->

<!-- Video Section -->

<!-- .section -->

<!-- Big Image Section -->
<div id='zone' class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-vertical_center="true">
                <div class="section-heading center-on-md">
                    <h2 class="heading text-indigo">
                        Zones
                    </h2>
                    <p class="paragraph">
                        All you need to do is create a zone based on your serviceable location. You can create a zone directly from the admin panel. Under the zone menu, you can give the location a name and draw a polygon for it on Google Maps using the draw polygon option.
                        This marked location will serve as a specific zone.
                    </p>
                </div>
                <!-- .section-heading -->
            </div>
            <div class="col-lg-6">
                <img src="https://demo.menpanitech.com/web/cab2u/zone.png" class="responsive-on-md shadow-xl" />
            </div>
        </div>
    </div>
    <!-- .container -->
</div>
<!-- .section -->

<!-- Process Section -->
<div id="how-it-works" class="section ui-gradient-blue">
    <div class="container">
        <!-- Section Heading -->
        <div class="section-heading center">
            <h2 class="heading text-indigo">
                All in 5 Easy Steps
            </h2>
            <p class="paragraph">
                CAB2U provides a comprehensive taxi app development platform .
            </p>
        </div>
        <!-- .section-heading -->

        <!-- UI Steps -->
        <div class="ui-showcase-blocks ui-steps">
            <!-- Step 1 -->
            <div class="step-wrapper">
                <span class="step-number ui-gradient-green">1</span>
                <div class="row">
                    <div class="col-md-6" data-vertical_center="true">
                        <h4 class="heading text-white">
                            Select Trip/Vehicle Type
                        </h4>
                        <p class="paragraph">
                            This process typically includes viewing available trips, selecting a desired trip, choosing an available vehicle, and confirming the assignment.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="responsive-on-xs" src="https://demo.menpanitech.com/web/cab2u/selecttrip.png" data-uhd data-max_width="464" />
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="step-wrapper">
                <span class="step-number ui-gradient-green">2</span>
                <div class="row">
                    <div class="col-md-6" data-vertical_center="true">
                        <h4 class="heading text-white">
                            Search Driver
                        </h4>
                        <p class="paragraph">
                            Users can request a ride and the application connects them with a nearby driver, allowing for convenient and efficient transportation.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="responsive-on-xs" src="https://demo.menpanitech.com/web/cab2u/searchdriver.png" data-uhd data-max_width="445" />
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="step-wrapper">
                <span class="step-number ui-gradient-green">3</span>
                <div class="row">
                    <div class="col-md-6" data-vertical_center="true">
                        <h4 class="heading text-white">
                            Accept/Reject Ride
                        </h4>
                        <p class="paragraph">
                            Driver receiving a ride request from a passenger and deciding whether to accept or reject it. If accepted, the driver commits to picking up the passenger. If rejected, the request is declined, and the passenger's request is sent to other nearby drivers
                            for consideration.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="responsive-on-xs" src="https://demo.menpanitech.com/web/cab2u/acceptreject.png" data-uhd data-max_width="451" />
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="step-wrapper">
                <span class="step-number ui-gradient-green">4</span>
                <div class="row">
                    <div class="col-md-6" data-vertical_center="true">
                        <h4 class="heading text-white">
                            Status Change
                        </h4>
                        <p class="paragraph">
                            Driver changes the status like trip initiation, pickup, en route to destination, and trip completion. Monitoring these status changes helps passengers and drivers stay informed about the progress of the ride and ensures a smooth and transparent transportation
                            experience.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="responsive-on-xs" src="https://demo.menpanitech.com/web/cab2u/statuschange.png" data-uhd data-max_width="445" />
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="step-wrapper">
                <span class="step-number ui-gradient-green">5</span>
                <div class="row">
                    <div class="col-md-6" data-vertical_center="true">
                        <h4 class="heading text-white">
                            Complete & Reviews
                        </h4>
                        <p class="paragraph">
                            Completing a trip in a taxi application signifies the end of a passenger's ride. Afterward, passengers and drivers have the opportunity to exchange reviews and ratings about their experience.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="responsive-on-xs" src="https://demo.menpanitech.com/web/cab2u/reviews.png" data-uhd data-max_width="445" />
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- .container -->
</div>
<!-- .section -->

<!-- Integration Section -->
<div id="integrations" class="section bg-green" style="background-color:black;">
    <div class="container">
        <div class="row">

            <!-- Left Column -->
            <div class="col-lg-5 col-xl-6" data-vertical_center="true">

                <!-- Section Heading -->
                <div class="section-heading mb-2">
                    <h2 class="heading">
                        Advanced Technologies
                    </h2>
                    <p class="paragraph">
                        Technologies are used in the innovations and scientific advancements that push the boundaries of what is currently possible.
                    </p>
                </div>
                <!-- .section-heading -->

                <!-- Left blocks -->
                <ul class="ui-icon-blocks ui-blocks-v icons-sm">
                    <li class="ui-icon-block">
                        
                        <p class="text-white d-flex">
                            <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span>
                            React Native is an framework for building mobile applications using JavaScript and React. It is designed to streamline cross-platform mobile app development.
                        </p>
                    </li>
                    <li class="ui-icon-block">
                        <p class="text-white d-flex">
                            <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span>
                            Laravel is a popular PHP web application framework known for its elegant syntax, developer-friendly tools, and robust features.
                        </p>
                    </li>
                    <li class="ui-icon-block">
                        <p class="text-white d-flex">
                            <span class="material-symbols-outlined taxioptionicon mr-3">radio_button_checked</span>
                            MySQL is one of the world's most popular open-source relational database management systems. It is renowned for its performance, reliability, ease of use, and flexibility.
                        </p>
                    </li>
                </ul>
            </div>

            <!-- Right Column -->
            <div class="col-lg-7 col-xl-6">

                <!-- Logo Cloud -->
                <div class="ui-logos-cloud">
                    <div data-size="4" class="mt-0 animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Live-Wire.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="10" class="mt-0 animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Laravel.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="7" class="mt-0 animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/php.png" data-uhd alt="cab2u -NULL" />
                    </div>

                    <!-- Flex Break -->
                    <span class="flex-break"></span>

                    <div data-size="4" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Paypal.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="10" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/react_native.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="4" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/React-Element.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="6" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/rudux.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="3" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Razor-Pay.png" data-uhd alt="cab2u -NULL" />
                    </div>

                    <!-- Flex Break -->
                    <span class="flex-break"></span>

                    <div data-size="8" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Laravel-Admin.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="3" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/pusher.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="10" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Firebase.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="5" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Map.png" data-uhd alt="cab2u -NULL" />
                    </div>

                    <!-- Flex Break -->
                    <span class="flex-break"></span>

                    <div data-size="3" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Stripe.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="10" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Sql.png" data-uhd alt="cab2u -NULL" />
                    </div>
                    <div data-size="7" class="animate" data-show="fade-in">
                        <img src="https://demo.menpanitech.com/web/cab2u/Twillio.png" data-uhd alt="cab2u -NULL" />
                    </div>

                </div>
                <!-- .ui-logo-cloud  -->

            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .section -->


<!-- FAQ Section -->
<div id='faq' class="section ui-gradient-blue">
    <div class="container">
        <div class="section-heading center">
            <h2 class="heading text-indigo">
                Frequently Asked
            </h2>
            <p class="paragraph">
                FAQ's Advantages or benefits of the topic to help users understand why it's important or valuable.
            </p>
        </div>
        <!-- .section-heading -->
        <div class="row">
            <div class="col-md-6" data-vertical_center="true">
                <!-- Accordion -->
                <div class="ui-accordion-panel ui-indigo">
                    <!-- Accordion 1  -->
                    <div class="ui-card shadow-sm ui-accordion">
                        <h6 class="toggle" data-toggle="accordion2-one">1. How can I purchase this taxi app?</h6>
                        <div class="body in" data-accord="accordion2-one">
                            <p>You can purchase this taxi app through various methods: Buy a source code directly from codecanyon. Hire us to do the installation and configuration for you. Hire us to build a customized app on this taxi app for you.
                            </p>
                        </div>
                    </div>
                    <!-- Accordion 2  -->
                    <div class="ui-card shadow-sm ui-accordion">
                        <h6 class="toggle" data-toggle="accordion2-two">2. What are the special features of cab2u application?</h6>
                        <div class="body" data-accord="accordion2-two">
                            <p>1. Specialized UI/UX design 2. Code optimization 3. Map optimization 4. Multiple trips 5. Live tracking 6. Google navigation etc
                            </p>
                        </div>
                    </div>
                    <!-- Accordion 3  -->
                    <div class="ui-card shadow-sm ui-accordion">
                        <h6 class="toggle" data-toggle="accordion2-three">3. How can I contact customer support for the taxi app?</h6>
                        <div class="body" data-accord="accordion2-three">
                            <p>Look for a "Contact Us" or "Support" option, You can typically reach out to customer support through email, chat, or phone.
                            </p>
                        </div>
                    </div>
                    <!-- Accordion 4  -->
                    <div class="ui-card shadow-sm ui-accordion">
                        <h6 class="toggle" data-toggle="accordion2-four">4. Can I customize this app to suit your needs?</h6>
                        <div class="body" data-accord="accordion2-four">
                            <p>Yes, you can typically customize the app to some extent, depending on the licensing terms and the flexibility of the app's code. Customization can include branding, adding or removing features, and adapting it to your requirements.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- Accordion -->
            </div>
            <div class="col-md-6">
                <img src="https://demo.menpanitech.com/web/cab2u/faq.png" data-uhd class="responsive-on-sm" data-max_width="500" />
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .section -->

<!--  Section -->

<!-- .section -->

<!-- App Stats Section -->
<!-- .section -->
<!-- Scripts -->
<script src="https://demo.menpanitech.com/web/assets/js/libs/jquery/jquery-3.2.1.min.js"></script>
<script src="https://demo.menpanitech.com/web/assets/js/libs/slider-pro/jquery.sliderPro.min.js"></script>
<script src="https://demo.menpanitech.com/web/assets/js/libs/owl.carousel/owl.carousel.min.js"></script>
<!--
# Google Maps
# Add Your Google Maps API Key Below !!
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5B2iXEELo6aIReGYLJdVKBlzHnrM0YLU"></script>
<script src="https://demo.menpanitech.com/web/assets/js/applify/ui-map.js"></script>
<script src="https://demo.menpanitech.com/web/assets/js/libs/form-validator/form-validator.min.js"></script>
<script src="https://demo.menpanitech.com/web/assets/js/libs/bootstrap.js"></script>
<script src="https://demo.menpanitech.com/web/assets/js/applify/build/applify.js"></script>
@endsection