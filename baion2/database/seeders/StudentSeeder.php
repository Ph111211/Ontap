<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $class_id = DB::table('classes')->pluck('id'); 
        for ($i = 0; $i < 50; $i++) {
            DB::table('students')->insert([
                'first_name'=>$faker->firstname(),
                'last_name'=>$faker->lastname(),
                'email'=>$faker->email(),
                'student_number'=>$faker->numberBetween($min = 0, $max = 9000),
                'class_id'=>$faker->randomElement($class_id),
                'status'=>$faker->randomElement(['Trial','Enrolled','Dropped']),
                'date_of_birth'=>$faker->date(),
                
    
            ]);
        }
    }
}
