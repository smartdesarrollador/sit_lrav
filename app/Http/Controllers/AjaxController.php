<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplateAdminModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        return view('ajax.load');
    }

    public function pagina(){


       $user = TemplateAdminModel::find(4);

        return view('ajax/ejemplo2',['user'=> $user]);



    }

    public function pagina2(){

        



    }

   
    
}
