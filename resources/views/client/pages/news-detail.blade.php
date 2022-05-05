@extends('client.home')
@section('index')

<div class="latest-news mt-150 mb-150">
   <div class="container">
       <div class="row">
          <div class="col-lg-12 posts-list">
             <div class="single-post">
                <div class="blog_details">
                   <h2>
                        {{ $news->name }}
                   </h2>
                   <p class="excert">
                        {{ $news->short_description }}
                   </p>
                   <p>
                    {!! $news->content !!}
                   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

{{-- <div class="logo-carousel-section">
   <div class="container">
      <div class="row">
            <div class="col-lg-12">
               <div class="logo-carousel-inner">
                  <div class="single-logo-item">
                        <img src="{{ asset('client/assets/img/company-logos/1.png') }}" alt="">
                  </div>
                  <div class="single-logo-item">
                        <img src="{{ asset('client/assets/img/company-logos/2.png') }}" alt="">
                  </div>
                  <div class="single-logo-item">
                        <img src="{{ asset('client/assets/img/company-logos/3.png') }}" alt="">
                  </div>
                  <div class="single-logo-item">
                        <img src="{{ asset('client/assets/img/company-logos/4.png') }}" alt="">
                  </div>
                  <div class="single-logo-item">
                        <img src="{{ asset('client/assets/img/company-logos/5.png') }}" alt="">
                  </div>
               </div>
            </div>
      </div>
   </div>
</div> --}}

@endsection