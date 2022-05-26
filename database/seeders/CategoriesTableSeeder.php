<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // english product category
        $categories_array = [
            'electronics',
            'furniture',
            'clothing',
            'books',
            'sports',
            'toys',
            'tools',
            'other',
        ];

        foreach ($categories_array as $category) {
            DB::table('categories')->insert([
                'category' => $category,
            ]);
        }
    }
}
