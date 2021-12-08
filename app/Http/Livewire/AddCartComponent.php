<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class AddCartComponent extends Component
{
    
    public $products_cart;
    protected $listeners = ['addToCart'];

    public function render()
    {
        if(Auth::user()){
            $user = Auth::user();
            $this->products_cart = Cart::where('user_iduser','=',$user->id)->get();
        }
        return view('livewire.add-cart-component', ['products_cart' => $this->products_cart]);
    }

    public function addToCart($product_id)
    {
        $user = Auth::user();
        $product = Product::find($product_id);
        $cart_find = Cart::where('user_iduser','=',$user->id)->where("product_idproduct","=", $product_id)->first();
        if(!empty($cart_find)){
            $cart_find->product_count ++;
            $cart_find->save();
            $cart_find->price_unit = $product->price;
            $cart_find->price_total = $product->price * $cart_find->product_count;
            $cart_find->save();
        }else{
            $cart = new Cart();
            $cart->product_idproduct = $product_id;
            $cart->product_count = 1;
            $cart->price_unit = $product->price;
            $cart->price_total = $product->price;
            $cart->user_iduser = $user->id;
            $cart->save();
        }
        $this->render();
    }

    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }

    public function descreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message', 'Item has been removed');
    }

    public function destroyAll()
    {
        Cart::destroy();
    }
}
