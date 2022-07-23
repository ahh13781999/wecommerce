<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Review;
use App\Models\Shipping;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $todaySales;
    public $monthSales;
    public $annualSales;

    public $latestOrders;
    public $latestComments;
    public $latestUsers;
    public $latestShippings;

    public function mount()
    {
        $this->todaySales = Order::whereDay('created_at',Carbon::today())->get()->count();
        $this->monthSales = Order::whereMonth('created_at',Carbon::now()->month)->get()->count();
        $this->annualSales = Order::whereYear('created_at',Carbon::now()->year)->get()->count();
        
        $this->latestOrders = Order::OrderByDesc('created_at')->limit(5)->get();
        $this->latestComments = Review::OrderByDesc('created_at')->limit(5)->get();
        $this->latestUsers = User::OrderByDesc('created_at')->limit(5)->get();
        $this->latestShippings = Shipping::OrderByDesc('created_at')->limit(5)->get();

    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard')->layout('layouts.admin');
    }
}
