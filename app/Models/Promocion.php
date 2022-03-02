<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;

    protected $table = 'promociones';

    protected $fillable = [
        'id_producto',
        'nombre_promocion',
        'descripcion_promocion',
        'precio_promocion',
    ];

    public function productos(){
        return $this->belongsTo('App\Model\Producto');
    }
}
