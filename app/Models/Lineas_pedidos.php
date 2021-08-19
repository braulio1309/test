<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lineas_pedidos extends Model
{
    use HasFactory;

    protected $table = 'lineas_pedidos';

    protected $fillable = ['producto_id', 'pedido_id'];

    public function pedidos()
    {
        return $this->belongsTo('App\Models\Pedidos');
    }

    public function Productos()
    {
        return $this->belongsTo('App\Models\Productos');
    }

}
