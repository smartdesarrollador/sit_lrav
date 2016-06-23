<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EjemplosEloquentORM as EORM;
use App\Tablacurso as Curso;
use App\Tablaclase as Clase;


class EjemplosEloquentORMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function scope(){

       $nopopular = EORM::nopopular()->get();

       dd($nopopular);

    }

    public function scope_con_parametro(){
          
          $nombres = EORM::nombrescon('r')->get();

           dd($nombres);
    }

    public function insertar(){
        $user = new EORM;

        $user->nombre = 'seli';
        $user->apellido = "NuevoApellido";
        $user->pais = "argentina";
        $user->email = "email@ejemplo.com";
        $user->descripcion = "nueva descripcion";
        $user->telefono = 12341234;
        $user->votacion = 200;


        $user->save();

        return "se guardo con exito";
    }

    public function actualizar(){
        $user = EORM::find(1);

        $user->nombre = 'nuevo nombre';

        $user->save();

        return "se actualizo con exito";
    }

    public function eliminar(){
         $user = EORM::find(1);

         $user->delete();

         return "la fila fue eliminada";
    }

    public function accesor(){
        $user = EORM::find(52);

        return $user->nombre;
    }

    public function uno_a_muchos(){
       $curso = Clase::find(2)->tablacurso()->where('nombre','=','trigonometria')->get();

       dd($curso);
    }

    public function muchos_a_uno(){
       $clase = Curso::find(2)->tablaclase;
       $valor = $clase->nombreclase;

       dd($valor);
    }
}
