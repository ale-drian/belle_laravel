<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $products_cart;
    public $subtotal = 0;
    public $igv = 0;
    public $total = 0;

    public function render()
    {
        
        if(Auth::user()){
            $user = Auth::user();
            $this->products_cart = Cart::where('user_iduser','=',$user->id)->get();
            // if(count($this->products_cart) > 0){
            //     foreach($this->products_cart as $prod){
            //         $total += $prod->price_unit;
            //     }
            //     $this->subtotal = round($this->total/1.18,2);
            //     $this->igv=$this->total - $this->subtotal;
            // }

        }
        return view('livewire.cart-component', ['products_cart' => $this->products_cart])->layout('layouts.base');
    }

    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }

    public function descreaseQuantity($rowId)
    {
        $product_cart = Cart::find($product_cart_id);
        $product_cart->delete();
        // $this->render();
    }

    public function destroyCart($product_cart_id)
    {
        $product_cart = Cart::find($product_cart_id);
        $product_cart->delete();
        $this->emit('re_render');
        // $this->render();
    }

    public function destroyAll()
    {
        Cart::destroy();
    }
}
