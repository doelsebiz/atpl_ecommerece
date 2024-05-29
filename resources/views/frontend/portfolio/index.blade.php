@extends('frontend.layouts.main')
@section('tittle')
<title>Our Portfolio</title>
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
                  <h1>"Our Portfolio"</h1>
                  <div class="breadcrumb-list">
                     <a href="{{ url('') }}">Home</a><img src="{{ url('public/assets/img/inner-pages/breadcrumb-arrow.svg') }}" alt> Our Portfolio
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="home3-success-stories-area sec-mar" style="background-color: #0f0f0f;padding: 0px 3%;">
   <div class="container">
      <div class="row justify-content-center g-lg-4 gy-5">
         @foreach(DB::table('projects')->get() as $r)
         <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
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
@endsection