<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias_productos extends Model
{
    use HasFactory;

    protected $table = 'categorias_productos';

    protected $fillable = ['producto_id', 'categoria_id', 'user_id'];


    /*public function Productos_categoria() {
        return $this->belongsToMany('App\Models\Productos')->withPivot('categoria_id');
    }

    public function Categorias_producto() {
        return $this->belongsToMany('App\Models\Categorias')->withPivot('producto_id');
    }

    public function Productos() {
        return $this->belongsToMany('App\Models\Productos');
    }*/

}
