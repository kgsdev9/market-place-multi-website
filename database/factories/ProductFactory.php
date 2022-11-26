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
            'statut' =>array_rand(['disponible', 'stock vide']),
            'country_id' => rand(1, 30),
            'city_id' => rand(1, 30),
            'description' =>$this->faker->paragraph(),
            'price' =>$this->faker->numberBetween(100, 200),
            'cover_image' =>$this->faker->imageUrl(),
            'quantity' =>$this->faker->numberBetween(10, 30),
            'category_id'=> rand(1, 6),
            'seller_id'=> rand(1, 6),
            'created_at' => now()
        ];
    }
}
