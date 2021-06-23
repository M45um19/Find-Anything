<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\Component;

class UserProductEdit extends Component
{
    use WithFileUploads;

    public $p_catagory;
    public $p_name;
    public $p_image;
    public $old_image;
    public $p_sprize;
    public $p_rprize;
    public $p_able;
    public $p_des;

    public $p_id;

    public function mount($id)
    {
        $this->p_id = $id;
        $productInfo = Product::where('id', $id)->first();
        $this->p_catagory = $productInfo->product_type;
        $this->p_name = $productInfo->product_name;
        $this->old_image  = $productInfo->product_image;
        $this->p_sprize = $productInfo->product_sale_prize;
        $this->p_rprize = $productInfo->product_regular_prize;
        $this->p_able = $productInfo->product_availability;
        $this->p_des = $productInfo->product_description;
    }

    public function editProductDetails()
    {
        $update_p = Product::where('id', $this->p_id)->first();
        $update_p->product_type = $this->p_catagory;
        $update_p->product_name = $this->p_name;
        $update_p->product_sale_prize = $this->p_sprize;
        $update_p->product_regular_prize = $this->p_rprize;
        $update_p->product_availability = $this->p_able;
        $update_p->product_description = $this->p_des;


        if ($this->p_image) {
            $imageName = Carbon::now()->timestamp . '.' . $this->p_image->extension();
            $this->p_image->storeAs('product/', $imageName);
            $update_p->product_image = $imageName;
            unlink(public_path("asset/image/product/" . $this->old_image));
        }

        $update_p->save();

        session()->flash('Success_message', 'Product Edited successfully');
        return redirect()->route('user.product');
    }

    public function render()
    {
        return view('livewire.user.user-product-edit')->layout('layouts.userDashboardBase');
    }
}
