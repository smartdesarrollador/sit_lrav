<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GraficoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        
$users = DB::table('grafico')->get();

        $datos=array(
                    'uno'=>'200',
                    'dos'=>'40',
                    'tres'=>'30',
                    'cuatro'=>'70',
                    'cinco'=>'20',
                    'seis'=>'80',
                    'siete'=>'50',
                    'ocho'=>'70',
                    'nueve'=>'20',
                    'diez'=>'10',
                    'once'=>'40',
                    'doce'=>'20'

            );

//dd($datos);

        return view("grafico.index",['users' => $users])->with($datos);

        //return view("grafico.index")->with($datos);
    }

    
}
