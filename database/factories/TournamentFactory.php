<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'location' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'starts_at' => fake()->dateTime(),
            'ends_at' => fake()->dateTime(),
            'max_teams' => fake()->numberBetween(-10000, 10000),
            'status' => fake()->randomElement(['Draft', 'Open', 'Closed']),
        ];
    }
}
