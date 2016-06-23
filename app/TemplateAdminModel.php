<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateAdminModel extends Model
{
    //
     protected $table = 'producto';
 
	protected $fillable = ['prod_nombre', 'imagen','descripcion','precio','categoria_id'];
 
	protected $guarded = ['id'];
}
