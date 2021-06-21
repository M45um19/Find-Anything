<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserShopComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-shop-component')->layout('layouts.userDashboardBase');
    }
}
