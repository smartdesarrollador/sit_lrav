<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class Info extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $faker = Faker::create();
 
        for($i = 0; $i<50; $i++){
 
            \DB::table('info')->insert(array(
                
                'nombre'  => $faker->firstName($gender = null|'male'|'female'),
                'apellido'       => $faker->lastName,
                'pais'     => $faker->country,
                'email'         => $faker->email,
                
                'Descripcion'       => $faker->text,
                'telefono'     => $faker->numberBetween($min = 1000000, $max = 10000000),
                'votacion'     => $faker->numberBetween($min = 1, $max = 1000),
                
            ));
        }
    }
}
