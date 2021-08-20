<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedidos;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedidos::create([
            'user_id' => 1,
            'total' => 10
        ]);
    }
}
