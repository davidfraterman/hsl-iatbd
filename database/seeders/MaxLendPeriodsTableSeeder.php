<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MaxLendPeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // english product category
        $max_lend_times = [
            '1 week',
            '2 weeks',
            '3 weeks',
            '4 weeks',
            '5 weeks',
            '6 weeks',
            '7 weeks',
            '8 weeks',
        ];

        foreach ($max_lend_times as $lend_time) {
            DB::table('max_lend_periods')->insert([
                'period' => $lend_time,
            ]);
        }
    }
}
