<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = ['total', 'user_id'];

   //1:n
    public function lineas()
    {
        return $this->hasMany('App\Models\Lineas_pedidos', 'pedido_id');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }


}
