<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Payment;

use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Http;
use  Illuminate\Http\Request;

class CheckoutComponent extends Component
{
    public $products_cart;

    public function render(Request $request)
    {
        // dd($request->get('payment_id'));
        $payment_id = $request->get('payment_id');
        // $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id"."?access_token=APP_USR-3315505964096839-120915-151f8b343aacb17ea86d0df1a35ee37c-1035959326");
        // $response = json_decode($response);
        // $total_pago = $response->transaction_details->net_received_amount;
        // $payment = new Payment();
        // $payment->payment_id = $payment_id;
        // $payment->total = $total_pago;
        // $payment->
        // dd($response->transaction_details->net_received_amount);
        if(Auth::user()){
            $user = Auth::user();
            $this->products_cart = Cart::where('user_iduser','=',$user->id)->get();
            foreach($this->products_cart as $prod){
                $producto = $prod->product;
                //agregarPago
                $payment = new Payment();
                $payment->payment_id = $payment_id;
                $payment->total = $producto->price - round(($producto->price*0.0399+1)*1.18,2,PHP_ROUND_HALF_DOWN);
                $payment->payment_user_seller = $producto->user->id;
                $payment->payment_user_buyer = $user->id;
                $payment->save();
                //actualizar
                $producto->user_iduser_buyer = $user->id;
                $producto->state="No Disponible";
                $producto->save();
                //Eliminar del carrito
                $prod->delete();
            }
            $this->products_cart = Cart::where('user_iduser','=',$user->id)->get();
        }
        return view('livewire.cart-component', ['products_cart' => $this->products_cart])->layout('layouts.base');
    }
}
