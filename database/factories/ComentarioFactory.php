<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blog_id' => function() {
                return Blog::all()->random();
            },
            'autor' => $this->faker->name,
            'comentario' => $this->faker->sentence,
            'voto' => $this->faker->numberBetween(0,1)
        ];
    }
}
