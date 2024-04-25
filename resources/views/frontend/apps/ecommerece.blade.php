@extends('frontend.layouts.main')
@php
    $page = DB::table('travelpages')->where('url' , 'ecommerece-app')->first();
@endphp
@section('tittle')
@include('frontend.apps.mettatittle')
@endsection
@section('content')
<!-- https://shopking.dev/ -->
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/ecommerece/custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/ecommerece/core.css') }}">
<div id="main-hero" class="hero-body">
    <div class="container has-text-centered">
        <div class="columns ini-hero-content">
            <div class="column is-5 has-text-left">
                <h1 class="title main-title dark-text text-bold is-2 ini-banner-title">
                    {{ $page->main_heading }}
                </h1>
                <h2 class="subtitle is-5 body-color ini-banner-descrip">
                    {{ $page->sub_heading }}
                </h2>
                <div class="ini-banner-btns">
                    <a class="primary-btn3" href="javascript:void(0)"> {{ $page->main_button_text }}</a>
                </div>
            </div>
            <div class="column is-7">
                <figure class="image blob-figure">
                    <img alt="{{ $page->main_heading }}" src="{{ url('public/images') }}/{{  $page->main_image }}" alt="hero">
                </figure>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url(../img/home-6/choose-bg-1.png), linear-gradient(#1e1c22, #1e1c22);padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title main-title dark-text text-bold is-3 mb-6">Easy Install and Launch:</h2>
                <h3 class="subtitle is-5 body-color line-base ini-about-descrip">
                    <span>Get your online store up and running quickly with a hassle-free installation process. Our user-friendly setup wizard and documentation make launching your eCommerce platform a breeze, allowing you to focus on growing your business rather than dealing with complex installation procedures.</span>
                </h3>
                <div class="ini-banner-btns mt-5">
                    <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Get Quote</a>
                    <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Schedule a Call</a>
                    <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Book Demo</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://shopking.dev/assets/img/features/install and launch.png" alt="User friendly interface">
            </div>
        </div>
    </div>
</div>
<div id="about" class="section  has-background-image is-cover">
    <div class="row">
        <div class="col-md-6" style=" max-width: 500px; margin: auto; ">
            <img style="max-width: 500px;margin: auto;" src="https://shopking.dev/assets/img/features/about shopking.png" alt="User friendly interface">
        </div>
        <div class="col-md-6">
            <h2 class="title main-title dark-text text-bold is-3 mb-5 mt-6">User-Friendly Interface</h2>
            <h3 class="subtitle is-5 body-color line-base ini-about-descrip">
                <span>Enjoy a seamless and intuitive user experience with a thoughtfully designed interface that ensures easy navigation and accessibility.</span>
                
            </h3>
            <div class="ini-banner-btns mt-5">
                <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Get Quote</a>
                <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Schedule a Call</a>
                <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Book Demo</a>
            </div>
        </div>
    </div>
</div>

<div style="background-image: url(../img/home-6/choose-bg-1.png), linear-gradient(#1e1c22, #1e1c22);padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title main-title dark-text text-bold is-3 mb-6">Powerful Point of Sale (POS) System</h2>
                <h3 class="subtitle is-5 body-color line-base ini-about-descrip">
                    <span>Efficiently manage in-store transactions with our robust POS system, streamlining the checkout process and enhancing customer satisfaction.</span>
                </h3>
                <div class="ini-banner-btns mt-5">
                    <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Get Quote</a>
                    <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Schedule a Call</a>
                    <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Book Demo</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://shopking.dev/assets/img/features/pos__stock.png" alt="User friendly interface">
            </div>
        </div>
    </div>
</div>
<div id="about" class="section  has-background-image is-cover">
    <div class="row">
        <div class="col-md-6" style=" max-width: 500px; margin: auto; ">
            <img style="max-width: 500px;margin: auto;" src="https://shopking.dev/assets/img/features/order_tracking.jpg" alt="User friendly interface">
        </div>
        <div class="col-md-6">
            <h2 class="title main-title dark-text text-bold is-3 mb-6">Order Tracking and Notifications</h2>
            <h3 class="subtitle is-5 body-color line-base ini-about-descrip">
                <span>Keep your customers informed at every step. Provide real-time order tracking and notifications to enhance transparency and build trust.</span>
            </h3>
            <div class="ini-banner-btns mt-5">
                <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Get Quote</a>
                <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Schedule a Call</a>
                <a class="primary-btn3" href="{{ url('get-quote') }}?category=ecommerece-application">Book Demo</a>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url(../img/home-6/choose-bg-1.png), linear-gradient(#1e1c22, #1e1c22);padding-top: 50px;padding-bottom: 50px;" class="features">
    <div class="container">
        <h2 class="title main-title dark-text text-bold is-3 mb-6 has-text-centered">Modules to be Covered in Ecommerece Application</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Multiple Outlet Options</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Role & Permissions</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Advance Point of Sale</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Advanced Inventory</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Easy Payment System</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Coupon &amp; Voucher Functionality</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Product Variations &amp; Attributes</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Multi Language supported</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Multiple Payment Gateway</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Multiple SMS Gateway</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>POS &amp; Online Order</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Unlimited Page Builder</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Push Notification</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Cookies and Social Analytics</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">check</div><span>Powerful Admin Panel</span></a>
            </div>
        </div>
    </div>
</div>
<div style="padding-top: 50px;padding-bottom: 50px;" class="features">
    <div class="container">
        <h2 class="title main-title dark-text text-bold is-3 mb-6 has-text-centered">Payment Gateways in Ecommerece Application</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>Paypal</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>Stripe</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>Pay Stack</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>Mollie</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>Paytm</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>RazorPay</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>Skrill</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>PhonePe</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">payments</div><span>Google Pay</span></a>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url(../img/home-6/choose-bg-1.png), linear-gradient(#1e1c22, #1e1c22);padding-top: 50px;padding-bottom: 50px;" class="features">
    <div class="container">
        <h2 class="title main-title dark-text text-bold is-3 mb-6 has-text-centered">SMS Gateways in Ecommerece Application</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">chat</div><span>Twilio</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">chat</div><span>Bulk SMS</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">chat</div><span>Nexmo</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">chat</div><span>MSG91</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">chat</div><span>Clickatell</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">chat</div><span>BulkSMSBD.COM</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">chat</div><span>2Facotr</span></a>
            </div>
            <div class="col-md-4">
            <a href="javascript:void(0)" class="dark-text form-control d-flex"><div class="material-symbols-outlined service-icon mr-3">chat</div><span>Telesign</span></a>
            </div>
        </div>
    </div>
</div>
@endsection