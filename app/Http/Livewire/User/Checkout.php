<?php

namespace App\Http\Livewire\User;

use App\Events\NewOrder;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Transaction;
use Livewire\Component;
use Cart;

class Checkout extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $line;
    public $address;
    public $province;
    public $city;
    public $zipcode;

    public $thankyou;

    public function mount()
    {

        $userProfile = Profile::where('user_id',auth()->user()->profile->user_id)->first();
        $this->firstname = $userProfile->firstname;
        $this->lastname = $userProfile->lastname;
        $this->email = $userProfile->email;
        $this->line = $userProfile->line;
        $this->address = $userProfile->address;
        $this->province = $userProfile->province;
        $this->city = $userProfile->city;
        $this->zipcode = $userProfile->zipcode;
    }

    public function update($fields)
    {
        $this->validateOnly($fields,[
            "firstname" => ["required","string","max:255"],
            "lastname" => ["required","string","max:255"],
            "email" => ["required","email","max:255"],
            "line" => ["required","numeric"],
            "address" => ["required"],
            "province" => ["required","string","max:255"],
            "city" => ["required","string","max:255"],
            "zipcode" => ["required","numeric","max:255"]
        ]);
    }

    public function placeOrder()
    {
        $this->validate([
            "firstname" => ["required","string","max:255"],
            "lastname" => ["required","string","max:255"],
            "email" => ["required","email","max:255"],
            "line" => ["required","numeric"],
            "address" => ["required"],
            "province" => ["required","string","max:255"],
            "city" => ["required","string","max:255"],
            "zipcode" => ["required","numeric"]
        ],
         [
            "firstname.required" => ".نام ضروری می باشد",
            "lastname.required" =>  ".نام خانوادگی ضروری می باشد",
            "email.required" =>  ".ایمیل ضروری می باشد",
            "email.email" =>  ".فرمت ایمیل نادرست می باشد",
            "line.required" =>  ".شماره تلفن ضروری می باشد",
            "address.required" =>  ".آدرس ضروری می باشد",
            "province.required" =>  ".استان ضروری می باشد",
            "city.required" => ".شهر ضروری می باشد",
            "zipcode.required" => ".کد پستی ضروری می باشد",
            "zipcode.numeric" => ".فرمت کد پستی نادرست می باشد",

         ]);

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'subtotal' => session()->get('checkout')['subtotal'],
            'tax' => session()->get('checkout')['tax'],
            'discount' => session()->get('checkout')['discount'],
            'total' => session()->get('checkout')['total'],
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' =>$this->email,
            'line' =>$this->line,
            'city' =>$this->city,
            'province' =>$this->province,
            'address' =>$this->address,
            'zipcode' =>$this->zipcode,
            'status' => 'ordered',
        ]);

        foreach(Cart::instance('cart')->content() as $item)
        {
            OrderItem::create([
                'price' => $item->price,
                'quantity' => $item->qty,
                'product_id' => $item->id,
                'order_id' => $order->id,
            ]);

            Product::find($item->id)->decrement('quantity');
        }

        Transaction::create([
            'status' => 'pending',
            'user_id' => auth()->user()->id,
            'order_id' => $order->id,
        ]);

        event(new NewOrder($order));
        
        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function verifyForCheckout()
    {
        if(!auth()->check())
        {
          return redirect()->route('login');
        }
        else if($this->thankyou)
        {
          return redirect()->route('thank-you');
        }
        else if(!session()->get('checkout') && session()->get('checkout')['total'] != 0)
        {
           return redirect()->route('cart');
        }
        
    }

    public function render()
    {
        $this->verifyForCheckout();
        return view('livewire.user.checkout')->layout('layouts.user');
    }
}
