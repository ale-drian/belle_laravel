<?php

namespace App\Http\Livewire;

use App\Models\Brand;
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
    public $order;

    public function mount( $category_id = '' )
    {
        if($category_id == ''){
            $this->products =  Product::all();
        }else{
            $category = Category::find( $category_id );
            if($category->category_idcategory == null){
                $sub_category = Category::where("category_idcategory", '=', $category->id )->get();
                $this->products = Product::where('category_idcategory',$category_id);
                foreach($sub_category as $sub){
                    $this->products = $this->products->orWhere('category_idcategory', $sub->id);
                }
                $this->products = $this->products->get();
            }else{
                $this->products = Product::where('category_idcategory',$category_id)->get();
            }
            // dd($this->products);
        }

        
    }

    public function render()
    {
        $sizes = Size::all();
        $brands = Brand::all();
        $categories = Category::whereNull("category_idcategory")->get();
        foreach($categories as $category){
            $sub_category = Category::where("category_idcategory", '=', $category->id )->get();
            $category->sub_category = $sub_category;
        }

        return view('livewire.category-component', [
            'products' => $this->products,
            'categories' => $categories,
            'sizes' => $sizes,
            'brands' => $brands
        ])->layout('layouts.base');
    }

    public function applyPrice()
    {
        $this->products = Product::where([
          ['price','>=',$this->priceMin],
          ['price','<=',$this->priceMax]
        ])->get();
    }

    public function applySize ( $size )
    {
        $this->products = Product::where('size_idsize',$size['id'])
            ->get();
    }
    public function applyBrand ( $brand )
    {
        $this->products = Product::where('brand_idbrand', $brand['id'])
            ->get();
    }
    public function applyOrd ()
    {
        switch ($this->order)
        {
            case 'ascName':
                $this->products = Product::orderBy('name','asc')->get();
                break;
            case 'descName':
                $this->products = Product::orderBy('name','desc')->get();
                break;
            case 'ascPrice':
                $this->products = Product::orderBy('price','asc')->get();
                break;
            case 'descPrice':
                $this->products = Product::orderBy('price','desc')->get();
                break;
            case 'ascDate':
                $this->products = Product::orderBy('created_at','desc')->get();
                break;
            case 'descDate':
                $this->products = Product::orderBy('created_at','asc')->get();
                break;
        }

    }

}
