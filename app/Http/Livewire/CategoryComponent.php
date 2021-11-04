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
        $categories = Category::whereNull("category_idcategory")->get();
        foreach($categories as $category){
            $sub_category = Category::where("category_idcategory", '=', $category->id )->get();
            $category->sub_category = $sub_category;
        }
        // dd($categories);
        $products = Product::all();
        return view('livewire.category-component', [
            'products' => $products,
            'categories' => $categories
        ])->layout('layouts.base');
    }


}
