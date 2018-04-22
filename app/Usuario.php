<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $table = "usuario";

    public static function ConsultarPorNombre($nombre) {
        try {
            return Usuario::where('nombre',$nombre)->first();
        } catch (\Exception $e) {
            return [];
        }
    }
}
