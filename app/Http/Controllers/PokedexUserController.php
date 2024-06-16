<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexUserController extends Controller
{
    public function index(){
        $pokemons = Pokemon::all();

        return view('pokedexuser.index', [
            'pokemons' => $pokemons,
        ]);
    }


    // public function index(){
    //     $pokemon = Pokemon::with(['type1', 'type2'])->get();
    //     return view('pokedexuser.index', [
    //         'pokedexuser' => $pokemon,
    //     ]);
    // }

    // public function show($id){
    //     $pokemon=Pokemon::find($id);
    //     return view('pokemon.show', [
    //         'pokemon' => $pokemon,
    //     ]);
    // }
}
