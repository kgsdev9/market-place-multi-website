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
            'country_id' => rand(1, 20),
            'city_id' => rand(1, 20),
            'description' =>$this->faker->paragraph(),
            'price' =>$this->faker->numberBetween(100, 200),
            'quantity' =>$this->faker->numberBetween(10, 30),
            'category_id'=> rand(1, 23),
            'sku_product'  => rand(1000 , 5000),
            'seller_id'=> rand(1, 6),
            'created_at' => now()
        ];
    }
}
