<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = ['nombre'];

   

    public function usuarios(){
        return $this->belongsToMany('\App\Models\User','categorias_productos', 'categoria_id')
            ->withPivot('producto_id');
    }
    
    public function productos(){
        return $this->belongsToMany('\App\Models\Productos','categorias_productos', 'categoria_id', 'producto_id')
            ->withPivot('user_id'); 
    }
}
