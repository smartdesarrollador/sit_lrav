<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AngularBasico;

class AngularHttpController extends Controller
{
        public function __construct(){
        $this->middleware('cors');

        
    }

    public function find(Route $route){
        $this->note = AngularBasico::find($route->getParameter('notes'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $notes = AngularBasico::all();

        return response()->json($notes->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         AngularBasico::create($request->all());
        return response()->json(["mensaje" => "creado correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mostrar = AngularBasico::find($id);

        return response()->json([$mostrar->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $modificar = AngularBasico::find($id);

        
 
    $modificar->nombre = \Request::input('nombre');
     $modificar->pais = \Request::input('pais');
        $modificar->save();  

        /* $modificar = AngularBasico::fill($request->all());
        $modificar->save(); */
      
    


        return response()->json(["mensaje"=>"Actualizada"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       

        $dadmin = AngularBasico::find($id);
 
        $dadmin->delete();

        return response()->json(["mensaje"=>"Borrada"]);
    }
}
