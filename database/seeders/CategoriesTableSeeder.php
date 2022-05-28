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
            'Electronics',
            'Furniture',
            'Clothing',
            'Books',
            'Sports',
            'Toys',
            'Tools',
            'Other',
        ];

        foreach ($categories_array as $category) {
            DB::table('categories')->insert([
                'category' => $category,
            ]);
        }
    }
}
