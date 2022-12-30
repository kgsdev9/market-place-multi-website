<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offre>
 */
class OffreFactory extends Factory
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
            'statut' => $this->faker->name(),
            'price'  =>$this->faker->numberBetween(100, 200),
            'description' => $this->faker->paragraph(),
            'entreprise_id' =>rand(2, 100),
            'created_at' => now()
        ];
    }
}
