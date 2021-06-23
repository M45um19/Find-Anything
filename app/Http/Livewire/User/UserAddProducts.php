<?php

namespace App\Http\Livewire\User;

use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserAddProducts extends Component
{
    use WithFileUploads;

    public $p_catagory;
    public $p_name;
    public $p_image;
    public $p_sprize;
    public $p_rprize;
    public $p_able;
    public $p_des;

    public $u_id;
    public $s_id;
    public $m_name;
    public $m_des;

    public function mount()
    {
        $userId = Auth::user()->id;

        $shopTab = Shop::where('user_id', $userId)->first();

        $this->u_id = $shopTab->user_id;
        $this->s_id = $shopTab->id;
        $this->m_name = $shopTab->market_name;
        $this->m_des = $shopTab->market_address;
    }

    public function addProduct()
    {
        $addProduct = new Product();
        $addProduct->user_id = $this->u_id;
        $addProduct->shop_id = $this->s_id;
        $addProduct->market_name = $this->m_name;
        $addProduct->market_address = $this->m_des;

        $addProduct->product_type = $this->p_catagory;
        $addProduct->product_name = $this->p_name;
        $addProduct->product_sale_prize = $this->p_sprize;
        $addProduct->product_regular_prize = $this->p_rprize;
        $addProduct->product_availability = $this->p_able;
        $addProduct->product_description = $this->p_des;

        $imageName = Carbon::now()->timestamp . '.' . $this->p_image->extension();
        $this->p_image->storeAs('product/', $imageName);
        $addProduct->product_image = $imageName;

        $addProduct->save();
        session()->flash('Success_message', 'Product added successfully');

        return redirect()->route('user.product');
    }


    public function render()
    {
        return view('livewire.user.user-add-products')->layout('layouts.userDashboardBase');
    }
}
