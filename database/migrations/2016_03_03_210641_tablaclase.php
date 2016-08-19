<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tablaclase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tablaclase', function($table)
             {
                  $table->increments('id');
                  $table->string('nombreclase');
                   
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
         Schema::drop('tablaclase');
    }
}
