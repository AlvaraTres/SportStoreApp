<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoproducto extends Model
{
    use HasFactory;

    protected $table = 'tipo_productos';

    protected $fillable = [
        'nombre_tipo',
    ];

    //Relacion 1 a 1
    public function productos(){
        $this->hasOne('App\Model\Producto');
    }
}
