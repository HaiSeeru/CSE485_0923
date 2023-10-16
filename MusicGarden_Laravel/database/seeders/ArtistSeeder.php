<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i<5; $i++){
            DB::table('artists')->insert(
                [
                    'name_artist' => $faker->name,
                    'img_artist' => $faker->imageUrl(200, 300)
                ]
                );
        }
    }
}
