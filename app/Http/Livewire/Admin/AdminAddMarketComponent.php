<?php

namespace App\Http\Livewire\Admin;

use App\Models\market;
use Livewire\Component;

class AdminAddMarketComponent extends Component
{
    public $market_name;
    public $market_address;

    public function addMarket()
    {
        $addmarket = new market();
        $addmarket->market_name = $this->market_name;
        $addmarket->market_address = $this->market_address;
        $addmarket->save();
        session()->flash('Success_message', 'Market added successfully');
        return redirect()->route('admin.market');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-market-component')->layout('layouts.adminDashboardBase');
    }
}
