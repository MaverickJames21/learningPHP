<?php

namespace Database\Seeders;

use App\Models\Post;
// use Carbon\Factory;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 40; $i++)
            Post::create([
                'img' => $faker->imageUrl(),
                'title' => $faker->sentence(),
                'subtitle' => $faker->sentence(),
                'content'=>  $faker->text(),


            ]);
    }
}
