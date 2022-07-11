<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Categoria;
use App\Models\CategoriaBlog;
use App\Models\Comentario;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         Categoria::factory(10)->create();
         CategoriaBlog::factory(10)->create();
         Blog::factory(12)->create();
         Comentario::factory(20)->create();
         Producto::factory(12)->create();
    }
}
