<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = ['nombre', 'precio'];

    
    public function usuarios(){
        return $this->belongsToMany(User::class,'categorias_productos', 'producto_id')
            ->withPivot('categoria_id');
    }

    public function categorias(){
        return $this->belongsToMany('App\Models\Categorias','categorias_productos', 'producto_id', 'categoria_id')
            ->withPivot('user_id'); 
    }

}
