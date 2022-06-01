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
            'rating' => 4,
            'comment' => 'Bedankt voor het lenen, top product!',
        ]);

        DB::table('reviews')->insert([
            'user_id' => 2,
            'lender_id' => 1,
            'rating' => 3,
            'comment' => 'Het product is niet zo goed als ik verwacht had, maar wel ontzettend bedankt voor het lenen!',
        ]);

        DB::table('reviews')->insert([
            'user_id' => 1,
            'lender_id' => 2,
            'rating' => 5,
            'comment' => 'Komt afspraken na!',
        ]);

        DB::table('reviews')->insert([
            'user_id' => 1,
            'lender_id' => 2,
            'rating' => 2,
            'comment' => 'Product is anders dan vermeld..',
        ]);

        DB::table('reviews')->insert([
            'user_id' => 1,
            'lender_id' => 3,
            'rating' => 1,
            'comment' => 'Ik wilde een doos lenen maar kreeg een lege doos opgestuurd',
        ]);

        DB::table('reviews')->insert([
            'user_id' => 2,
            'lender_id' => 3,
            'rating' => 2,
            'comment' => 'Bedankt voor het lenen van de mok, maar het product is niet zo goed als ik verwacht had.',
        ]);
    }
}
