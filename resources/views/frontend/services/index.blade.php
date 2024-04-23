@extends('frontend.layouts.main')
@section('tittle')
<title>Our Services</title>
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
                  <h1>"Our Services"</h1>
                  <div class="breadcrumb-list">
                     <a href="index.html">Home</a><img src="{{ url('public/assets/img/inner-pages/breadcrumb-arrow.svg') }}" alt> Our Services
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection