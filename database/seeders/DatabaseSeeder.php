<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Size;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
   
     

    public function run()
    {
        
        $categories = ["Ropa Mujer", "Ropa Hombre", "Niños","Bebe", "Joyeria", "Zapatos", "Carteras", "Accesorios"];
        $categories_0 = ["Polos", "Chompas", "Blusas", "Vestidos", "Pantalones"]; 
        $categories_1 = ["Polos", "Camisas", "Pantalones"]; 
        $categories_2 = ["Polos", "Chompas", "Pantalones"]; 
        $categories_3 = ["Juguetes", "Conjuntos"]; 
        $categories_4 = ["Aretes", "Collares", "Pulceras"]; 
        $categories_5 = ["Zapatillas", "Botines", "Botas"]; 
        $categories_7 = ["Correas", "Monturas"]; 
        function subcategories($categories, $category_id){   
            foreach( $categories as $c){
                $category = new Category();
                $category->name     = $c;
                $category->description    = $c;
                $category->category_idcategory = $category_id;
                $category->save();
            }
        }
        foreach( $categories as $i=>$c){
            $category = new Category();
            $category->name     = $c;
            $category->description    = $c;
            $category->save();
            switch ($i) {
                case 0:
                    subcategories($categories_0,$category->id);
                    break;
                case 1:
                    subcategories($categories_1,$category->id);
                    break;
                case 2:
                    subcategories($categories_2,$category->id);
                    break;
                case 3:
                    subcategories($categories_3,$category->id);
                    break;
                case 4:
                    subcategories($categories_4,$category->id);
                    break;
                case 5:
                    subcategories($categories_5,$category->id);
                    break;
                case 7:
                    subcategories($categories_7,$category->id);
                    break;
            }
        }
        $brands = ["Otro", "Nike", "Adidas", "Levis", "Zara", "H&M", "Lacoste", "Guess", "Mango", "Forever 21"];
        $descripions = ["Otro", "Nike", "Adidas", "Levis", "Zara", "H&M", "Lacoste", "Guess", "Mango", "Forever 21"];
        foreach( $brands as $i=>$b){
            $brand = new Brand();
            $brand->name     = $b;
            $brand->description    = $descripions[$i];
            $brand->save();
        };

        
        $sizes = ["XS", "S", "M", "L", "XL", "XXL", "37", "38", "39", "35"];
        $descripion_sizes = ["XS", "S", "M", "L", "XL", "XXL", "37", "38", "39", "35"];
        foreach( $sizes as $i=>$s){
            $size = new Size();
            $size->name     = $s;
            $size->description    = $descripion_sizes[$i];
            $size->save();
        };
        
        
        // \App\Models\User::factory(10)->create();
        // \App\Models\Category::factory(6)->create();
        // \App\Models\Product::factory(22)->create();
        
    }
}
