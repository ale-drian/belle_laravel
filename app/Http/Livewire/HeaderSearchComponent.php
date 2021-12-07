<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search;
    public $category;

    public function render()
    {
        $categories = Category::whereNull("category_idcategory")->get();
        $productos = Product::where('name','LIKE',strlen($this->search) > 1 ? '%'.$this->search.'%':'')
            ->orWhere([['name','LIKE','%'.$this->search.'%'],['category_idcategory',$this->category]])
            ->get();

        return view('livewire.header-search-component', [
            'categories' => $categories,
            'productos' => $productos
        ]);
    }
}
