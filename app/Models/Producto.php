<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table  = 'productos';

    protected $fillable = [
        'id_tipo_producto',
        'nombre_disenio_producto',
        'color_producto',
        'foto_producto',
        'precio_producto',
        'stock',
    ];

    public function tipoproductos(){
        return $this->belongsTo('App\Model\Tipoproducto');
    }

    public function promociones(){
        return $this->hasOne('App\Model\Producto');
    }
}
