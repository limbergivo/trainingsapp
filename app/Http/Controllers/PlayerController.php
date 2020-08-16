<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('player.index' , ['players' => $players ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'last_name'=>'required'
        ]);

        $player = new Player([
            'name' => $request->get('name'),
            'last_name' => $request->get('last_name'),
            'minutes_played' => $request->get('minutes_played'),
            'games_played' => $request->get('games_played'),
            'injury' => $request->get('injury'),
        ]);
        $player->save();
        return redirect('/players')->with('success', 'player saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        return view('player.edit',['player' => $player ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'last_name'=>'required'
        ]);

        $player = Player::find($id);
        $player->name =  $request->get('name');
        $player->last_name = $request->get('last_name');
        $player->minutes_played = $request->get('minutes_played');
        $player->games_played = $request->get('games_played');
        $player->injury = $request->get('injury');
        $player->save();


        return redirect('/players')->with('success', 'player updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
