<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class Header extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh','Search'];

    public $query;

    public function render()
    {
        return view('livewire.user.header',[
            'searchItems' => Product::SearchProduct($this->query)->limit(5)->get(),
        ]);
    }
}
