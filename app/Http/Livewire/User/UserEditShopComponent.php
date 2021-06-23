<?php

namespace App\Http\Livewire\User;

use App\Models\Shop;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserEditShopComponent extends Component
{
    use WithFileUploads;
    public $s_name;
    public $s_add;
    public $shop_image;
    public $m_number;
    public $s_des;
    public $new_image;
    public $shop_id;
    public function mount($id)
    {
        $this->shop_id = $id;
        $shop = Shop::where('id', $id)->first();
        $this->s_name = $shop->shop_name;
        $this->s_add = $shop->shop_address;
        $this->shop_image  = $shop->shop_image;
        $this->m_number = $shop->mobile_number;
        $this->s_des = $shop->shop_description;
    }
    public function edtShopDetails()
    {
        $edited_shop = Shop::find($this->shop_id);
        $edited_shop->shop_name = $this->s_name;
        $edited_shop->shop_address = $this->s_add;

        if ($this->new_image) {
            $imageName = Carbon::now()->timestamp . '.' . $this->new_image->extension();
            $this->new_image->storeAs('shop/', $imageName);
            $edited_shop->shop_image = $imageName;
            unlink(public_path("asset/image/shop/" . $this->shop_image));
        }
        $edited_shop->mobile_number = $this->m_number;
        $edited_shop->shop_description = $this->s_des;
        $edited_shop->save();
        session()->flash('Success_message', 'Shop Edited successfully');
        return redirect()->route('user.Shop');
    }
    public function render()
    {
        return view('livewire.user.user-edit-shop-component')->layout('layouts.userDashboardBase');
    }
}
