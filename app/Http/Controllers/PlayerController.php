<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();

        dd($players);
    }

    public function create(Request $request)
    {
        Player::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'age' => $request['age'],
            'poids' => $request['poids'],
            'long' => $request['long'],
            'foot' => $request['foot']
        ]);
    }

    public function getOne(Request $request)
    {
        dd(Player::find($request['player_id']));
    }

    public function update(Request $request)
    {
        $player = Player::find($request['player_id']);
        
        $player->firstname = $request['firstname'];
        $player->lastname = $request['lastname'];
        $player->age = $request['age'];
        $player->poids = $request['poids'];
        $player->long = $request['long'];
        $player->foot = $request['foot'];
        $player->team_id = $request['team_id'];

        $player->save();
    }

    public function delete(Request $request)
    {
        Player::destroy($request['player_id']);
    }

    public function getPlayerTeam(Request $request, Player $player)
    {
        $player = Player::find($player->id);
        dd($player->team);
    }

}
