<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LendRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lend_requests')->insert([
            'requester_id' => 1,
            'product_id' => 4,
            'product_owner_id' => 2,
        ]);

        DB::table('lend_requests')->insert([
            'requester_id' => 2,
            'product_id' => 5,
            'product_owner_id' => 1,
        ]);
    }
}
