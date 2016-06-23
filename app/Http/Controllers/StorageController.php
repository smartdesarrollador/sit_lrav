<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return \View::make('upload_archivos/new');
    }

public function save(Request $request)
{
 
       //obtenemos el campo file definido en el formulario
       $file = $request->file('file');

  
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();

       $dato_nombre=new \App\Upload;
       $dato_nombre->filename = $nombre; 
       $dato_nombre->save();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
       return "archivo guardado"; 
}

}
