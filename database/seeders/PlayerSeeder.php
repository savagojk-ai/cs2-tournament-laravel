<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
use App\Models\Team;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        $teams = Team::orderBy('name')->get();

        foreach ($teams as $team) {
            // 5 igrača po timu (tipičan CS2 roster)
            $roster = [
                ['nickname' => $team->tag . '_IGL',    'role' => 'IGL'],
                ['nickname' => $team->tag . '_AWP',    'role' => 'AWPer'],
                ['nickname' => $team->tag . '_RIF1',   'role' => 'Rifler'],
                ['nickname' => $team->tag . '_RIF2',   'role' => 'Entry'],
                ['nickname' => $team->tag . '_SUP',    'role' => 'Support'],
            ];

            foreach ($roster as $p) {
                Player::firstOrCreate(
                    [
                        'nickname' => $p['nickname'],
                        'team_id' => $team->id,
                    ],
                    [
                        'steam_id' => null,
                        'role' => $p['role'],
                    ]
                );
            }
        }
    }
}
