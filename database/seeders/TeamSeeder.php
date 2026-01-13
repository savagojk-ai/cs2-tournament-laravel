<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $captain1 = User::where('email', 'captain1@cs2.local')->firstOrFail();
        $captain2 = User::where('email', 'captain2@cs2.local')->firstOrFail();
        $captain3 = User::where('email', 'captain3@cs2.local')->firstOrFail();

        Team::firstOrCreate(
            ['name' => 'Belgrade Eagles'],
            ['tag' => 'BE', 'user_id' => $captain1->id]
        );

        Team::firstOrCreate(
            ['name' => 'Novi Sad Wolves'],
            ['tag' => 'NSW', 'user_id' => $captain2->id]
        );

        Team::firstOrCreate(
            ['name' => 'Balkan Titans'],
            ['tag' => 'BT', 'user_id' => $captain3->id]
        );

        Team::firstOrCreate(
            ['name' => 'CS2 Academy'],
            ['tag' => 'ACA', 'user_id' => $captain1->id]
        );
    }
}
