<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias_productos;
use App\Models\Categorias;

use App\Models\Pedidos;
use App\Models\Lineas_pedidos;
use App\Models\Productos;
use App\Models\User;


class UserController extends Controller
{
    public function prueba(){
        $user = Pedidos::find(1)->usuarios()->get();
       
        return $user;
    }

    public function api(){

    }

    
}
