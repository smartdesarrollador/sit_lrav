<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input ;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Paginator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BuscadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $conn=DB::connection("mysql");

        if(isset($_GET["buscar"])){
            $buscar = htmlspecialchars(Input::get("buscar"));
            $paginacion=$conn
                       ->table("directorio")
                       ->where("titulo","LIKE",'%'.$buscar.'%')
                       ->orwhere("descripcion","LIKE",'%'.$buscar.'%')
                       ->paginate(2);
        }else{
            $paginacion=$conn->table("directorio")->paginate(2);
        }

        

        return View('buscador.index',array("paginacion"=>$paginacion));
    }

    
}
