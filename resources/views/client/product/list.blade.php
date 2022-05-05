@extends('client.home')

@section('link')

@endsection

@section('index')
@php
    $route = \Route::current();
    $routeName = $route->getName();
    $categoryId = 0;
    $parentCategoryOfCurrentCategory = 0;
    $pageName = '';

    if ($routeName == 'category-products' || $routeName == 'child-category-products') {
        $categoryId = $route->parameters()['category'];
        $pageName = App\Models\Category::findOrFail($categoryId)->name;
    }

    if ($routeName == 'child-category-products') {
        $currentCategory = App\Models\Category::findOrFail($categoryId);
        $pageName = $currentCategory->name;

        if ($currentCategory->parent_id != 0) {
            $parentCategoryOfCurrentCategory = $currentCategory->parent_id;
        }
    }
@endphp


<div class="product-section mt-150 mb-150">
    <div class="container">
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        @foreach ($categories as $parent)
                            <li class="{{ ($parentCategoryOfCurrentCategory == $parent->id || $parent->id == $categoryId) ? "active" : "" }}">
                                <a href="{{ route('category-products', $parent->id) }}">
                                    {{ $parent->name }}
                                </a>
                            </li> 
                        @endforeach
                    </ul>
                </div>
            </div>
        </div> --}}

        <div class="col-md-12 text-center" style="margin-bottom: 30px">
            <h6>Hiện có {{ count($products) }} sản phẩm</h6>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-5 text-center">
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

        @if (count($products) != 0)
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            @foreach ($products->links()->elements[0] as $key => $item)
                                <li>
                                    <a href="{{ $item }}" class="{{ $products->links()->paginator->currentPage() == $key ? "active" : "" }}">{{ $key }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@endsection

@section('script')

@endsection