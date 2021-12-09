<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Product;

class ProfileBuyerProductsComponent extends Component
{
    public $products;
    public $order;

    public function mount()
    {
        $user = auth()->user();
        $this->products = Product::where('user_iduser_buyer',$user->id)->get();
    }

    public function render()
    {
        return view('livewire.profile-buyer-products-component',
            [ 'products' => $this->products ]
        )->layout('layouts.base');
    }
    public function applyOrd ()
    {
        $user = auth()->user();
        switch ($this->order)
        {
            case 'ascName':
                $this->products = Product::where('user_iduser_seller',$user->id)
                    ->orderBy('name','asc')
                    ->get();
                break;
            case 'descName':
                $this->products = Product::where('user_iduser_seller',$user->id)
                    ->orderBy('name','desc')
                    ->get();
                break;
            case 'ascPrice':
                $this->products = Product::where('user_iduser_seller',$user->id)
                    ->orderBy('price','asc')
                    ->get();
                break;
            case 'descPrice':
                $this->products = Product::where('user_iduser_seller',$user->id)
                    ->orderBy('price','desc')
                    ->get();
                break;
            case 'ascDate':
                $this->products = Product::where('user_iduser_seller',$user->id)
                    ->orderBy('created_at','desc')
                    ->get();
                break;
            case 'descDate':
                $this->products = Product::where('user_iduser_seller',$user->id)
                    ->orderBy('created_at','asc')
                    ->get();
                break;
        }
    }
}
