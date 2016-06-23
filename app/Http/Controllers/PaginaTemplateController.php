<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaginaTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        


        return view('pagina_template.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        //
          return view('pagina_template.about');
    }

public function pagina()
    {
        //

            $productos= DB::table('producto')
            ->join('categoria_producto', 'producto.categoria_id', '=', 'categoria_producto.id')
           
            
            ->select( 'producto.prod_nombre','producto.descripcion', 'categoria_producto.nombre')
            ->get();

          return view('pagina_template.pagina',  ['productos' => $productos]);
    }

    public function imagen()
    {
        //
        $productos= DB::table('producto')

            ->join('categoria_producto', 'producto.categoria_id', '=', 'categoria_producto.id')
           
            
            ->select( 'producto.prod_nombre','producto.imagen', 'categoria_producto.nombre')

         
            ->paginate(7);

            


          return view('pagina_template.imagen',  ['productos' => $productos]);
    }
    
}
