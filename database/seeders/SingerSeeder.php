<?php

namespace Database\Seeders;

use App\Models\Singer;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $singer = new Singer();
            $singer->artist_name = $faker->name();
            $singer->name = $faker->firstName();
            $singer->lastname = $faker->lastName();
            $singer->image_url = $faker->imageUrl(640, 480, 'animals', true);
            $singer->birth_date = $faker->dateTime();
            $singer->published_album = $faker->randomNumber(3, false);
            $singer->is_in_a_band = $faker->randomElement([1, 0]);
            $singer->save();
        }
    }
}
