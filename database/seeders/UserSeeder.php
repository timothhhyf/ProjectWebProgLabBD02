<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@mail.id',
            'password' => bcrypt('admin'),
            // 'password' => 'admin',
            'phone' => '',
            'image' => ''
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user1'),
            // 'password' => 'user1',
            'phone' => '',
            'image' => ''
        ]);
    }
}
