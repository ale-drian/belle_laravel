<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class CheckoutComponent extends Component
{
    public $products_cart;

    public function render()
    {
        if(Auth::user()){
            $user = Auth::user();
            $this->products_cart = Cart::where('user_iduser','=',$user->id)->get();
            foreach($this->products_cart as $prod){
                $producto = $prod->product;
                $producto->user_iduser_buyer = $user->id;
                $producto->state="No Disponible";
                $producto->save();
                $prod->delete();
            }
            $this->products_cart = Cart::where('user_iduser','=',$user->id)->get();

        }
        return view('livewire.cart-component', ['products_cart' => $this->products_cart])->layout('layouts.base');
    }
}
