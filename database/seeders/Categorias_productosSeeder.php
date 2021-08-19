<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorias_productos;

class Categorias_productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias_productos::create([
            'producto_id' => 1,
            'categoria_id' => 1,
            'user_id' => 1
        ]);

        Categorias_productos::create([
            'producto_id' => 2,
            'categoria_id' => 2,
            'user_id' => 1
        ]);

        Categorias_productos::create([
            'producto_id' => 2,
            'categoria_id' => 1,
            'user_id' => 1
        ]);

        Categorias_productos::create([
            'producto_id' => 1,
            'categoria_id' => 2,
            'user_id' => 1
        ]);
    }
}
