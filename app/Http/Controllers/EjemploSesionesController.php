<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sesiones;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EjemploSesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear_sesion()
    {
        //
        session(['key' => 'hola']);

        return view('sesiones.crear_sesion');
    }

    public function validar_sesion()
    {
        //


        return view('sesiones.validar_sesion');
    }

    public function eliminar_sesion()
    {
        //
        \Session::forget('key');

        return view('sesiones.eliminar_sesion');
    }
    
    public function recuperar_sesion()
    {
        //
        

        return view('sesiones.recuperar_sesion');
    }
    
}
