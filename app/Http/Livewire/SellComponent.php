<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Size;


class SellComponent extends Component
{

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('livewire.sell-component',
            ['categories'=>$categories,
                'brands' => $brands ]
        )->layout('layouts.base');
    }
}
