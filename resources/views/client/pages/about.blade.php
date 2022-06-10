@extends('client.home')
@section('link')

@endsection
@section('index')


<div class="feature-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="featured-text">
                    <h2 class="pb-3">Tại sao chọn <span class="orange-text">chúng tôi</span></h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="content">
                                    <h3>Giao hàng</h3>
                                    <p>Miễn phí giao hàng nhanh toàn quốc</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>Giá tiền</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="content">
                                    <h3>Vận chuyển sản phẩm</h3>
                                    <p>Kỹ càng, sạch sẽ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>Hoàn trả</h3>
                                    <p>Nếu không giống như trên website</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end featured section -->

<!-- shop banner -->
<section class="shop-banzxcner">
    <div class="container">
        <h3>Vào mùa hè tới này <br> cơ hội giảm giá <span class="orange-text">lớn...</span></h3>
        <div class="sale-percent"><span>Giảm <br> tới</span>50% <span>mỗi sản phẩm</span></div>
        <a href="{{ route('home') }}" class="cart-btn btn-lg">Xem ngay</a>
    </div>
</section>
<!-- end shop banner -->

<!-- team section -->
<div class="mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3>Các <span class="orange-text">sản phẩm</span></h3>
                    <p>Sản phẩm ngẫu nhiên</p>
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
<!-- end team section -->

<!-- testimonail-section -->
<div class="testimonail-section mt-80 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="{{ asset('client/assets/img/avaters/avatar1.png') }}" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Tâm Đạt Hữu Cơ <span>CÂU CHUYỆN THÀNH Ý CỦA TÂM ĐẠT HỮU CƠ</span></h3>
                            <p class="testimonial-body">
                                " Tâm Đạt hình thành từ mong muốn giản dị nhất của một người mẹ, người vợ trong gia đình. Những người phụ nữ ấy mong muốn mình có thể chăm chút từng bữa cơm cho gia đình thân yêu để mỗi bữa cơm đều ngon, lành và đầy đủ chất dinh dưỡng; và hơn thế nữa để mỗi bữa cơm sẽ trở thành nơi đưa những con người bận rộn về với nhau.

                                Hiểu được tâm tư đó, Tâm Đạt cũng hình thành mong muốn của riêng mình, đó là mong muốn được trở thành người đồng hành tin cậy cùng người mẹ, người vợ gia đình trong quá trình lựa chọn nguyên liệu sạch cho bữa ăn gia đình. Và dần dần mong muốn cháy bỏng đó trở thành trách nhiệm mà Tâm Đạt mang trên vai, Tâm Đạt mong muốn được thể hiện tinh thần trách nhiệm trong từng sản phẩm nhằm mang đến sức khoẻ cho cộng đồng.
                                
                                Lấy lợi ích người tiêu dùng làm kim chỉ nam để tạo nên các giá trị cốt lõi và sứ mệnh của thương hiệu Tâm Đạt trên suốt chặng đường phát triển từ những cửa hàng đầu tiên mở năm 2011 đến nay. Tâm Đạt tự hào đã hình thành  hệ thống cửa hàng gồm 06 cửa hàng trên địa bàn thành phố Hà Nội.
                                
                                Bằng tất cả tâm huyết trong mình, Tâm Đạt đã xây dựng các trang trại chăn nuôi, vườn rau hữu cơ để trở thành nguồn cung sạch cho khách hàng Tâm Đạt "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="{{ asset('client/assets/img/avaters/avatar1.png') }}" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Tâm Đạt Hữu Cơ <span>CÂU CHUYỆN THÀNH Ý CỦA TÂM ĐẠT HỮU CƠ</span></h3>
                            <p class="testimonial-body">
                                " Tâm Đạt hình thành từ mong muốn giản dị nhất của một người mẹ, người vợ trong gia đình. Những người phụ nữ ấy mong muốn mình có thể chăm chút từng bữa cơm cho gia đình thân yêu để mỗi bữa cơm đều ngon, lành và đầy đủ chất dinh dưỡng; và hơn thế nữa để mỗi bữa cơm sẽ trở thành nơi đưa những con người bận rộn về với nhau.

                                Hiểu được tâm tư đó, Tâm Đạt cũng hình thành mong muốn của riêng mình, đó là mong muốn được trở thành người đồng hành tin cậy cùng người mẹ, người vợ gia đình trong quá trình lựa chọn nguyên liệu sạch cho bữa ăn gia đình. Và dần dần mong muốn cháy bỏng đó trở thành trách nhiệm mà Tâm Đạt mang trên vai, Tâm Đạt mong muốn được thể hiện tinh thần trách nhiệm trong từng sản phẩm nhằm mang đến sức khoẻ cho cộng đồng.
                                
                                Lấy lợi ích người tiêu dùng làm kim chỉ nam để tạo nên các giá trị cốt lõi và sứ mệnh của thương hiệu Tâm Đạt trên suốt chặng đường phát triển từ những cửa hàng đầu tiên mở năm 2011 đến nay. Tâm Đạt tự hào đã hình thành  hệ thống cửa hàng gồm 06 cửa hàng trên địa bàn thành phố Hà Nội.
                                
                                Bằng tất cả tâm huyết trong mình, Tâm Đạt đã xây dựng các trang trại chăn nuôi, vườn rau hữu cơ để trở thành nguồn cung sạch cho khách hàng Tâm Đạt "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="{{ asset('client/assets/img/avaters/avatar1.png') }}" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Tâm Đạt Hữu Cơ <span>CÂU CHUYỆN THÀNH Ý CỦA TÂM ĐẠT HỮU CƠ</span></h3>
                            <p class="testimonial-body">
                                " Tâm Đạt hình thành từ mong muốn giản dị nhất của một người mẹ, người vợ trong gia đình. Những người phụ nữ ấy mong muốn mình có thể chăm chút từng bữa cơm cho gia đình thân yêu để mỗi bữa cơm đều ngon, lành và đầy đủ chất dinh dưỡng; và hơn thế nữa để mỗi bữa cơm sẽ trở thành nơi đưa những con người bận rộn về với nhau.

                                Hiểu được tâm tư đó, Tâm Đạt cũng hình thành mong muốn của riêng mình, đó là mong muốn được trở thành người đồng hành tin cậy cùng người mẹ, người vợ gia đình trong quá trình lựa chọn nguyên liệu sạch cho bữa ăn gia đình. Và dần dần mong muốn cháy bỏng đó trở thành trách nhiệm mà Tâm Đạt mang trên vai, Tâm Đạt mong muốn được thể hiện tinh thần trách nhiệm trong từng sản phẩm nhằm mang đến sức khoẻ cho cộng đồng.
                                
                                Lấy lợi ích người tiêu dùng làm kim chỉ nam để tạo nên các giá trị cốt lõi và sứ mệnh của thương hiệu Tâm Đạt trên suốt chặng đường phát triển từ những cửa hàng đầu tiên mở năm 2011 đến nay. Tâm Đạt tự hào đã hình thành  hệ thống cửa hàng gồm 06 cửa hàng trên địa bàn thành phố Hà Nội.
                                
                                Bằng tất cả tâm huyết trong mình, Tâm Đạt đã xây dựng các trang trại chăn nuôi, vườn rau hữu cơ để trở thành nguồn cung sạch cho khách hàng Tâm Đạt "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
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
@section('script')

@endsection