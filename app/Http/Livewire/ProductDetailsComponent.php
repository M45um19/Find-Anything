<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Shop;
use Livewire\Component;

class ProductDetailsComponent extends Component
{
    public $product_id;
    public $shop_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $shop = Product::find($product_id);
        $this->shop_id = $shop->shop_id;
    }
    public function render()
    {
        $product = Product::find($this->product_id);
        $shop = Shop::find($this->shop_id);
        return view('livewire.product-details-component', ['product' => $product, 'shop' => $shop])->layout('layouts.base');
    }
}
