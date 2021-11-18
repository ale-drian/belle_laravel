<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class CategoryComponent extends Component
{

    public $products;
    public $priceMin;
    public $priceMax;

    public function mount( $category_id = '' )
    {
        $this->products = $category_id == '' ? Product::all()
        :  Product::where('category_idcategory',$category_id)->get();
    }

    public function render()
    {
        $categories = Category::whereNull("category_idcategory")->get();
        foreach($categories as $category){
            $sub_category = Category::where("category_idcategory", '=', $category->id )->get();
            $category->sub_category = $sub_category;
        }

        return view('livewire.category-component', [
            'products' => $this->products,
            'categories' => $categories
        ])->layout('layouts.base');
    }

    public function applyPrice()
    {
        $this->products = Product::where([
          ['price','>=',$this->priceMin],
          ['price','<=',$this->priceMax]
        ])->get();
    }

}
