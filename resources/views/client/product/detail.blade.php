@extends('client.home')

@section('link')

@endsection

@section('index')

<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-product-img">
                    <img src="{{ asset('client/images/product/' . $product->image) }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-product-content">
                    <h3>{{ $product->name }}</h3>
                    <p class="single-product-pricing"><label>Giá:</label> {{ number_format(($product->sale_percent != 0) ? $product->price_sale : $product->price) . 'đ' }}</p>
                    <hr/>
                    <div class="single-product-form">
                        <label for="product_size_id">Số lượng:</label>
                        <input type="number" placeholder="1" min="1" name="qty" id="qty" value="1">
                    </div>
                    <div class="single-product-form">
                        <label for="product_size_id">Khối lượng tịnh:</label>
                        <select class="title">
                            <option value="1 Kg">1 Kg</option>
                        </select>
                        <br>
                        <hr/>
                        <label for="product_size_id">Kích thước:</label>
                        <select id="product_size_id" class="form-control">
                            @foreach ($product->productSizes as $ps)
                                <option value="{{ $ps->id }}">{{ $ps->size->name }} - Số lượng: {{ $ps->quantity }}</option>
                            @endforeach
                        </select>
                        
                        <br>
                        <hr/>
                        <a href="{{ route('add-cart') }}" class="form-cart cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Thêm vào giỏ
                        </a>
                        <p><strong>Danh mục: </strong>{{ $product->category->name }}</p>
                    </div>
                    <hr/>
                    <h4>Chia sẻ:</h4>
                    <ul class="product-share">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <section class="product_description_area">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    id="review-tab"
                                    data-toggle="tab"
                                    href="#review"
                                    role="tab"
                                    aria-controls="review"
                                    aria-selected="false"
                                >
                                    Mô tả
                                </a>
                            </li>
                            <li class="nav-item item">
                                <a
                                    class="nav-link active"
                                    id="review-tab"
                                    data-toggle="tab"
                                    href="#review"
                                    role="tab"
                                    aria-controls="review"
                                    aria-selected="false"
                                >
                                    Bình luận
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div
                                class="tab-pane fade show active"
                                id="review"
                                role="tabpanel"
                                aria-labelledby="review-tab"
                            >
                                <p>{!! $product->description !!}</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">Sản phẩm</span> khác</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('detail-product', $product->id) }}">
                                <img src="{{ asset('client/images/product/' . $product->image) }}" alt="" style="height: 250px;
                                object-fit: cover;">
                            </a>
                        </div>
                        <h3 class="s-text" style="width: 90%;
                        margin: 0 auto;">{{ $product->name }}</h3>
                        <p class="product-price"><span>Giá</span> {{ number_format(($product->sale_percent == 0) ? $product->price : $product->price_sale) . 'đ' }} </p>
                        <a href="{{ route('detail-product', $product->id) }}" class="cart-btn">
                            Xem chi tiết
                        </a>
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

@section('script')

<script type="text/javascript" src="{{ asset('client/js/cloudzoom.js') }}"></script> 
<script>
    $('.form-cart').click(function(e) {
	    e.preventDefault();

	    var route = $(this).attr('href');
        var product_size_id = $('#product_size_id').val();
        var quantity = $('#qty').val();


        $.ajax({
            url: route,
            type: 'POST',
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                product_size_id: product_size_id,
                quantity: quantity,
            },
        })
        .done(function(res) {
            $('.notification').append(`
                <div class="message">
                    ${res.message}
                </div>
            `);

            $('.message').delay(3000).slideUp();

            setTimeout(function() {
                $('.notification').text('');
            }, 60000)
        })
        .fail(function(err) {
            alert(err.responseJSON.errors.quantity[0])
        })
        .always(function() {

        });
    });
</script>
@endsection