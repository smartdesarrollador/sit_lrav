<?php


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Seeder;


class CustomersTableSeeder extends Seeder
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

        for($i=0;$i<30;$i++){
                DB::table('administrador')->insert(array(
                       
                    'title' => $faker->firstName,
                    'usuario' => $faker->name,
                    'body' => $faker->text,
        ));

          }
    }
}
