@extends('client.home')
@section('link')

@endsection
@section('index')

<div class="cart-section mt-150 mb-150">
    <div class="container">
        @if (count($orders) != 0)
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr>
                                    <th class="product-thumbnail text-center">Mã đơn</th>
                                    <th class="product-name text-center">Trạng thái</th>
                                    <th class="product-price text-center">Chi tiết</th>
                                    <th class="product-quantity text-center">Ngày đặt</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="product-thumbnail">
                                            {{ $order->id }}
                                        </td>
                                        <td class="product-name">
                                            @php
                                                if ($order->status == 0) {
                                                    echo '<span class="label label-primary">Đã xác nhận</span>';
                                                }

                                                if ($order->status == 1) {
                                                    echo '<span class="label label-danger">Chưa xác nhận</span>';
                                                }

                                                if ($order->status == 2) {
                                                    echo '<span class="label label-success">Đã thanh toán</span>';
                                                }
                                            @endphp
                                        </td>
                                        <td class="product-remove">
                                            <a href="{{ route('user-order-detail', $order->id) }}" class="remove-cart" style="color: black; text-decoration: underline">
                                                Xem
                                            </a>
                                        </td>
                                        <td class="product-quantity">
                                            {{ date('d/m/Y H:i:m', strtotime($order->created_at)) }}
                                        </td>
                                    </tr>
                                @endforeach
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