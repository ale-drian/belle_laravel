<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class AddCartComponent extends Component
{
    
    public $products_cart;
    public $display_block = false;
    protected $listeners = ['addToCart'];

    public function render()
    {
        if(Auth::user()){
            $user = Auth::user();
            $this->products_cart = Cart::where('user_iduser','=',$user->id)->get();
        }
        return view('livewire.add-cart-component', ['products_cart' => $this->products_cart, 'display_block' => $this->display_block]);
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
        $this->display_block = true;
        $this->render();
    }

    public function increaseQuantity($product_cart_id)
    {
        $product_cart = Cart::find($product_cart_id);
        $product_cart->product_count ++;
        $product_cart->save();
        $product_cart->price_total = $product_cart->price_unit * $product_cart->product_count;
        $product_cart->save();
        $this->display_block = true;
        // $this->render();
    }

    public function descreaseQuantity($product_cart_id)
    {
        $product_cart = Cart::find($product_cart_id);
        $product_cart->product_count --;
        $product_cart->save();
        $product_cart->price_total = $product_cart->price_unit * $product_cart->product_count;
        $product_cart->save();
        $this->display_block = true;
        // $this->render();
    }

    public function destroy($product_cart_id)
    {
        $product_cart = Cart::find($product_cart_id);
        $product_cart->delete();
        $this->display_block = true;
        // $this->render();
    }

    public function display_none(){
        $this->display_block = false;
    }

    public function destroyAll()
    {
        Cart::destroy();
    }
}
