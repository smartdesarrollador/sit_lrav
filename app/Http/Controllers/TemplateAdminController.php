<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TemplateAdminRequest;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class TemplateAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("administrador.index")->with('producto', \App\TemplateAdminModel::paginate(7)->setPath('administracion'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("administrador.createUpdate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemplateAdminRequest $TemplateAdminRequest)
    {
        //
        $objadmin = new \App\TemplateAdminModel;
 
    $objadmin->prod_nombre = \Request::input('prod_nombre');
 
    $objadmin->imagen = \Request::input('imagen');

    $objadmin->descripcion = \Request::input('descripcion');

    $objadmin->precio = \Request::input('precio');

    $objadmin->categoria_id = \Request::input('categoria_id');
 
    $objadmin->save();
 
    return redirect('administracion/create')->with('message', 'TemplateAdminRequest saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

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
        return view('administrador.createUpdate')->with('admin', \App\TemplateAdminModel::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, TemplateAdminRequest $TemplateAdminRequest)
    {
        //
        $badmin = \App\TemplateAdminModel::find($id);
 
    $badmin->prod_nombre = \Request::input('prod_nombre');
 
    $badmin->imagen = \Request::input('imagen');

     $badmin->descripcion = \Request::input('descripcion');

      $badmin->precio = \Request::input('precio');

       $badmin->categoria_id = \Request::input('categoria_id');
 
    $badmin->save();
 
    return redirect()->route('administracion.edit', ['admin' => $id])->with('message', 'Admin updated');
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
        $dadmin = \App\TemplateAdminModel::find($id);
 
    $dadmin->delete();
 
    return redirect()->route('administracion.index')->with('message', 'Admin deleted');
    }

    public function pagina()
    {
        //
        return view('administrador.pagina');
    }
}
