@extends('client.home')
@section('link')

@endsection
@section('index')

<div class="cart-section mt-150 mb-150">
    <div class="container">
        @if (count($detail) != 0)
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr>
                                    <th class="product-thumbnail text-center">Hình ảnh</th>
                                    <th class="product-name text-center">Tên sản phẩm</th>
                                    <th class="product-price text-center">Tình trạng</th>
                                    <th class="product-quantity text-center">SL</th>
                                    <th class="product-quantity text-center">Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;   
                                @endphp
                                @foreach ($detail as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img 
                                                src="{{ asset('client/images/product/' . $item->productSize->product->image) }}"
                                                class="profile-user-img img-responsive"
                                            >
                                        </td>
                                        <td class="product-name">{{ $item->productSize->product->name }}</td>
                                        <td class="product-price">{{ $item->productSize->size->name }}</td>
                                        <td class="product-quantity">{{ $item->quantity }}</td>
                                        <td class="product-quantity"><b>{{ number_format($item->total) }}đ</b></td>
                                    </tr>
                                    @php
                                        $total += $item->total
                                    @endphp
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><b>{{ number_format($total) }}đ</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            Không có đơn hàng
        @endif
    </div>
</div>
@endsection