<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoria_id' => function(){
                return Categoria::all()->random();
            },
            'nombre' => $this->faker->sentence(1),
            'precio' => $this->faker->randomFloat(2, 10, 20),
            'cantidad' => rand(1,20),
            'kilos' => $this->faker->randomFloat(2,1, 20),
            'imagen_table' => env('APP_URL'). '/img/productos/table/'.rand(1,3).'.jpg',
            'imagen' => env('APP_URL'). '/img/productos/'.rand(1,12).'.jpg'
        ];
    }
}
