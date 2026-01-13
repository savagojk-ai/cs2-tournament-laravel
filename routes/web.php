<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TournamentRegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tournaments', [TournamentController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::post('/tournaments/{tournament}/register', [TournamentRegistrationController::class, 'store']);
    Route::delete('/tournaments/{tournament}/register', [TournamentRegistrationController::class, 'destroy']);
});









