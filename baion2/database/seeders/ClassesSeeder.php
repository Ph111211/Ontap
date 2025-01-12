<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 50; $i++) {
        DB::table('classes')->insert([
            'class_name'=>$faker->word(),
            'program'=>$faker->word(),
            'start_date'=>$faker->date(),
            'end_date'=>$faker->date()

        ]);
    }
}
}
