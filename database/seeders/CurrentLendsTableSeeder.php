<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CurrentLendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('current_lends')->insert([
            'borrower_id' => 1,
            'product_id' => 2,
            'product_owner_id' => 2,
        ]);

        DB::table('current_lends')->insert([
            'borrower_id' => 2,
            'product_id' => 3,
            'product_owner_id' => 1,
        ]);
    }
}
