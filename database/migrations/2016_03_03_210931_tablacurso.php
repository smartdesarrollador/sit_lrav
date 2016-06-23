<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tablacurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tablacurso', function($table)
             {
                  $table->increments('id');
                  $table->string('nombre');
                  
                    $table->text('body');
                   $table->timestamps();

                   $table->integer('uno_id')->unsigned();
                   $table->foreign('uno_id')->references('id')->on('tablaclase');
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
        Schema::drop('tablacurso');
    }
}
