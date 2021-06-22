<?php

namespace App\Http\Livewire\Admin;

use App\Models\market;
use Livewire\Component;

class AdminEditMarketComponent extends Component
{
    public $market_id;
    public $market_name;
    public $market_address;

    public function mount($id)
    {
        $this->market_id = $id;
        $market = market::where('id', $id)->first();
        $this->market_name = $market->market_name;
        $this->market_address = $market->market_address;
    }

    public function updateMarket()
    {
        $market = market::find($this->market_id);
        $market->market_name = $this->market_name;
        $market->market_address = $this->market_address;
        $market->save();
        session()->flash('Success_message', 'Market added successfully');
        return redirect()->route('admin.market');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-market-component')->layout('layouts.adminDashboardBase');
    }
}
