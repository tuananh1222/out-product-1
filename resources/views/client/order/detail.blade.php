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
                                <tr>
                                   
                                    <td>
                                        <div class="modal fade" id="exampleModal" role="dialog" >
                                            <div class="modal-dialog" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                                                    &times;
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <textarea name="lydo" id="lydo" rows="3" 
                                                                 placeholder="Nhập lý do hủy...."
                                                                 style="width:100%"></textarea>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-primary" id="{{$item->order_id}}"
                                                    onclick="Huydonhang(this.id)">Gửi</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    @if ($item->order->status !=3)
                                        <p>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                Hủy đơn hàng
                                            </button>
                                        </p>
                                    @endif
                                    </td>
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