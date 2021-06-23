<?php

namespace App\Http\Livewire\User;

use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserShopComponent extends Component
{
    public function render()
    {
        $shops = Shop::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.user-shop-component', ['shops' => $shops])->layout('layouts.userDashboardBase');
    }
}
