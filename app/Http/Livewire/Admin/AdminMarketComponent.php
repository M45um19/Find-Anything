<?php

namespace App\Http\Livewire\Admin;

use App\Models\market;
use Livewire\Component;

class AdminMarketComponent extends Component
{
    public function render()
    {
        $markets = market::get();
        return view('livewire.admin.admin-market-component', ['markets' => $markets])->layout('layouts.adminDashboardBase');
    }
}
