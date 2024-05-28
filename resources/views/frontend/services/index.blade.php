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
                     <a href="{{ url('') }}">Home</a><img src="{{ url('public/assets/img/inner-pages/breadcrumb-arrow.svg') }}" alt> Our Services
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="home3-solution-section sec-mar">
   <div class="container">
      <div class="row justify-content-center g-4">
         @foreach(DB::table('services')->get() as $r)
         <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
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
@endsection