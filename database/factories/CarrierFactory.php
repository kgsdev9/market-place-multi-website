<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrier>
 */
class CarrierFactory extends Factory
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
            'address_payment' => $this->faker->address(),
            'website' => $this->faker->url(),
            'seller_phonenumber' => $this->faker->phoneNumber(),
            'kibs' => $this->faker->imageUrl(),
            'logo' => $this->faker->image(),
            'created_at' => now()
        ];
    }
}
