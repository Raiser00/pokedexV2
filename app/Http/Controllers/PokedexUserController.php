<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexUserController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();

        return view('pokemon.index', [
            'pokemon' =>$pokemon,
        ]);
    }

    // public function show($id){
    //     $pokemon=Pokemon::find($id);
    //     return view('pokemon.show', [
    //         'pokemon' => $pokemon,
    //     ]);
    // }
}
