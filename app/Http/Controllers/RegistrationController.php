<?php

namespace App\Http\Controllers;

use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with(['tournament', 'team'])->latest()->get();
        return view('registrations.index', compact('registrations'));
    }
}