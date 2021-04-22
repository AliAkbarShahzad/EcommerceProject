<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
        	[
        	'name'=>'LG Mobile',
        	'price'=>'100000',
        	'description'=>"A smart Phone with 4 GB RAM and much more",
        	'category'=>'Mobile',
        	'gallery'=>'file:///C:/Users/Ali%20Akbar%20Shahzad/Desktop/Lg.jpg'


        ],
        	[
        	'name'=>'Oppo Mobile',
        	'price'=>'200000',
        	'description'=>"A smart Phone with 8 GB RAM and much more",
        	'category'=>'Mobile',
        	'gallery'=>'file:///C:/Users/Ali%20Akbar%20Shahzad/Desktop/Oppo.jpg'


        ],
        [
        	'name'=>'Laptop',
        	'price'=>'50000',
        	'description'=>"A Dell Laptop with 16 GB RAM and  500 HDD",
        	'category'=>'Laptop',
        	'gallery'=>'file:///C:/Users/Ali%20Akbar%20Shahzad/Desktop/laptop.jpg'


        ],
        [
        	'name'=>'Sony TV',
        	'price'=>'30000',
        	'description'=>"A HD TV with High Resolution and much more",
        	'category'=>'TV',
        	'gallery'=>'file:///C:/Users/Ali%20Akbar%20Shahzad/Desktop/TV.jpg'


        ],
        [
        	'name'=>'Juicer Blender',
        	'price'=>'15000',
        	'description'=>"A high quality Blender with 4 peces",
        	'category'=>'Juicer Blender',
        	'gallery'=>'file:///C:/Users/Ali%20Akbar%20Shahzad/Desktop/juicer.jpg'


        ]



        ]);
    }
}
