<?php

namespace App\Http\Livewire\User;

use App\Models\market;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserMarketSelect extends Component
{


    public function marketSelect()
    {
    }


    public function render()
    {
        $shops = Shop::where('user_id', Auth::user()->id);
        $markets = market::get();
        return view('livewire.user.user-market-select', ['markets' => $markets, 'shops' => $shops])->layout('layouts.userDashboardBase');
    }
}
