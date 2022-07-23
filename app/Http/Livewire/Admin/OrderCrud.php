<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrderCrud extends Component
{
   protected $listeners = ['deleteOrder','resetForm'];

    public $deletingOrderId = '';

    public $deleteModal = false;

    public $Search = '';

    public function resetForm()
    {
        $this->deletingOrderId = '';
    }

    public function deleteOrder()
    {
      $deletingOrder = Order::whereId($this->deletingOrderId)->first();
      $deletingOrder->delete();
      sleep(1);
      session()->flash('message','سفارش  با موفقیت حذف شد!');
      $this->deleteModal = false;
      $this->resetForm();
    }

    public function render()
    {
        return view('livewire.admin.order-crud',[
            'orders' => Order::Search($this->Search)->orderBy('created_at','DESC')->paginate(8),
        ])->layout('layouts.admin');
    }
}
