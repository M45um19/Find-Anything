<?php

namespace App\Http\Livewire\Admin;

use App\Models\market;
use Livewire\Component;

class AdminMarketComponent extends Component
{
    public function deleteMarket($id)
    {
        $market = market::find($id);
        $market->delete();
        session()->flash('Success_message', 'Market deleted successfully');
        return redirect()->route('admin.market');
    }
    public function render()
    {
        $markets = market::get();
        return view('livewire.admin.admin-market-component', ['markets' => $markets])->layout('layouts.adminDashboardBase');
    }
}
