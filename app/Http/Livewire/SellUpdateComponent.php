<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SellUpdateComponent extends Component
{
    use WithFileUploads;
    public $productId;
    public $product;
    public $name;
    public $brand;
    public $brandId;
    public $size;
    public $category;
    public $price;
    public $state;
    public $image;

    protected $rules = [
        'name'    => 'required|min:2',
        'brand'   => 'required',
        'size'    => 'required',
        'category'=> 'required',
        'price'   => 'required',
        'state'   => 'required',
    ];
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount( $id )
    {
        $this->productId = $id;
        $user = Auth::user();
        $this->product = Product::where([['user_iduser_seller',$user->id],
            ['id',$this->productId]])->first();

        if (!is_null($this->product)) {
            $this->name = $this->product->name;
            $this->price = $this->product->price;
        }
    }

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $sizes = Size::all();

        return view('livewire.sell-update-component',
            ['categories'=>$categories,
                'brands' => $brands,
                'sizes' => $sizes,
                'product' => $this->product])->layout('layouts.base');
    }
    public function submitFormSellUpdate ()
    {
        $this->validate();
        $product = Product::find($this->productId);
        $product->name = $this->name;
        $product->price = $this->price;
        $product->state = $this->state;
        $product->category_idcategory = $this->category;
        $product->size_idsize = $this->size;
        $product->brand_idbrand = $this->brand;
        if ($this->image){
            $product->image = $this->image->store("public/images_producto");
            $product->image = str_replace("public/", "", $product->image);
        }
        $product->update();
        return redirect()->route('category');
    }
}
