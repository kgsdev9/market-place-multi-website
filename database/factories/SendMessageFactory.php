<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SendMessage>
 */
class SendMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'message' => $this->faker->paragraph(),
            'email' => $this->faker->email(),
            'number' => $this->faker->phoneNumber(),
            'poste_id' => rand(4, 30),
            'repondeur_id'  => rand(4, 30),
            'annonceur_id'  => rand(4, 30),
            'created_at'  => now()
        ];
    }
}
