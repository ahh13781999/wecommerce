<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Home extends Component
{
    public $newProducts;
    public $discountProducts; 
    public $popularProducts;


    public $selectedCategory;

    public function mount()
    {
        $this->newProducts = Product::orderByDesc('created_at')->limit(5)->get();
        $this->discountProducts = Product::where('off_price','!=','')->limit(5)->get();
        $this->popularProducts = Product::whereFeatured(1)->limit(5)->get();
    }

    public function render()
    {
        return view('livewire.user.home')->layout('layouts.user');
    }
}
