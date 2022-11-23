<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' =>$this->faker->name(),
            'cover_image' => $this->faker->imageUrl(),
            'country' =>$this->faker->country(),
            'city' =>$this->faker->city(),
            'statut' =>$this->faker->name,
            'description' =>$this->faker->paragraph(),
            'price' =>$this->faker->numberBetween(10, 30),
            'cover_image' =>$this->faker->imageUrl(),
            'quantity' =>$this->faker->numberBetween(10, 30),
            'created_at' => now()
        ];
    }
}
