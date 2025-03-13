<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        dd($teams);
    }

    public function create(Request $request)
    {
        Team::create([
            'name' => $request['name'],
            'city' => $request['city'],
            'country' => $request['country'],
            'creation_date' => $request['date'],
        ]);
    }

    public function getOne(Request $request, Team $team)
    {
        dd(Team::find($team->id));
    }

    public function update(Request $request)
    {
        $team = Team::find($request['team_id']);
        
        $team->name = $request['name'];
        $team->city = $request['city'];
        $team->country = $request['country'];
        $team->creation_date = $request['date'];

        $team->save();
    }

    public function delete(Request $request, Team $team)
    {
        Team::destroy($team->id);
    }

    public function getPlayers(Request $request, Team $team)
    {
        $team = Team::find($team->id);
        dd($team->players);
    }
    
}
