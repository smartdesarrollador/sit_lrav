<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    //
    protected $table = 'procesos';

    public function empresas() {
		return $this->belongsTo('Empresa', 'empresa_id');
	}
}
