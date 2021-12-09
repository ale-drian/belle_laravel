<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug = '1')
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::find($this->slug);
        return view('livewire.details-component', [
            'product' => $product,
        ])->layout('layouts.base');
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');

        return redirect()->route('product.cart');
    }

    public function addToCartDetail ($product_id){
        $this->emit('addToCart', $product_id);
    }
}
