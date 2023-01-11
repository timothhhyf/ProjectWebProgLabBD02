<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('actors')->insert([
            'id' => '1',
            'name' => 'Benedict Cumberbatch',
            'gender' => 'Male',
            'biography' => 'Benedict Timothy Carlton Cumberbatch CBE (born 19 July 1976) is an English actor. Known for his work on screen and stage, he has received various accolades, including a British Academy Television Award, a Primetime Emmy Award and a Laurence Olivier Award.',
            'dob' => '1976-07-19',
            'pob' => 'Hammersmith, London, England',
            'image' => '1673418816.jpg',
            'popularity' => 20000000
        ]);
    }
}
