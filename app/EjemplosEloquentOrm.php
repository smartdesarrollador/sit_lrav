<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EjemplosEloquentOrm extends Model
{
    //
     protected $table = 'info';
 
	protected $fillable = ['nombre', 'apellido','pais','email','descripcion','telefono','edad'];
 
	protected $guarded = ['id'];

	public function scopePopular($query)
    {
        return $query->where('votacion', '>', 100);
    }

    public function scopeNoPopular($query)
    {
        return $query->where('votacion', '<', 100);
    }

    public function scopeNombresCon($query,$letra)
    {
        return $query->where('nombre','Like',"$letra%");
    }

    public function setNombreAttribute($value)
   {
    $this->attributes['nombre'] = ucfirst(strtolower($value));
   }

       public function getNombreAttribute($value)
    {
       return strtolower($value);
    }

    
}
