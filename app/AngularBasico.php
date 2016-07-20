<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AngularBasico extends Model
{
    //
    protected $table = 'angular_basicos';
 
	protected $fillable = ['nombre', 'pais'];
 
	protected $guarded = ['id'];
}
