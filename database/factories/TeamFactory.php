<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'tag' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'user_id' => User::factory(),
        ];
    }
}
