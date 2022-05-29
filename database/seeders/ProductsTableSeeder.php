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
            'name' => 'Apple iPhone 11 Rood',
            'description' => 'Mooie iphone 11 zonder schade. Komt met hoesje en mag je voor een weekje lenen.',
            'max_lend_time' => '1 week',
            'image' => 'product1.jpg',
            'category' => 'Electronics',
            'is_lended_out' => false,
        ]);

        DB::table('products')->insert([
            'owner_id' => 2,
            'name' => 'Kärcher SC 3 Stoomreiniger',
            'description' => 'Goedwerkende stoomreiniger, in januari dit jaar gekocht en mag u lenen als u in de buurt woont!',
            'max_lend_time' => '2 weken',
            'image' => 'product2.jpg',
            'category' => 'Tools',
            'is_lended_out' => true,
        ]);

        DB::table('products')->insert([
            'owner_id' => 1,
            'name' => 'Bezem',
            'description' => 'Hele nette bezem, kan goed vegen.',
            'max_lend_time' => '4 weken',
            'image' => 'product2.jpg',
            'category' => 'Tools',
            'is_lended_out' => true,
        ]);

        DB::table('products')->insert([
            'owner_id' => 2,
            'name' => 'Logitech MX Keys',
            'description' => 'Logitech keyboard, te leen aan studenten, graag in goede conditie houden.',
            'max_lend_time' => '4 weken',
            'image' => 'product2.jpg',
            'category' => 'Electronics',
            'is_lended_out' => false,
        ]);

        DB::table('products')->insert([
            'owner_id' => 1,
            'name' => 'Opblaasbootje',
            'description' => 'Dit bootje kan 3 kinderen of 1 volwassene houden. Komt met 2 peddels en een pompje.',
            'max_lend_time' => '1 week',
            'image' => 'product2.jpg',
            'category' => 'Toys',
            'is_lended_out' => false,
        ]);
    }
}
