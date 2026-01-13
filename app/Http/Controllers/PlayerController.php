<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with('team')->orderBy('nickname')->get();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        $teams = Team::orderBy('name')->get();
        return view('players.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nickname' => ['required', 'string', 'max:255'],
            'steam_id' => ['nullable', 'string', 'max:255'],
            'role'     => ['required', 'in:IGL,AWPer,Rifler,Support,Entry'],
            'team_id'  => ['required', 'exists:teams,id'],
        ]);

        Player::create($data);

        return redirect()->route('players.index')->with('success', 'Player created.');
    }
}