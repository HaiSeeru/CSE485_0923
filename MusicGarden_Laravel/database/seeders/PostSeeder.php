<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i<10; $i++){
            DB::table('posts')->insert(
                [
                    'title' => $faker->sentence,
                    'name_song' => $faker->word,
                    'id_category' => $faker->numberBetween(1, 2),
                    'summary' => $faker->paragraph,
                    'content' => $faker->text,
                    'id_artist' => $faker->numberBetween(1, 5),
                    'date_post' => Carbon::now()->toDateString(),
                    'img_post' => $faker->imageUrl,
                ]
                );
        }
    }
}
