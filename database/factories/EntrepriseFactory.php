<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entreprise>
 */
class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 100),
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'website' => $this->faker->url(),
            'image' => $this->faker->imageUrl(),
            'created_at' => now(),
        ];
    }
}
