<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
          [
              'title' => 'Basic',
              'slug' => 'basic',
              'price_monthly'=> 99,
              'price_annually'=> 199,
              'description' => 'basic plan description',
          ],
            [
                'title' => 'Medium',
                'slug' => 'medium',
                'price_monthly'=> 99,
                'price_annually'=> 199,
                'description' => 'medium plan description',
            ],
            [
                'title' => 'Mega',
                'slug' => 'mega',
                'price_monthly'=> 99,
                'price_annually'=> 199,
                'description' => 'mega plan description',
            ]
        ];
        DB::table('plans')->insert($plans);
    }
}
