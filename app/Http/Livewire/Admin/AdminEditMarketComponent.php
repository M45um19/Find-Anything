<?php

namespace App\Http\Livewire\Admin;

use App\Models\market;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditMarketComponent extends Component
{
    use WithFileUploads;
    public $market_id;
    public $market_name;
    public $market_address;
    public $market_image;
    public $new_image;
    public $path;

    public function mount($id)
    {
        $this->market_id = $id;
        $market = market::where('id', $id)->first();
        $this->market_name = $market->market_name;
        $this->market_address = $market->market_address;
        $this->market_image = $market->market_image;
    }

    public function updateMarket()
    {
        $market = market::find($this->market_id);
        $market->market_name = $this->market_name;
        $market->market_address = $this->market_address;
        if ($this->new_image) {
            $imageName = Carbon::now()->timestamp . '.' . $this->new_image->extension();
            $this->new_image->storeAs('market/', $imageName);
            $market->market_image = $imageName;
            unlink(public_path("asset/image/market/" . $this->market_image));
        }
        $market->save();
        session()->flash('Success_message', 'Market Edited successfully');
        return redirect()->route('admin.market');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-market-component')->layout('layouts.adminDashboardBase');
    }
}
