<?php

namespace App\Http\Controllers;

use  Illuminate\Http\Request;
use DB;
use Hash;
use Lang ;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
$users = DB::table('administrador')->get();


return view('basico.index', ['users' => $users]);

    }


     public function form(){
        return view('correo.form');
    }



    public function mail(){
        $destino ="enrique_sistema_5000@hotmail.com";
$asunto = "Contacto Web";
$cabeceras = "Content-type: text/html";
$cuerpo ="Hola, alguien te ha contactado por el formulario Web de tu sitio<br>
Los datos enviados son los siguientes:<br>
<b>Nombre:</b>juan<br>
<b>email:</b>sistema5000smart@gmail.com<br>
Y envio el siguiente comentario: <hr>
<pre>
Este es un comentario
</pre>";

mail($destino,$asunto,$cuerpo,$cabeceras);

return "Se ha enviado el mensaje correctamente";


    	
    }

    public function ejemplo(){
            
            $array=[
                        'uno'=>'mundo',
                        'dos'=>'hola',

                   ];

            $productos = DB::table('producto')->get();

            //dd($users);

           

            return view('basico.prueba', ['productos' => $productos]);
    }

     public function metodo_post(Request $request)
    {
                $name = $request->input('name');

                $mail = \Request::input('correo');

                  return $name.'<br>'.$mail;
            
    }


   public function metodo_any()
    {

                  return 'metodo any :  responde a cualquier verbo HTTP';
            
    }

    public function respuesta_redirect()
    {
                 return redirect('basico/formulario');
                  
            
    }

    public function respuesta_json()
    {
                 return response()->json(['name' => 'Abigail', 'state' => 'CA']);
                  
            
    }

         public function vista_datos1()
    {            
            return view('proy/vista1', ['name' => 'James']);       
     }

    public function vista_datos2()
    {            
             return view('proy/vista2', ['name' => 'James'])->with('apellido','jiron');
    } 

    public function vista_datos3()
    {            
             return view('proy/vista3')->with(['name' => 'minombre',
                                               'apellido'=>'jiron'
                                              ]);
    }   

     public function vista_datos4()
    {            
            return view('proy/vista4', ['valor1' => 'hola',
                                         'valor2' => 'mundo'
                                         ]);       
     }  

     public function vista_datos5()
    {         
       
           $datos['valor1'] =  'nuevas';
        $datos['valor2'] ='variables';
                                        

            return view('proy/vista5', $datos );       
     }    

     public function vista_datos7()
    {         
       
           $datos =  ['valor1' => 'hola',
                      'valor2' => 'mundo'
                                         ];
       
                                        

            return view('proy/vista7', $datos );       
     } 

      public function vista_datos8()
    {         
       
           $valor1 =  'hola';
        $valor2 ='variables';
       
                                        

            return view('proy/vista8', compact('valor1','valor2') );       
     }   

     public function encriptar()
    {         
       
         $password = Hash::make('secret');   

         return $password;   
     }  

      public function encriptar2()
    {         
       
        $password = bcrypt('secret');

         return $password;   
     }  

 public function comprobar_password()
    {     
       $clave='secret';    
       $password = Hash::make($clave);  


        if (Hash::check($clave, $password))
           {
                 return 'la contraseña coincide';
           }

         
     }  

     public function localizacion()
    {         
       /*Lang::get('validation.accepted') = devuelve el texto de la variable 
                                            'accepted' ubicado en 
                                            'resources/lang/en/validation.php'
       */

        $localizacion = Lang::get('validation.accepted');

        return $localizacion;
     }  

     

     public function descargar_imagen(){
       

            $file= public_path(). "/uploads/paisaje.jpg";

    

             return \Response::download($file);
     }

     public function descargar_pdf(){
       

            $file= public_path(). "/uploads/css.pdf";

           $headers = array(
              'Content-Type: application/pdf',
            );

           return \Response::download($file, 'filename.pdf', $headers);
     }



            

            
       

           
    
    
}
