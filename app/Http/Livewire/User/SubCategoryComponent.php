<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class SubCategoryComponent extends Component
{
    public $slug;
    public $categories;  
    public $sub_category;

    public $paginateNumber = 12;
    public $sortField = 'name';
    public $sortOrder = 'ASC';

    public $selectedBrands = [];


    public function mount()
    {
      $this->categories = Category::orderBy('category_name','ASC')->get();
      $this->sub_category = SubCategory::whereSubcategorySlug($this->slug)->first();
    }

    public function Store($productId, $productName, $productPrice)
    {
       Cart::instance('cart')->add($productId,$productName,1,$productPrice)->associate('App\Models\Product');
  
       session()->flash('message','کالا با موفقیت به سبد افزوده شد.');

       $this->emitTo('user.header','refreshComponent');

    }

    public function addToWishlist($productId, $productName, $productPrice)
    {
       Cart::instance('wishlist')->add($productId,$productName,1,$productPrice)->associate('App\Models\Product');

       session()->flash('message','کالا با موفقیت به لیست آرزو شد.');

       $this->emitTo('user.header','refreshComponent');
    }

    public function removeFromWishlist($productId)
    {
        foreach(Cart::instance('wishlist')->content() as $wishListItem){
        if($wishListItem->id == $productId){
           Cart::instance('wishlist')->remove($wishListItem->rowId);
        }
        }
       $this->emitTo('user.header','refreshComponent');
    }

    public function render()
    {
        return view('livewire.user.sub-category-component',
        [
            'products' => Product::whereSubCategoryId($this->sub_category->id)->where(function($query){
               if(!empty($this->selectedBrands))
               {
               $query->whereIn('brand_id',$this->selectedBrands);
               }
           })->orderBy($this->sortField,$this->sortOrder)->paginate($this->paginateNumber),
            'wishListItems' => Cart::instance('wishlist')->content()->pluck('id'),
            ])->layout('layouts.user');
    }
}
