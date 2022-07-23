<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Models\Review;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class Detail extends Component
{
    public $product;
    public $comment;
    public $qty = 1;

    public function mount($slug)
    {
      $this->product = Product::whereSlug($slug)->first();
    }

    public function decreaseQuantity()
    {
        if($this->qty != 0)
        {
         $this->qty--;
        }
    }
     
    public function increaseQuantity()
    {
        return $this->qty++;
    }

    public function Store($productId, $productName, $productPrice)
    {
       Cart::instance('cart')->add($productId,$productName,$this->qty,$productPrice)->associate('App\Models\Product');
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

    public function addReview()
    { 

    $this->validate(
        ['comment' => 'required'],
        ['comment.required' => 'نظر نباید خالی باشد.']
    );

      $review  = new Review();
      $review->name = Auth::user()->name;
      $review->email = Auth::user()->email;
      $review->comment =$this->comment;
      $review->product_id = $this->product->id;
      $review->user_id =Auth::user()->id;
      $review->save();

      session()->flash('message','نظر شما با موفقیت ثبت شد!');
      
    }

    public function render()
    {
        return view('livewire.user.detail',[
            'product' => $this->product,
            'wishListItems' => Cart::instance('wishlist')->content()->pluck('id'),
        ])->layout('layouts.user');
    }
}
