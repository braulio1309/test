<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol_id',
        'id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol(){
        return $this->belongsTo('App\Models\Roles');
    }

    public function productos(){
        return $this->belongsToMany(Productos::class,'categorias_productos', 'producto_id','categoria_id')
           ->withPivot('categoria_id');
    }
    public function categorias(){
        return $this->belongsToMany(Categorias::class ,'categorias_productos', 'producto_id','categoria_id')
            ->withPivot('producto_id'); 
    }

    
}
