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
              'created_at' => now()
          ],
            [
                'title' => 'Medium',
                'slug' => 'medium',
                'price_monthly'=> 199,
                'price_annually'=> 299,
                'description' => 'medium plan description',
                'created_at' => now()
            ],
            [
                'title' => 'Mega',
                'slug' => 'mega',
                'price_monthly'=> 399,
                'price_annually'=> 499,
                'description' => 'mega plan description',
                'created_at' => now()
            ],
            [
                'title' => 'Super Mega',
                'slug' => 'super-mega',
                'price_monthly'=> 599,
                'price_annually'=> 699,
                'description' => 'mega plan description',
                'created_at' => now()
            ]
        ];
        DB::table('plans')->insert($plans);
    }
}
