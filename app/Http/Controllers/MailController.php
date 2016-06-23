<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return \View::make('emails.contacto');
    }

   public function send(Request $request)
   {
       //guarda el valor de los campos enviados desde el form en un array
       $data = $request->all();
 
       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       \Mail::send('emails.message', $data, function($message) use ($request)
       {
           //remitente
           $message->from($request->email, $request->name);
 
           //asunto
           $message->subject($request->subject);
 
           //receptor
           $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
 
       });
       return \View::make('emails.success');
   }



}
