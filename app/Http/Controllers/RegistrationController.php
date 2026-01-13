<?php

namespace App\Http\Controllers;

use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index()
{
    $registrations = \App\Models\Registration::with(['team', 'tournament'])
        ->orderBy('created_at', 'desc')
        ->get();

    return view('registrations.index', compact('registrations'));
}
}