<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i<20; $i++){
            DB::table('students')->insert(
                [
                    'name' => $faker->word,
                    'dateOfBorn' => $faker->date,
                    'numberphone' => $faker->randomNumber(9, true)
                ]
                );
        }
    }
}
