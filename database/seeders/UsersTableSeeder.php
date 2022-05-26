<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'david',
            'email' => 'davidfraterman@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'jan',
            'email' => 'jan@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
