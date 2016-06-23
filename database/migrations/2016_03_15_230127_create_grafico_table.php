<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraficoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('grafico', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('enero');
            $table->integer('febrero');
            $table->integer('marzo');
            $table->integer('abril');
            $table->integer('mayo');
            $table->integer('junio');
            $table->integer('julio');
           
           
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
         Schema::drop('grafico');
    }
}
