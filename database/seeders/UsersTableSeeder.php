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
            'name' => 'David Fraterman',
            'email' => 'davidfraterman@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Jan Jansen',
            'email' => 'jan.jansen@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mark',
            'email' => 'mark@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'blocked'
        ]);
    }
}
