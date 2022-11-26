<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seller>
 */
class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sirname' => $this->faker->firstName(),
            'firstname' => $this->faker->firstName(),
            'phonenumber' => $this->faker->phoneNumber(),
            'frequence' => $this->faker->monthName(),
            'media' => $this->faker->imageUrl(),
            'photo' => $this->faker->imageUrl(),
            'cni' => $this->faker->imageUrl(),
            'house_piece' => $this->faker->imageUrl(),
            'rib' => $this->faker->imageUrl(),
            'created_at' => now()
        ];
    }
}
