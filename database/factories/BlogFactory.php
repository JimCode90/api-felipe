<?php

namespace Database\Factories;

use App\Models\CategoriaBlog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function() {
                return User::all()->random();
            },
            'categoria_id' => function(){
                return CategoriaBlog::all()->random();
            },
            'titulo' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'image' => env('app_url').'/img/blogs/'.rand(1,3).'.jpg',
            'contenido' => $this->faker->paragraph(3),
            'likes' => rand(1,30)
        ];
    }
}
