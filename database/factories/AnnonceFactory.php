<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'kilo' => $this->faker->numberBetween(100, 400),
            'price' => $this->faker->numberBetween(100, 400),
            'country_start' => $this->faker->country(),
            'city_start' => $this->faker->city(),
            'country_destination' => $this->faker->country(),
            'city_destination' => $this->faker->city(),
            'start_date' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
            'user_id' => rand(1, 20),
            'image' => now()
        ];
    }
}
