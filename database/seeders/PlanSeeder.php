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
              'description' => 'basic plan description',
          ],
            [
                'title' => 'Medium',
                'slug' => 'medium',
                'description' => 'medium plan description',
            ],
            [
                'title' => 'Mega',
                'slug' => 'mega',
                'description' => 'mega plan description',
            ]
        ];
        DB::table('plans')->insert($plans);
    }
}
