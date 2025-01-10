<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 50; $i++) {
        $Store_id = DB::table('stores')->pluck('id');   
        DB::table('products')->insert([
                'store_id'=>$faker->randomElement($Store_id),
                'name' => $faker->name(),
               'description'=>$faker->paragraph(),
               'price'=>$faker->randomFloat($nbMaxDecimals = 2,$max = 50,$min = 0),
               
               
              
        ]);
    }
    }
}
