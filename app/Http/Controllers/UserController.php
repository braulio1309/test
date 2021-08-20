<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias_productos;
use App\Models\Categorias;
use App\Models\Pedidos;
use App\Models\Lineas_pedidos;
use App\Models\Productos;
use App\Models\User;
use App\Mail\colas;
use Mail;

class UserController extends Controller
{
    //Probamos el ORM
    public function prueba(){
        $user = Pedidos::find(1)->usuarios()->get();
       

        return response()->json($user, 200);
        
    }
    
    
    //Extraemos la data de todos los pokemones
    public function api(\GuzzleHttp\Client $client){
        $response = $client->request('GET', "pokemon?limit=50&offset=100");

        $data = json_decode($response->getBody());
        
        $id_pokemon = rand(1,100);
        $pokemon = $client->request('GET', "pokemon/$id_pokemon");

        $pokedata = json_decode($pokemon->getBody());

        Mail::to('brauliozapataweb@gmail.com')->queue(new colas($pokedata));

        return $data;


    }

    
}
