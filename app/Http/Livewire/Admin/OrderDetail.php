<?php

namespace App\Http\Livewire\Admin;

use App\Mail\orderShipped;
use App\Models\Order;
use App\Models\Shipping;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class OrderDetail extends Component
{
    public $order;

    public function mount($order_id)
    {
        $this->order = Order::whereId($order_id)->first();
    }

    public function sendOrder()
    {
        $this->order->update([
           'status' => 'deliverd',
        ]);

        $shipping = new Shipping();
        $shipping->firstname = $this->order->firstname;
        $shipping->lastname = $this->order->lastname;
        $shipping->email = $this->order->email;
        $shipping->line = $this->order->line;
        $shipping->city = $this->order->city;
        $shipping->province = $this->order->province;
        $shipping->address = $this->order->address;
        $shipping->zipcode = $this->order->zipcode;
        $shipping->order_id = $this->order->id;
        $shipping->save();

       Mail::to($shipping->email)->send(new orderShipped($shipping));

        session()->flash('message','سفارش با موفقیت ارسال شد');
        return redirect()->route('order.crud');
        
    }

    public function cancelOrder()
    {
        $this->order->update([
            'status' => 'canceled',
         ]);
 
         session()->flash('message','سفارش با موفقیت کنسل شد');
         return redirect()->route('order.crud');
    }

    public function render()
    {
        return view('livewire.admin.order-detail')->layout('layouts.admin');
    }
}
