<?php

namespace App\Http\Livewire\Admin;

use App\Models\market;
use Livewire\Component;

class AdminMarketComponent extends Component
{
    public $market_image;

    public function deleteMarket($id)
    {
        $market = market::find($id);
        $this->market_image = $market->market_image;
        unlink(public_path("asset/image/market/" . $this->market_image));
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
