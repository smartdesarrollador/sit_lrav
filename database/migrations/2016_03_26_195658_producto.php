<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('producto', function($table)
             {
                        $table->increments('id');
                        $table->string('prod_nombre');
                        $table->string('imagen');

                        $table->text('descripcion');
                        $table->integer('precio');
                        $table->timestamps();

                        $table->integer('categoria_id')->unsigned();
                        $table->foreign('categoria_id')->references('id')->on('categoria_producto');
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
        Schema::drop('producto');
    }
}
