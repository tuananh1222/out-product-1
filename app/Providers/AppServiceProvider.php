<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $categories = Category::with('children')->has('children')->whereParentId(0)->whereStatus(1)->get();
        $otherProducts = Product::inRandomOrder()->limit(3)->get();
        
        view()->composer([
            'client.home',
            'client.product.list',
        ], function ($view) use ($categories) {
            $view->with([
                'categories' => $categories,
            ]);
        });
        
        view()->composer([
            'client.product.detail',
            'client.pages.about',
        ], function ($view) use ($otherProducts) {
            $view->with([
                'products' => $otherProducts,
            ]);
        });
    }
}
