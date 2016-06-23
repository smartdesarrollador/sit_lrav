<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $users = DB::table('consultas')
        ->select(['nombre','descripcion' ])
        ->where('edad','<','12')
        ->orderBy('nombre','ASC')
        ->get();

        dd($users);

        return $users;
    }

    public function consulta_basica()
    {
        $users = DB::table('consultas')->get();


        return view('consulta.index', ['users' => $users]);
    }

    public function metodo_add()
    {
        //
         $users = DB::table('consultas')->get();

         dd($users);

        return $users;
    }

     public function metodo_select()
    {
        //
         $users = DB::table('consultas')
        ->select(['nombre','descripcion' ])
        ->get();

        dd($users);

        return $users;
    }

    public function metodo_where()
    {
        //
        $users = DB::table('consultas')
        ->select(['nombre','descripcion' ])
        ->where('nombre','juan')
        ->get();

        dd($users);

        return $users;
    }

     public function metodo_where2()
    {
        //
        $users = DB::table('consultas')
        ->select(['nombre','descripcion' ])
        ->where('nombre','<>','juan') // <> es para que no aparesca esa fila
        ->get();

        dd($users);

        return $users;
    }

    public function metodo_where3()
    {
        //
        $users = DB::table('consultas')
        ->select(['nombre','descripcion' ])
        ->where('edad','<','20')
        ->orderBy('nombre','ASC')
        ->get();

        dd($users);

        return $users;
    }

    public function metodo_orderBy()
    {
        //
        $users = DB::table('consultas')
        ->select(['nombre','descripcion' ])
        ->where('nombre','<>','juan')
        ->orderBy('nombre','ASC')
        ->get();

        dd($users);

        return $users;
    }

    
    
}
