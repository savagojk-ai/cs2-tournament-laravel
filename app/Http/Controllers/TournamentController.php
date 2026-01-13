<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    // Use-case: javni pregled turnira
    public function index()
    {
        $tournaments = Tournament::orderBy('starts_at')->get();

        return view('tournaments.index', compact('tournaments'));
    }

    // Admin CRUD (minimalno) – možeš kasnije proširiti
    public function create()
    {
        return view('tournaments.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'starts_at' => ['required', 'date'],
            'ends_at' => ['required', 'date', 'after_or_equal:starts_at'],
            'max_teams' => ['required', 'integer', 'min:2'],
            'status' => ['required', 'in:Draft,Open,Closed'],
        ]);

        Tournament::create($data);

        return redirect('/tournaments')->with('success', 'Tournament created.');
    }
}
