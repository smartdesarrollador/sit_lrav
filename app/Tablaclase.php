<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablaclase extends Model
{
    //

    protected $table="tablaclase";

   protected $fillable = ['nombreclase'];
 
	

	public function tablacurso()
    {
        return $this->hasMany('App\Tablacurso','uno_id');
    }
}
