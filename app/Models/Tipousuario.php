<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    use HasFactory;

    protected $table = 'tipo_usuarios';

    protected $fillable = [
        'tipo_usuario',
    ];

    //Relacion 1 a 1
    public function users(){
        $this->hasOne('App\Model\User');
    }
}
