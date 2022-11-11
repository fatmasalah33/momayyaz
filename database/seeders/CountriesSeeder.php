<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Germany',
            'img' => '1.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Malaysia',
            'img' => '2.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Sri Lanka',
            'img' => '3.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Thailand',
            'img' => '4.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Russia',
            'img' => '5.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Belarus',
            'img' => '6.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Italia',
            'img' => '7.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Azerbaijan',
            'img' => '8.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Abu Dhabi',
            'img' => '9.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Seychelles',
            'img' => '10.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Sharm El-Shaikh',
            'img' => '11.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Bosnia',
            'img' => '12.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Mecca',
            'img' => '13.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Greece',
            'img' => '14.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Dubai',
            'img' => '15.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Georgia',
            'img' => '16.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Holland',
            'img' => '17.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Mauritius',
            'img' => '18.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Morocco',
            'img' => '19.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Cairo',
            'img' => '20.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Indonesia',
            'img' => '21.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'South Africa',
            'img' => '22.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Albahrayn',
            'img' => '23.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'The Philippines',
            'img' => '24.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Paris',
            'img' => '25.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Alexandria',
            'img' => '26.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Maldives',
            'img' => '27.png',
            
        ]);
        DB::table('countries')->insert([
            'name' => 'Turkey',
            'img' => '28.png',
            
        ]);
        
    }
}
