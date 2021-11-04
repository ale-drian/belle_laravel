<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;
    protected $categories = ["Ropa Mujer", "Ropa Hombre", "Niños","Bebe", "Joyeria", "Zapatos", "Carteras", "Accesorios"];
    protected $categories_0 = ["Polos", "Chompas", "Blusas", "Vestidos", "Pantalones"]; 
    protected $categories_1 = ["Polos", "Camisas", "Pantalones"]; 
    protected $categories_2 = ["Polos", "Chompas", "Pantalones"]; 
    protected $categories_3 = ["Juguetes", "Conjuntos"]; 
    protected $categories_4 = ["Aretes", "Collares", "Pulceras"]; 
    protected $categories_5 = ["Zapatillas", "Botines", "Botas"]; 
    protected $categories_6 = ["Correas", "Monturas"]; 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name = $this->faker->unique()->words($nb = 2, $asText = true);
        $slug = Str::slug($category_name);

        return [
            'name' => $category_name,
            'slug' => $slug
        ];
    }
}
