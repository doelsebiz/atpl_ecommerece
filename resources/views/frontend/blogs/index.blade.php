@extends('frontend.layouts.main')
@section('tittle')
<title>Blogs</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<section class="breadcrumbs">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb-wrapper">
               <div class="breadcrumb-cnt">
                  <h1>"Exploring The ATPL Blog"</h1>
                  <div class="breadcrumb-list">
                     <a href="{{ url('') }}">Home</a>
                     <img src="https://demo-egenslab.b-cdn.net/html/softconic/preview/assets/img/inner-pages/breadcrumb-arrow.svg" alt> About
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="home3-blog-area sec-mar">
   <div class="container">
      <div class="row justify-content-center g-lg-4 gy-5">
      	@foreach($data as $r)
         <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="single-blog magnetic-item">
               <div class="blog-img">
                  <img class="img-fluid" src="{{ url('public/images/') }}/{{ $r->image }}" alt>
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