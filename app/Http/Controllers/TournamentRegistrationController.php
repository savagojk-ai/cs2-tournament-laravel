<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Registration;

class TournamentRegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with(['tournament', 'team'])->latest()->get();
        return view('registrations.index', compact('registrations'));
    }
}