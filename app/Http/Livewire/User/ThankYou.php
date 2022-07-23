<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ThankYou extends Component
{
    public function render()
    {
        return view('livewire.user.thank-you')->layout('layouts.user');
    }
}
