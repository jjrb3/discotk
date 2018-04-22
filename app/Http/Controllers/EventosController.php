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

    public function Detalle(Request $request) {

        return view('ver-detalle',[
            'evento' => Eventos::find($request->get('id'))
        ]);
    }

    public function AdminConsultarTodo(Request $request) {

        if (!$request->session()->get('ingreso')) {
            return redirect('inicio');
        }

        return view('administrador',[
            'eventos' => Eventos::Consultar($request->get('busqueda')),
            'usuario' => $request->session()->get('usuario')
        ]);
    }

    public function AdminCrearEditar(Request $request) {

        if (!$request->session()->get('ingreso')) {
            return redirect('inicio');
        }

        $id     = $request->get('id');

        if ($id) {
            $evento = Eventos::find($id);
        }
        else {
            $evento = new Eventos();
        }

        return view('crear-editar',[
            'evento' => $evento,
            'id' => $id,
            'mensaje' => ''
        ]);
    }

    public function AdminGuardarCrearEditar(Request $request) {

        if (!$request->session()->get('ingreso')) {
            return redirect('inicio');
        }

        $id = $request->get('id');
        $nombreArchivo = $this->SubirImagen($request);

        if ($id) {
            $evento = Eventos::find($request->get('id'));
        }
        else {
            $evento = new Eventos();
        }

        if ($nombreArchivo) {
            $evento->imagen = $nombreArchivo;
        }

        $evento->titulo = $request->get('titulo');
        $evento->breve_descripcion = $request->get('breve_descripcion');
        $evento->calificacion = $request->get('calificacion');
        $evento->valor = $request->get('valor');
        $evento->facebook = $request->get('facebook');
        $evento->instagram = $request->get('instagram');
        $evento->fecha = $request->get('fecha');
        $evento->ingreso = $request->get('ingreso');
        $evento->salida = $request->get('salida');
        $evento->direccion = $request->get('direccion');
        $evento->descripcion = $request->get('descripcion');
        $evento->observaciones = $request->get('observaciones');

        try {

            if ($evento->save()) {
                return redirect('administrador');
            }
            else {
                return view('crear-editar',[
                    'evento' => $evento,
                    'id' => $id,
                    'mensaje' => 'Se encontraron problemas al guardar'
                ]);
            }
        }
        catch (\Exception $e) {
            return view('crear-editar',[
                'evento' => $evento,
                'id' => $id,
                'mensaje' => 'Grave error al guardar: ' . $e->getMessage()
            ]);
        }
    }

    private function SubirImagen($request) {

        $directorio = public_path('resource/');
        $archivo = $request->file('imagen');

        if ($archivo) {

            $nombre = explode('.', $archivo->getClientOriginalName());
            $ext = $nombre[1];
            $nombreArchivo = date("Ymd_his") . ".$ext";

            if ($archivo->move($directorio, $nombreArchivo)) {

                return $nombreArchivo;
            }
            return;
        }

        return;
    }
}