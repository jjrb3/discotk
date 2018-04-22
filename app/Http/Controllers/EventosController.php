<?php
/**
 * Created by PhpStorm.
 * User: Jose Barrios
 * Date: 2018/04/22
 * Time: 11:23 AM
 */

namespace App\Http\Controllers;


use App\Eventos;
use Illuminate\Http\Request;

class EventosController
{
    public function Listado(Request $request) {

        return view('lista',[
            'eventos' => Eventos::Consultar($request->get('busqueda'))
        ]);
    }

    public function DetalleUsuario(Request $request) {

        return view('detalle',[
            'evento' => Eventos::find($request->get('id'))
        ]);
    }
}