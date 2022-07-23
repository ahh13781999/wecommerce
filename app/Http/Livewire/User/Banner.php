<?php

namespace App\Http\Livewire\User;

use App\Models\HomeSlider;
use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        return view('livewire.user.banner',
        ['banner' => HomeSlider::inRandomOrder()->first()]
        )->layout('layouts.user');
    }
}
