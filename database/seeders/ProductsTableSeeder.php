<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'owner_id' => 1,
            'name' => 'iPhone 11',
            'description' => 'Mooie iphone 11 zonder schade',
            'max_lend_time' => '1 week',
            'image' => 'product1.jpg',
            'category' => 'electronics',
            'is_lended_out' => false,
        ]);

        DB::table('products')->insert([
            'owner_id' => 1,
            'name' => 'Stoomreiniger',
            'description' => 'Mooie Stoomreiniger',
            'max_lend_time' => '2 weeks',
            'image' => 'product2.jpg',
            'category' => 'electronics',
            'is_lended_out' => true,
        ]);
    }
}
