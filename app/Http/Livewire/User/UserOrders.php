<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserOrders extends Component
{
    public $user;

    public function mount()
    {
        $this->user = User::whereId(Auth::user()->id)->first();
    }

    public function render()
    {
        return view('livewire.user.user-orders')->layout('layouts.user');
    }
}
