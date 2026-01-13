<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tournament_id' => Tournament::factory(),
            'team_id' => Team::factory(),
            'status' => fake()->randomElement(['Pending', 'Approved', 'Rejected']),
            'created_by' => User::factory()->create()->created_by,
        ];
    }
}
