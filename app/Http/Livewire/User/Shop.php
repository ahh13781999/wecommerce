<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;

class Shop extends Component
{
    public $paginateNumber = 12;
    public $sortField = 'name';
    public $sortOrder = 'ASC';

    public $selectedBrands = [];

    public $categories;
    
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

    public function mount()
    {
      $this->categories = Category::orderBy('category_name','ASC')->get(); 
    }

    public function render()
    {
        return view('livewire.user.shop',[
            'products' => Product::where(function($query){
                if(!empty($this->selectedBrands))
                {
                $query->whereIn('brand_id',$this->selectedBrands);
                }
            })->orderBy($this->sortField,$this->sortOrder)->paginate($this->paginateNumber),
            'wishListItems' => Cart::instance('wishlist')->content()->pluck('id'),
        ])->layout('layouts.user');
    }
}
