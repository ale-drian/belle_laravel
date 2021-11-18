<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Product;

class ProfileUserComponent extends Component
{
    public $products;

    public function render()
    {
        $user = auth()->user();
        $this->products = Product::where('user_iduser_seller',$user->id)->get();
        return view('livewire.profile-user-component',[
            'products' => $this->products
        ])->layout('layouts.base');
    }
}
