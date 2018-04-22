<?php
/**
 * Created by PhpStorm.
 * User: Jose Barrios
 * Date: 2018/04/22
 * Time: 11:23 AM
 */

namespace App\Http\Controllers;


use App\Eventos;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController
{
    public function Ingresar(Request $request) {

        $usuario = $request->get('usuario');
        $clave   = $request->get('clave');
        $mensaje = '';

        if ($usuario && $clave) {
            if ($usuario = $this->verificarAcceso($usuario, $clave)) {

                $request->session()->put('ingreso', true);
                $request->session()->put('usuario', $usuario);

                return redirect('administrador');
            }
            else {
                $mensaje = 'El usuario o la contraseña esta errado';
            }
        }

        return view('ingresar',['mensaje' => $mensaje]);
    }

    public function VerificarAcceso($usuario, $clave) {

        $usuario = Usuario::ConsultarPorNombre($usuario);

        if ($usuario && md5($clave) === $usuario->clave) {
            return $usuario->nombre;
        }

        return false;
    }

    public function Salir(Request $request) {

        $request->session()->flush();

        return redirect('inicio');
    }
}