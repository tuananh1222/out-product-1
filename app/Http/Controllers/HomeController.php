<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\News;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class HomeController extends Controller
{
    public function registerForm()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('client.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->all();
        $password = $data['password'];
        $data['role_id'] = 1;
        $data['password'] = bcrypt($data['password']);
        User::create($data);

        if (Auth::attempt([
            'email' => $data['email'],
            'password' => $password,
        ])) {
            return redirect()->route('home')->with('message', 'Thông tin của bạn đã được đăng ký');
        }
    }

    public function loginForm()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('client.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->all();
        $user = User::whereEmail($data['email'])->first();
        
        if ($user) {
            if (Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password'],
            ])) {
                return redirect()->route('home');
            }
        }

        return redirect()->back()->with('messageSuccess', 'Thông tin đăng nhập không đúng');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function index()
    {
        $products = Product::whereStatus(1)->orderByDesc('created_at')->paginate(config('app.my_paginate'));
        $title = "Trang chủ";
        return view('client.product.list', compact([
            'products',
            'title'
        ]));
    }

    public function getProductsOfCategory($parentCategoryId)
    {
        $categoryIds = [];
        $parentCategory = Category::findOrFail($parentCategoryId)->load('children');
        array_push($categoryIds, $parentCategory->id);
        $categoryIds = array_merge($categoryIds, $parentCategory->children->pluck('id')->toArray());
        $products = Product::whereIn('category_id', $categoryIds)->whereStatus(1)->orderByDesc('created_at')->paginate(config('app.my_paginate'));
        $title = $parentCategory->name;
        return view('client.product.list', compact([
            'products','title'
        ]));
    }

    public function getProductsOfChildCategory($childCategoryId)
    {
        $childCategory = Category::findOrFail($childCategoryId);
        $products = Product::where('category_id', $childCategory->id)->whereStatus(1)->orderByDesc('created_at')->paginate(config('app.my_paginate'));
        $title = $childCategory;
        return view('client.product.list', compact([
            'products', 'title'
        ]));
    }

    public function searchProducts(Request $request)
    {
        $data = $request->all();
        $pageNameRoot = 'Từ khóa: ' . $data['key'];
        $products = Product::where('name', 'like', '%' . $data['key'] . '%')->whereStatus(1)->orderByDesc('created_at')->paginate(config('app.my_paginate'));
        $title = "Tìm kiếm";
        return view('client.product.list', compact([
            'pageNameRoot',
            'products',
            'title'
        ]));
    }

    public function detailProduct($productId)
    {
        $product = Product::findOrFail($productId)->load([
            'productSizes' => function ($query) {
                $query->with('size')->get();
            }
        ]);
        $pageNameRoot = $product->name;
        $products = Product::where('id', '!=', $productId)->whereStatus(1)->orderByDesc('created_at')->take(6)->get();
        $title = $product->name;
        return view('client.product.detail', compact([
            'pageNameRoot',
            'product',
            'products',
            'title'
        ]));
    }

    // page
    public function contactPage()
    {
        $pageNameRoot = 'Liên hệ';
        $title = $pageNameRoot;
        return view('client.pages.contact', compact('pageNameRoot', 'title'));
    }

    public function aboutUs()
    {
        $pageNameRoot = 'Giới thiệu';
        $title = $pageNameRoot;
        return view('client.pages.about', compact('pageNameRoot', 'title'));
    }

    public function newsPage()
    {
        $pageNameRoot = 'Tin tức';
        $title = $pageNameRoot;
        $news = News::all();

        return view('client.pages.news', compact([
            'pageNameRoot',
            'title',
            'news',
        ]));
    }

    public function newsDetailPage($newsId)
    {
        $pageNameRoot = 'Tin tức > Chi tiết';
        $news = News::findOrFail($newsId);

        return view('client.pages.news-detail', compact([
            'pageNameRoot',
            'news',
        ]));
    }
}
