<?php

namespace App\Http\Livewire\User;

use App\Models\market;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserAddShopDetails extends Component
{

    public $m_id;
    public $m_name;
    public $m_add;

    public $s_name;
    public $s_add;
    public $s_image;
    public $m_number;
    public $s_des;


    public function mount($id)
    {
        //$market_id = $id;
        //dd($market);
        $market = market::where('id', $id)->first();
        $this->m_id = $market->id;
        $this->m_name = $market->market_name;
        $this->m_add = $market->market_address;
    }

    public function addShopDetails()
    {

        $userId = Auth::user()->id;

        $addShop = new Shop();
        $addShop->user_id = $userId;
        $addShop->market_id = $this->m_id;
        $addShop->market_name = $this->m_name;
        $addShop->market_address = $this->m_add;

        $addShop->shop_name = $this->s_name;
        $addShop->shop_address = $this->s_add;
        $addShop->shop_image = $this->s_image;
        $addShop->mobile_number = $this->m_number;
        $addShop->shop_description = $this->s_des;
        $addShop->save();
        session()->flash('Success_message', 'Shop added successfully');

        //dd('success');

        return redirect()->route('user.Shop');
    }

    public function render()
    {
        return view('livewire.user.user-add-shop-details')->layout('layouts.userDashboardBase');
    }
}
