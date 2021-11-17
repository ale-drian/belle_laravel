<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Size;
use Livewire\WithFileUploads;


class SellComponent extends Component
{
    use WithFileUploads;
    
    public $name;
    public $brand;
    public $size;
    public $category;
    public $price;
    public $state;
    public $image; // Falta almacenamiento de imagenes

    protected $rules = [
      'name'    => 'required|min:2',
      'brand'   => 'required',
      'size'    => 'required',
      'category'=> 'required',
      'price'   => 'required',
      'state'   => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitFormSell()
    {
         $this->validate();
        $this->image->storage("public/images_producto");
        $user = Auth::user();
        $product = new Product();
        $product->name = $this->name;
        $product->price = $this->price;
        $product->state = $this->state;
        $product->user_iduser_seller = $user->id;
        $product->category_idcategory = $this->category;
        $product->size_idsize = $this->size;
        $product->brand_idbrand = $this->brand;
        $product->save();

        $this->cleanData();
    }

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $sizes = Size::all();

        return view('livewire.sell-component',
            ['categories'=>$categories,
                'brands' => $brands,
                'sizes' => $sizes]
        )->layout('layouts.base');
    }

    public function cleanData()
    {
        $this->reset([
            'name','brand',
            'size','category',
            'price','state'
        ]);
    }
}
