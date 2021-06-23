<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
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
        $products = Product::where('product_name', 'like', '%' .  $this->search_value . '%')
            ->orWhere('product_description', 'like', '%' .  $this->search_value . '%')
            ->get();
        return view('livewire.user.user-products', ['products' => $products])->layout('layouts.userDashboardBase');;
    }
}
