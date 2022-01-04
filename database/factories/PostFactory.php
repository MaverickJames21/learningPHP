<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            $post = $this->faker->post;
            return [
                'img' => $this->faker->imageUrl(),
                'title' => $this->faker->word,
                'subtitle' => $this->faker->word,
                'slug' => $this->faker->word,
                'content' => $this->faker->text,
            ];

    }
}
