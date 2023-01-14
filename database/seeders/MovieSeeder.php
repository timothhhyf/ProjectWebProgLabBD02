<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MovieSeeder extends Seeder
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

        for($i=1; $i<=3; $i++){
            DB::table('movies')->insert([
                'title' => $faker->words(3, true),
                'description' => $faker->paragraph(10),
                'director' => $faker->name(),
                'release_date' => $faker->dateTimeBetween('-20 years', '1 years'),
                'image' => 'movie'.$i.'.jpg',
                'background_img' => 'moviebackground'.$i.'.jpg'
            ]);
        }
    }
}
