<?php

use Illuminate\Database\Seeder;

class producto_seeder extends Seeder
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

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {

           $id= DB::table('producto')->insertGetId([ //,
                'prod_nombre' => $faker->firstName ,
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'descripcion' => $faker->text,
                 'precio' => $faker->numberBetween($min = 100, $max = 800),
                'categoria_id' => $faker->numberBetween($min = 1, $max = 10),
            ]);

           


        }

       


    }
}
