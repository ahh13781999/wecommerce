<?php

namespace App\Http\Livewire\User;

use App\Models\Coupon;
use Carbon\Carbon;
use Livewire\Component;
use Cart as CartControll;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $totalAfterDiscount;
       
    protected $rules = [
         'couponCode' => "required",
    ];
    protected $messages = [
        'couponCode.required' => 'وارد کردن کد تخفیف ضروری می باشد.'
    ];

    public function increaseQuantity($rowId)
    {
       $product = CartControll::instance('cart')->get($rowId);
       $qty = $product->qty + 1;
       CartControll::instance('cart')->update($rowId,$qty);
       $this->emitTo('user.header','refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
       $product = CartControll::instance('cart')->get($rowId);
       if($product->qty != 0)
       {
          $qty = $product->qty - 1; 
       }
       CartControll::instance('cart')->update($rowId,$qty);
       $this->emitTo('user.header','refreshComponent');
    }

    public function destory($rowId)
    {
        CartControll::instance('cart')->remove($rowId);
        session()->flash('message','کالا از سبد خرید حذف شد');
        $this->emitTo('user.header','refreshComponent');
    }

    public function destoryAll()
    {
        CartControll::instance('cart')->destroy();
        session()->flash('message','تمام کالاها از سبد خرید حذف شدند');
        $this->emitTo('user.header','refreshComponent');
    }

    public function saveForLater($rowId)
    {
        $item = CartControll::instance('cart')->get($rowId);
        CartControll::instance('cart')->remove($rowId);
        CartControll::instance('saveForLater')->add($item->id,$item->name,$item->qty,$item->price)->associate('\App\Models\Product');
        $this->emitTo('user.header','refreshComponent');
    }

    public function moveToCart($rowId)
    {
        $item = CartControll::instance('saveForLater')->get($rowId);
        CartControll::instance('saveForLater')->remove($rowId);
        CartControll::instance('cart')->add($item->id,$item->name,$item->qty,$item->price)->associate('\App\Models\Product');
        $this->emitTo('user.header','refreshComponent');
    }
    
    public function applyCouponCode()
    {
        $this->validate();
        $coupon = Coupon::where([
                ['code',$this->couponCode],
                ['expiry_date','>=',Carbon::today()],
                ['cart_value','<=', CartControll::instance('cart')->subtotal()],
               ])->first();

        if(!$coupon)
        {
            session()->flash('coupon_message','کد تخفیف نا معتبر می باشد.');
            return;
        }

        session()->put('coupon',[
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value,
        ]);
    }

    public function setAmountForCheckout()
    {
      if(session()->has('coupon')){    
        session()->put('checkout',[
          'discount' => $this->discount,
          'subtotal' => $this->subtotalAfterDiscount,
          'tax' => CartControll::instance('cart')->tax(),
          'total' => $this->totalAfterDiscount,
        ]);
      }
      else
      { 
        session()->put('checkout',[
            'discount' => 0,
            'subtotal' => CartControll::instance('cart')->subtotal(),
            'tax' => CartControll::instance('cart')->tax(),
            'total' => CartControll::instance('cart')->total(),
          ]);  
      }
    }

    public function calculateDiscount()
    {
        if(!CartControll::instance('cart')->count() > 0)
        {
            session()->forget('checkout');
            return;
        }
        if(session()->has('coupon'))
        {
            if(session()->get('coupon')['type'] == 'fixed')
            {
                $this->discount = session()->get('coupon')['value'];
            }
            else
            {
                $this->discount = (CartControll::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;
            }
            $this->subtotalAfterDiscount = CartControll::instance('cart')->subtotal() - $this->discount;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + CartControll::instance('cart')->tax();
        }
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
    }

    public function checkout()
    {
      if(Auth::check())
      {
        return redirect()->route('checkout');
      }
      else
      {
        return redirect()->route('login');
      }
    }

    public function render()
    {
        if(session()->has('coupon'))
        {
            if(CartControll::instance('cart')->subtotal() < session()->get('coupon')['cart_value'])
            {
               session()->forget('coupon');
            }
            else
            {
               $this->calculateDiscount();
            }
        }
        $this->setAmountForCheckout();
        return view('livewire.user.cart')->layout('layouts.user');
    }
}
