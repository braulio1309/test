<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Productos;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::create([
            'nombre' => 'Camisa',
            'precio' => 10
        ]);
        Productos::create([
            'nombre' => 'Pantalón',
            'precio' => 10
        ]);
        
        Productos::create([
            'nombre' => 'Mesa',
            'precio' => 10
        ]);
        
        Productos::create([
            'nombre' => 'Computadora',
            'precio' => 10
        ]);
    }
}
