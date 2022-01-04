<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $email = $this->faker->email;
        return [
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->word,
            'city' => $this->faker->word,
            'email' => $email,
            'password' => bcrypt('12345678'), // password
        ];
    }
}
