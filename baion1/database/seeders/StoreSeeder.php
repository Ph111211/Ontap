<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 50; $i++) {
            
        DB::table('stores')->insert([
           
               'name'=>$faker->name(),
               'address'=>$faker->city(),
               'phone'=>$faker->phonenumber(),
               
              
        ]);
    }
    }
}
