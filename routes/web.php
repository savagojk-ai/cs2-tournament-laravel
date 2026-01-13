<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TournamentRegistrationController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('teams', TeamController::class);
Route::resource('players', PlayerController::class);
Route::resource('tournaments', TournamentController::class);
Route::resource('registrations', RegistrationController::class);

Route::get('/tournaments-public', [TournamentController::class, 'index'])->name('tournaments.public');

Route::middleware('auth')->group(function () {
    Route::post('/tournaments/{tournament}/register', [TournamentRegistrationController::class, 'store'])
        ->name('tournaments.register');

    Route::delete('/tournaments/{tournament}/register', [TournamentRegistrationController::class, 'destroy'])
        ->name('tournaments.unregister');
});