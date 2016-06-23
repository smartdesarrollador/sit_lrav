<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablacurso extends Model
{
    //
    protected $table="tablacurso";

   protected $fillable = ['nombre','body','uno_id'];
 


	public function tablaclase()
    {
        return $this->belongsTo('App\Tablaclase','uno_id');
    }

}
