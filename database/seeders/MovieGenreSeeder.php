<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        $genreIDs = DB::table('genres')->pluck('id');
        $moviesIDs = DB::table('movies')->pluck('id');

        for($i=1; $i<=5; $i++){
            DB::table('genre_movie')->insert([
                'movie_id' => $faker->randomElement($genreIDs),
                'genre_id' => $faker->randomElement($moviesIDs)
            ]);
        }
    }
}
