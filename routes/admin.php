<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\BrandCrud;
use App\Http\Livewire\Admin\CategoryCrud;
use App\Http\Livewire\Admin\CouponCrud;
use App\Http\Livewire\Admin\HomeSliderCrud;
use App\Http\Livewire\Admin\OrderCrud;
use App\Http\Livewire\Admin\OrderDetail;
use App\Http\Livewire\Admin\ProductAttribute;
use App\Http\Livewire\Admin\ProductCrud;
use App\Http\Livewire\Admin\ReviewCrud;
use App\Http\Livewire\Admin\SubCategoryCrud;
use App\Http\Livewire\Admin\UserComponent;
use Illuminate\Support\Facades\Route;

// Admin Routes

Route::middleware(['auth:admin'])->prefix('admin')->group(function(){
    Route::get('/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/brand', BrandCrud::class)->name('brand.crud');
    Route::get('/category', CategoryCrud::class)->name('category.crud');
    Route::get('/sub-category', SubCategoryCrud::class)->name('sub-category.crud');
    Route::get('/product', ProductCrud::class)->name('product.crud');
    Route::get('/home-slider', HomeSliderCrud::class)->name('home-slider.crud');
    Route::get('/user',UserComponent::class)->name('user.crud');
    Route::get('/coupon',CouponCrud::class)->name('coupon.crud');
    Route::get('/product-attribute',ProductAttribute::class)->name('product-attribute.crud');
    Route::get('/order',OrderCrud::class)->name('order.crud');
    Route::get('/order/{order_id}',OrderDetail::class)->name('order.detail');
    Route::get('/review',ReviewCrud::class)->name('review.crud');
});