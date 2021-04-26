<?php

namespace Database\Seeders;

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
        //
        DB::table('users')->insert([
            [
            "name"=>'Ali Akbar Shahzad',
            "email"=>"aliakbarshahzad5@gmail.com",
            "password"=>Hash::make('12345')
        ],
        [
            "name"=>'Ali Ahamad Sabar',
            "email"=>"aliahmadsabar5@gmail.com",
            "password"=>Hash::make('12345')
        ],
        [
            "name"=>'Ali Shair',
            "email"=>"alishair5@gmail.com",
            "password"=>Hash::make('12345')
        ],
        [
            "name"=>'Adnan Mehmood',
            "email"=>"adnanmehmood5@gmail.com",
            "password"=>Hash::make('12345')
        ]

        ]); 
    }
}
