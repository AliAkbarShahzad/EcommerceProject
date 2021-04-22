<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class User_Seeder extends Seeder
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
        	"name"=>'Adnan Mehmood',
        	"email"=>"adnanmehmood5@gmail.com",
        	"password"=>Hash::make('03066803743')
        ]); 
    }
}
