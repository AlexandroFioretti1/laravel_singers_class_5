<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $album = new Album();
            $album->name = $faker->name();
            $album->slug = Str::slug($album->name, '-');
            $album->cover_img = $faker->imageUrl(640, 480, 'animals', true);
            $album->release_date = $faker->dateTime();
            $album->tracks = $faker->numberBetween(1, 10);
            $album->save();
        }
    }
}
