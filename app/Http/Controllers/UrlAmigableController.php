<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostUrl;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UrlAmigableController extends Controller
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

    public function crear_url(){
          

          

         $post = new PostUrl([
          'title' => 'titulo de la pagina',
          'content'=>'descripcion de la pagina',
          'user_id'=>1,
          ]);

            $post->save();
    }

    
}
