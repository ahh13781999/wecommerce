<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('categories', Category::all());
        View::share('brands', Brand::all());
        View::share('selectedProducts', Product::all());
        View::share('discountedProducts', Product::whereNotNull('off_price')->limit(3)->get());

    }
}
