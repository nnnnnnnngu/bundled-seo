<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'first_name' => 'vitali',
                'last_name' => 'k',
                'email' => 'vi.kartsivadze@gmail.com',
                'phone' => '591051424',
                'address' => 'asd q2 d das',
                'country' => 'georgia',
                'password' => Hash::make('123123123')
            ]
        ];

        DB::table('users')->insert($users);

    }
}
