<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('user')->orderBy('name')->get();
        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tag'  => ['nullable', 'string', 'max:50'],
        ]);

        // Minimalno: dodeli prvog user-a ili ulogovanog (ako imaš auth)
        $data['user_id'] = auth()->id() ?? 1;

        Team::create($data);

        return redirect()->route('teams.index')->with('success', 'Team created.');
    }
}