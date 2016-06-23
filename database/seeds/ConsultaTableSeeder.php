<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ConsultaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $faker = Faker\Factory::create();

        for($i=0;$i<40;$i++){
                DB::table('consultas')->insert(array(
                       
                    'nombre' => $faker->name,
                    'direccion' => $faker->address,
                    'edad' => $faker->numberBetween($min = 10, $max = 20),
                    'descripcion' => $faker->text,
        ));

          }
    }
}
