<?php

namespace App\Http\Livewire\User;

use App\Models\market;
use Livewire\Component;

class UserMarketSelect extends Component
{


    public function marketSelect()
    {
    }


    public function render()
    {
        $markets = market::get();
        return view('livewire.user.user-market-select', ['markets' => $markets])->layout('layouts.userDashboardBase');
    }
}
