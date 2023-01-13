<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->insert([
            'id' => '1',
            'name' => 'Action'
        ]);

        DB::table('genres')->insert([
            'id' => '2',
            'name' => 'Comedy'
        ]);

        DB::table('genres')->insert([
            'id' => '3',
            'name' => 'Romance'
        ]);

        DB::table('genres')->insert([
            'id' => '4',
            'name' => 'Sci-Fi'
        ]);

        DB::table('genres')->insert([
            'id' => '5',
            'name' => 'Horror'
        ]);
    }
}
