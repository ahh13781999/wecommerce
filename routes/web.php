<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\User\Cart;
use App\Http\Livewire\User\CategoryComponent;
use App\Http\Livewire\User\Checkout;
use App\Http\Livewire\User\Detail;
use App\Http\Livewire\User\Home;
use App\Http\Livewire\User\Shop;
use App\Http\Livewire\User\SubCategoryComponent;
use App\Http\Livewire\User\ThankYou;
use App\Http\Livewire\User\UserChangePassword;
use App\Http\Livewire\User\UserOrders;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\Wishlist;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';

Route::get('/',Home::class)->name('home');
Route::get('/shop',Shop::class)->name('shop');
Route::get('/cart',Cart::class)->name('cart');
Route::get('/detail/{slug}',Detail::class)->name('detail');
Route::get('/sub-category/{slug}',SubCategoryComponent::class)->name('sub-category');

Route::middleware(['auth'])->group(function(){
    Route::get('/wishlist',Wishlist::class)->name('wishlist');
    Route::get('/checkout',Checkout::class)->name('checkout');
    Route::get('/thank-you',ThankYou::class)->name('thank-you');
    Route::get('/user/profile/{user_id}',UserProfileComponent::class)->name('user.profile');
    Route::get('/user/change_password',UserChangePassword::class)->name('user.change-password');
    Route::get('/user/orders',UserOrders::class)->name('user.orders');
});