<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id' => 2,
            'lender_id' => 1,
            'rating' => 5,
            'comment' => 'Bedankt voor het lenen van de iphone 11',
        ]);

        DB::table('reviews')->insert([
            'user_id' => 2,
            'lender_id' => 1,
            'rating' => 4,
            'comment' => 'Bedankt voor het lenen van de stoomreiniger',
        ]);
    }
}
