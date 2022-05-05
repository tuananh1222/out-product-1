@extends('client.home')
@section('link')

@endsection
@section('index')

<div class="cart-section mt-150 mb-150">
    <div class="container">
        @if (!empty($cart))
            <form action="{{ route('update-cart') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="cart-table-wrap">
                            <table class="cart-table">
                                <thead class="cart-table-head">
                                    <tr class="table-head-row">
                                        <th class="product-remove"></th>
                                        <th class="product-image">Hình ảnh</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-total">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $key => $item)
                                        <tr class="table-body-row">
                                            <td class="product-remove">
                                                <a href="{{ route('remove-cart', $key) }}"><i class="far fa-window-close"></i>
                                                </a>
                                            </td>
                                            <td class="product-image">
                                                <img src="{{ asset('client/images/product/' . $item['image']) }}" alt="">
                                            </td>
                                            <td class="product-name">{{ $item['name'] }} - {{ $item['size'] }}</td>
                                            <td class="product-price">{{ number_format($item['price']) }}đ</td>
                                            <td class="product-quantity">
                                                <input
                                                    type="number"
                                                    min="1"
                                                    class="form-control"
                                                    name="quantity[{{ $key }}]"
                                                    value="{{ $item['quantity'] }}"
                                                />
                                            </td>
                                            <td class="product-total">{{ number_format($item['total']) }}đ</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="total-section">
                            <table class="total-table">
                                <thead class="total-table-head">
                                    <tr class="table-total-row">
                                        <th>Tổng</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total-data">
                                        <td><strong>Thành tiền: </strong></td>
                                        <td>{{ number_format($total) }}đ</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="cart-buttons">
                                <button type="submit" class="boxed-btn" style="border-radius: 50px; border: none">
                                    Cập nhật giỏ hàng
                                </button>
                                <a href="{{ route('check-out') }}" class="boxed-btn black">Tiến hành đặt hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @else
            <p class="text-center">Không có đơn hàng nào</p>
        
            <div class="row my-5 text-center">
                <div class="col-12">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary">Chọn sản phẩm</a> 
                </div>
            </div>
        @endif
    </div>
</div>

@endsection

@section('script')

@endsection