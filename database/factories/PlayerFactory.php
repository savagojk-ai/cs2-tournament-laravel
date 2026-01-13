<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nickname' => fake()->word(),
            'steam_id' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'role' => fake()->randomElement(["IGL","AWPer","Rifler","Support","Entry"]),
            'team_id' => Team::factory(),
        ];
    }
}
