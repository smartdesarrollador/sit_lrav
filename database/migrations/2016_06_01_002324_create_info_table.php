<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('info', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('pais');
            $table->string('email');
            $table->text('descripcion');
            $table->integer('telefono');
            $table->integer('votacion');

            $table->timestamps();
        });


         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('info');
    }
}
