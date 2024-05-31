<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => fake()->randomElement(['Ferrari', 'Renault', 'Peugeot']),
            'model' => fake()->randomElement(['360', 'Mégane', '208']),
            'price' => fake()->numberBetween(30000, 100000),
        ];
    }
}
