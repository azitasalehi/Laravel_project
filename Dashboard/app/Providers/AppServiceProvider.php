<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Product_Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $products = Product::all();
        $product_cats = Product_Category::all();
        $categories=Category::all();
        View::share('product_cats', $product_cats);
        View::share('products', $products);
        View::share('categories', $categories);
    }
}
