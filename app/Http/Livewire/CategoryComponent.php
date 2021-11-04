<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class CategoryComponent extends Component
{


    public function render()
    {
        $product = Product::all();

        return view('livewire.category-component')->layout('layouts.base');
    }


}
