@extends('admin.app')
@section('index')
    <section class="content-header">
        <h1><?= $tab ?></h1>
        @if (session()->has('messageSuccess'))
            <div class="col-md-3 infoMessage">
                <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <i class="fa fa-bell-o"></i>
                            Thông báo
                        </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        {{ session()->get('messageSuccess') }}
                    </div>
                </div>
            </div>
        @endif
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">Khách hàng: {{ $order->user->name }}</h3>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Số điện thoại</b>
                                <a class="pull-right">{{ $order->user->phone }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Địa chỉ: </b>
                                <a>{{ $order->user->address }}</a>
                            </li>
                        </ul>
                        <div class="form-group text-center">
                            <b>Ghi chú: </b> 
                            {{ $order->note }}
                            <br>
                            <br>
                            @if ($order->status <2)                                
                           
                            <form action="{{ route('orders.update', $order->id) }}" method="POST" class="noPrint">
                                @method("PUT")
                                @csrf
                                <select 
                                    style="height:33px"
                                    class="select" 
                                    aria-label="Default select example"                                   
                                    name="status">     
                                    <option selected>
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
                                            if ($order->status == 3) {
                                                echo '<span class="label label-default">Bị hủy hàng</span>';
                                            }
                                            if ($order->status == 4) {
                                                echo '<span class="label label-warning">Bị trả hàng</span>';
                                            }
                                        @endphp
                                    </option>                              
                                    <option class="dropdown-item" value="0">Đã xác nhận</option>
                                    <option class="dropdown-item" value="1">Chưa xác nhận</option>
                                    <option class="dropdown-item" value="2">Đã thanh toán</option>
                                  </select>
                                <button type="submit" class="btn btn-danger">Update                                    
                                </button>
                            </form>
                            @endif
                            <br>
                            <button class="btn btn-primary noPrint" onclick="window.print();">
                                <b>In hóa đơn</b>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-body">
                                <div id="view">
                                    <form action="" accept-charset="utf-8">
                                        <h1 class="text-center" style="color: red">Chi tiết đơn hàng</h1>
                                        <h4>
                                            Ngày đặt: <b>{{ date('d/m/Y H:i:s', strtotime($order->created_at)) }}</b>
                                        </h4>
                                        <h4>
                                            Trạng thái:
                                            <b>
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
                                                    if ($order->status == 3) {
                                                        echo '<span class="label label-default">Đã hủy hàng</span>';
                                                    }
                                                    if ($order->status == 4) {
                                                        echo '<span class="label label-danger">Đã hoàn trả hàng</span>';
                                                    }
                                                @endphp
                                            </b>
                                        </h4>
                                        <br />
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Hình ảnh</th>
                                                        <th>Tên sản phẩm</th>
                                                        <th>Tình trạng</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng giá</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $total = 0;   
                                                    @endphp
                                                    @foreach ($orderDetail as $item)
                                                        <tr>
                                                            <td>
                                                                <img 
                                                                    src="{{ asset('client/images/product/' . $item->productSize->product->image) }}"
                                                                    class="profile-user-img img-responsive"
                                                                >
                                                            </td>
                                                            <td>{{ $item->productSize->product->name }}</td>
                                                            <td>{{ $item->productSize->size->name }}</td>
                                                            <td>{{ $item->quantity }}</td>
                                                            <td>{{ number_format($item->total) }}đ</td>
                                                        </tr>
                                                        @php
                                                            $total += $item->total
                                                        @endphp
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="4"></td>
                                                        <td colspan="1">
                                                            <b>{{ number_format($total) }}đ</b>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection