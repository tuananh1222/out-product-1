@extends('client.home')
@section('index')

<div class="latest-news mt-150 mb-150">
    <div class="container">
        <div class="row">
            @foreach ($news as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('news-details', $item->id) }}">
                            <div class="latest-news-bg news-bg-1">
                                <img class="card-img rounded-0" src="{{ asset('client/images/news/' . $item->image) }}" alt="" style="
                                height: 220px;
                                object-fit: cover;
                                width: 100%">
                            </div>
                        </a>
                        <div class="news-text-box">
                            <h3 class="s-text-2" style="height: 50px"><a href="{{ route('news-details', $item->id) }}">{{ $item->name }}</a></h3>
                            <p class="blog-meta">
                                <span class="date"><i class="fas fa-calendar"></i> {{ date('d/m/Y', strtotime($item->created_at)) }}</span>
                            </p>
                            <p class="excerpt s-text-2" style="height: 50px">
                                {!! $item->short_description !!}
                            </p>
                            <a href="{{ route('news-details', $item->id) }}" class="read-more-btn">Đọc thêm <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
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