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
            'image' => '/img/iphone.jpg',
            'category' => 'Electronics',
            'is_lended_out' => false,
        ]);

        DB::table('products')->insert([
            'owner_id' => 2,
            'name' => 'Kärcher SC 3 Stoomreiniger',
            'description' => 'Goedwerkende stoomreiniger, in januari dit jaar gekocht en mag u lenen als u in de buurt woont!',
            'max_lend_time' => '2 weken',
            'image' => '/img/stoomreiniger.jpg',
            'category' => 'Tools',
            'is_lended_out' => true,
        ]);

        DB::table('products')->insert([
            'owner_id' => 1,
            'name' => 'Bezem',
            'description' => 'Hele nette bezem, kan goed vegen.',
            'max_lend_time' => '4 weken',
            'image' => '/img/bezem.jpg',
            'category' => 'Tools',
            'is_lended_out' => true,
        ]);

        DB::table('products')->insert([
            'owner_id' => 2,
            'name' => 'Logitech MX Keys',
            'description' => 'Logitech keyboard, te leen aan studenten, graag in goede conditie houden.',
            'max_lend_time' => '4 weken',
            'image' => '/img/keys.jpg',
            'category' => 'Electronics',
            'is_lended_out' => false,
        ]);

        DB::table('products')->insert([
            'owner_id' => 1,
            'name' => 'Opblaasbootje',
            'description' => 'Dit bootje kan 6 kinderen of 4 volwassenen houden. Komt met 2 peddels en een pompje.',
            'max_lend_time' => '1 week',
            'image' => '/img/opblaasbootje.jpg',
            'category' => 'Toys',
            'is_lended_out' => false,
        ]);

        DB::table('products')->insert([
            'owner_id' => 3,
            'name' => 'Doos',
            'description' => 'Kartonnen doos. Wordt geleverd in een kartonnen doos.',
            'max_lend_time' => '8 weken',
            'image' => '/img/doos.jpg',
            'category' => 'Other',
            'is_lended_out' => false,
        ]);

        DB::table('products')->insert([
            'owner_id' => 3,
            'name' => 'Auto met lichte gebruikssporen',
            'description' => 'Mooi wagen met wat minimale gebreken, altijd onderhouden',
            'max_lend_time' => '6 weken',
            'image' => '/img/auto.jpg',
            'category' => 'Other',
            'is_lended_out' => false,
        ]);
        
        DB::table('products')->insert([
            'owner_id' => 3,
            'name' => 'Gebruikte mok',
            'description' => 'Gebruikte mok, graag alleen ophalen.',
            'max_lend_time' => '3 weken',
            'image' => '/img/mok.jpg',
            'category' => 'Other',
            'is_lended_out' => false,
        ]);
    }
}
