<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tournament;
use Illuminate\Support\Carbon;

class TournamentSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        Tournament::firstOrCreate(
            ['name' => 'CS2 Winter Cup'],
            [
                'location' => 'Belgrade',
                'starts_at' => $now->copy()->addDays(7),
                'ends_at' => $now->copy()->addDays(9),
                'max_teams' => 16,
                'status' => 'Open',
            ]
        );

        Tournament::firstOrCreate(
            ['name' => 'CS2 Academy League'],
            [
                'location' => 'Novi Sad',
                'starts_at' => $now->copy()->addDays(14),
                'ends_at' => $now->copy()->addDays(16),
                'max_teams' => 8,
                'status' => 'Draft',
            ]
        );

        Tournament::firstOrCreate(
            ['name' => 'CS2 Balkan Championship'],
            [
                'location' => 'Online',
                'starts_at' => $now->copy()->addDays(30),
                'ends_at' => $now->copy()->addDays(33),
                'max_teams' => 32,
                'status' => 'Open',
            ]
        );
    }
}

