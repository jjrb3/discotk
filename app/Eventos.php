<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    public $timestamps = false;
    protected $table = "eventos";

    public static function Consultar($buscar) {
        try {
            return Eventos::where('estado','1')
                ->whereRaw("
                ( 
                    titulo like '%$buscar%'
                OR valor like '%$buscar%'
                OR fecha like '%$buscar%')"
                )
                ->get();
        } catch (\Exception $e) {
            return [];
        }
    }
}
