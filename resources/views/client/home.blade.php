<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$title}}</title>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}" />
    @include('client.layout.link')
</head>
<body>
    @php
        $route = \Route::current();
        $routeName = $route->getName();
        $pageName = '';
        $categoryId = 0;
        $parentCategoryOfCurrentCategory = 0;

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

        if (isset($pageNameRoot)) {
            $pageName = $pageNameRoot;
        }
    @endphp
    <div class="notification">
        @if (session()->has('message'))
            <div class="message">{{ session()->get('message') }}</div>
            <script>
                setTimeout(() => {
                    $('.message').delay(100).slideUp();
                }, 3000);
            </script>
        @endif
    </div>
    
    @include('client.layout.header')
    @include('client.layout.tab')

    @yield('index')
    <div class="col-md-12 col-xs-12">
		<div class="section-heading">
			<h2 title="đối tác">
				<span>ĐỐI TÁC</span>
			</h2>
		</div>
	</div>
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
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
    </div>
    @include('client.layout.footer')

    @include('client.layout.script')
</body>
</html>
