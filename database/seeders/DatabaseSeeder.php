<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(MovieGenreSeeder::class);
        // $this->call(MovieActorSeeder::class);
        // $this->call(MovieGenreSeeder::class);
        // $this->call(MovieListSeeder::class);
    }
}
