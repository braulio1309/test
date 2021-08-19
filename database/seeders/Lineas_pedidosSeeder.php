<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lineas_pedidos;

class Lineas_pedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lineas_pedidos::create([
            'producto_id' => 1,
            'cantidad' => 10,
            'pedido_id' => 1
        ]);

        Lineas_pedidos::create([
            'producto_id' => 2,
            'cantidad' => 10,
            'pedido_id' => 1
        ]);
    }
}
