<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Cart;

class Wishlist extends Component
{
    public function removeFromWishlist($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        $this->emitTo('user.header','refreshComponent');
    }
     
    function moveProductFromWishlistToCart($rowId)
     {
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('user.header','refreshComponent');
        session()->flash('message','کالا به سبد خرید اضافه شد!');
     }

    public function render()
    {
        return view('livewire.user.wishlist')->layout('layouts.user');
    }
}
