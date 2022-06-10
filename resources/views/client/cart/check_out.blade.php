@extends('client.home')
@section('link')

@endsection
@section('index')

<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <form
            class="contact_form"
            action="{{ route('check-out') }}"
            method="POST"
            novalidate="novalidate"
        >
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Thông tin giao hàng
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <p>
                                                <input type="text"  name="name" value="{{ (Auth::check()) ? Auth::user()->name : old('name') }}" placeholder="Họ và tên">
                                                @if ($errors->has('name'))
                                                    <div class="error">{{ $errors->first('name') }}</div>
                                                @endif
                                            </p>
                                            <p>
                                                <input type="email"  name="email" value="{{ (Auth::check()) ? Auth::user()->email : old('email') }}" placeholder="Email của quý khách">
                                                @if ($errors->has('email'))
                                                    <div class="error">{{ $errors->first('email') }}</div>
                                                @endif
                                            </p>
                                            <p>
                                                <input type="number"  name="phone" value="{{ (Auth::check()) ? Auth::user()->phone : old('phone') }}" placeholder="Số điện thoại">
                                                @if ($errors->has('phone'))
                                                    <div class="error">{{ $errors->first('phone') }}</div>
                                                @endif
                                            </p>
                                            <p>
                                                <input type="text"  name="address" value="{{ (Auth::check()) ? Auth::user()->address : old('address') }}" placeholder="Địa chỉ">
                                                @if ($errors->has('address'))
                                                    <div class="error">{{ $errors->first('address') }}</div>
                                                @endif
                                            </p>
                                            <p>
                                                @if ($errors->has('note'))
                                                    <div class="error">{{ $errors->first('note') }}</div>
                                                @endif
                                                <textarea
                                                    name="note"
                                                    id="message"
                                                    rows="1"
                                                    placeholder="Ghi chú"
                                                ></textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <table class="order-details">
                            <thead>
                                <tr>
                                    <th>Đơn hàng của bạn</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody class="order-details-body">
                                <tr>
                                    <td>Sản phẩm</td>
                                    <td>Thành tiền</td>
                                </tr>
                                @foreach ($cart as $item)
                                    <tr>
                                        <td>{{ $item['name'] }} ({{ $item['size'] }})x {{ $item['quantity'] }}</td>
                                        <td>{{ number_format($item['total']) }}đ</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    {{-- <td><input name ="total" type="hidden" value={{ $total}}></td> --}}
                                    <td><b style="color: red">{{ number_format($total) }}đ</b></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <button type="submit" class="boxed-btn" style="outline: none; border: none; border-radius: 50px ">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </form>
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