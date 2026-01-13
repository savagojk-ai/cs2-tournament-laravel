<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::firstOrCreate(
            ['email' => 'admin@cs2.local'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        // Kapiteni
        User::firstOrCreate(
            ['email' => 'captain1@cs2.local'],
            [
                'name' => 'Captain One',
                'password' => Hash::make('password'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'captain2@cs2.local'],
            [
                'name' => 'Captain Two',
                'password' => Hash::make('password'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'captain3@cs2.local'],
            [
                'name' => 'Captain Three',
                'password' => Hash::make('password'),
            ]
        );
    }
}

