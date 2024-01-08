<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(10,12),
            'reference' => fake()->regexify('[A-Z]{5}[0-4]{9}'),
            'contract_id' => fake()->numberBetween(1,1),
            'sub_contract_id' => fake()->numberBetween(2,4),
            'driver_id' => fake()->numberBetween(1,3),
            'truck_id' => fake()->numberBetween(1,3),
            'started_at' => fake()->dateTimeBetween('-122 week'),
            'completed_at' => fake()->dateTimeBetween('-122 week'),
            'loads' => fake()->numberBetween(1,4),
            'loads_completed' => fake()->numberBetween(1,4),
            'price_mile' => fake()->randomFloat(2, 1, 3),
            'miles' => fake()->randomFloat(1, 100, 500),
            'amount' => fake()->randomFloat(2, 100, 900),
            'user_id' => 1,
        ];
    }
}
