<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['title' => 'semrush', 'slug' => 'semrush', 'description' => 'product description' ,'price' => 11, 'image' => 'semrush.webp', 'plan_id' => 1, 'created_at'=> now()],
            ['title' => 'ahrefs', 'slug' => 'ahrefs', 'description' => 'product description' ,'price' => 15, 'image' => 'ahrefs.png', 'plan_id' => 1, 'created_at'=> now()],
            ['title' => 'seotool', 'slug' => 'seotool', 'description' => 'product description' ,'price' => 18, 'image' => 'gear.svg', 'plan_id' => 2, 'created_at'=> now()],
        ];
        DB::table('products')->insert($products);
    }
}
