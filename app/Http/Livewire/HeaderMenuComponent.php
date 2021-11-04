<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeaderMenuComponent extends Component
{
    public function render()
    {
        $categories = Category::whereNull("category_idcategory")->get();
        return view('livewire.header-menu-component', ['categories' => $categories]);
    }
}
