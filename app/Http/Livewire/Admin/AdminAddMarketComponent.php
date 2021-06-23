<?php

namespace App\Http\Livewire\Admin;

use App\Models\market;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddMarketComponent extends Component
{
    use WithFileUploads;
    public $market_name;
    public $market_address;
    public $market_image;

    public function addMarket()
    {
        $addmarket = new market();
        $addmarket->market_name = $this->market_name;
        $addmarket->market_address = $this->market_address;
        $imageName = Carbon::now()->timestamp . '.' . $this->market_image->extension();
        $this->market_image->storeAs('market/', $imageName);
        $addmarket->market_image = $imageName;
        $addmarket->save();
        session()->flash('Success_message', 'Market added successfully');
        return redirect()->route('admin.market');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-market-component')->layout('layouts.adminDashboardBase');
    }
}
