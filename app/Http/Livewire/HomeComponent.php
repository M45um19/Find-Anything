<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    public $search_product_name;
    public $search_product_place;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $products = Product::orderBy('created_at', 'DESC')->where('product_name', 'like', '%' .  $this->search_product_name . '%')->where('market_address', 'like', '%' .  $this->search_product_place . '%')->paginate(20);
        return view('livewire.home-component', ['products' => $products])->layout('layouts.base');
    }
}
