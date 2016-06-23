<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();

        dd($date);
    }

     public function formato()
    {
        //

        $carbon = new \Carbon\Carbon();
        $date = $carbon->format('d-m-Y');

        dd($date);
    }

    public function formato2()
    {
        //

        $carbon = new \Carbon\Carbon();
        $date = $carbon->format('l jS \\of F Y h:i:s A');

        dd($date);
    }

    public function addyear()
    {
        //

        $carbon = new \Carbon\Carbon();
        $date = $carbon->addYear(2); 

        dd($date);
    }

    public function subyear()
    {
        //

        $carbon = new \Carbon\Carbon();
        $date = $carbon->subYears(2); 

        dd($date);
    }




    
}
