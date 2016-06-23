<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadsController extends Controller
{
    //

    public function index()
{
    return view("uploads.form");
}

public function save()
{
    if(!\Input::file("file"))
    {
        return redirect('uploads')->with('error-message', 'File has required field');
    }

    // $mime = \Input::file('file')->getMimeType();
    $extension = strtolower(\Input::file('file')->getClientOriginalExtension());
    $fileName = uniqid().'.'.$extension;
    $path = "files_uploaded";

   
            if (\Request::file('file')->isValid())
            {
                \Request::file('file')->move($path, $fileName);
                $upload = new Upload();
                $upload->filename = $fileName;
                if($upload->save())
                {
                    return redirect('uploads')->with('success-message', 'File has been uploaded');
                }
                else
                {
                    \File::delete($path."/".$fileName);
                    return redirect('uploads')->with('error-message', 'An error ocurred saving data into database');
                }
            }
       
  
}

}
