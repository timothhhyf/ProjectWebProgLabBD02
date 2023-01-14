<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        //

        for($i=1; $i<=5; $i++){
            DB::table('actors')->insert([
                'name' => $faker->name(),
                'gender' => $faker->randomElement($array = array ('male', 'female')) ,
                'biography' => $faker->paragraph(10),
                'dob' => $faker->dateTimeBetween('-50 years', '-15 years'),
                'pob' => $faker->country(),
                'image' => 'actor'.$i.'.jpg',
                'popularity' => $faker->numberBetween()
            ]);
        }
    }
}
