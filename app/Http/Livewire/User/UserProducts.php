<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProducts extends Component
{
    public $search_value;


    public function deleteProduct($pid)
    {
        //dd($pid);
        $del = Product::where('id', $pid)->delete();
        if ($del) {
            session()->flash('Success_message', 'Deleted successfully');
            return redirect()->route('user.product');
        } else {
            session()->flash('warning', 'Delete Failed');
            return redirect()->route('user.product');
        }
    }

    public function render()
    {
        $shops = Shop::where('user_id', Auth::user()->id);
        $products = Product::where('product_name', 'like', '%' .  $this->search_value . '%')
            ->orWhere('product_description', 'like', '%' .  $this->search_value . '%')
            ->get()->where('user_id', Auth::user()->id);
        return view('livewire.user.user-products', ['shops' => $shops, 'products' => $products])->layout('layouts.userDashboardBase');;
    }
}
