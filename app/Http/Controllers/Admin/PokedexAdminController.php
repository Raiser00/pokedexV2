<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonCreateRequest;
use App\Http\Requests\PokemonUpdateRequest;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PokedexAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        //$pokemon = Pokemon::paginate(12);



        $pokemon=Pokemon::with(['type1', 'type2'])->get();

        return view('admin.pokedexadmin.index', [
            'pokemon' => $pokemon,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Pokemon $pokemon)
    {
        $types=Type::all();
        return view('admin.pokedexadmin.create', [
            'types' => $types,
            'pokemon' => $pokemon,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PokemonCreateRequest $request)
    {
        // donnée a valider
        $validated = $request->validated();

        $pokemon = new Pokemon();
        $pokemon->name = $validated['name'];
        $pokemon->description = $validated['description'];
        $pokemon->hp = $validated['hp'];
        $pokemon->att = $validated['att'];
        $pokemon->attSpe = $validated['attSpe'];
        $pokemon->def = $validated['def'];
        $pokemon->defSpe = $validated['defSpe'];
        $pokemon->vit = $validated['vit'];
        $pokemon->size = $validated['size'];
        $pokemon->weight = $validated['weight'];
        $pokemon->type1_id = $validated['type1_id'];
        $pokemon->type2_id = $validated['type2_id'] ?? null;

        // recupere l'image
        if ($request->hasFile('imgLink')) {
            $path = $request->file('imgLink')->store('images/pokemon', 'public');
            $path = '/storage/' . $path;
            $pokemon->imgLink = $path;
        }

        $pokemon->save();

        return redirect()->route('pokemon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        $types = Type::all();
        return view('admin.pokedexadmin.edit',[
            'pokemon' => $pokemon,
            'types' => $types,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PokemonUpdateRequest $request, Pokemon $pokemon)
    {
        // donnée a valider

        //dd($pokemon);
        $validated = $request->validated();

        $pokemon = Pokemon::findOrFail($pokemon->id);
        $pokemon->name = $validated['name'];
        $pokemon->description = $validated['description'];
        $pokemon->hp = $validated['hp'];
        $pokemon->att = $validated['att'];
        $pokemon->attSpe = $validated['attSpe'];
        $pokemon->def = $validated['def'];
        $pokemon->defSpe = $validated['defSpe'];
        $pokemon->vit = $validated['vit'];
        $pokemon->size = $validated['size'];
        $pokemon->weight = $validated['weight'];
        $pokemon->type1_id = $validated['type1_id'];
        $pokemon->type2_id = $validated['type2_id'] ?? null;

        // recupere l'image
        // if ($request->hasFile('imgLink')) {
        //     $path = $request->file('imgLink')->store('pokemon', 'public');
        //     $pokemon->imgLink = $path;
        // }

        $pokemon->save();



        return redirect()->route('pokemon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();

        return redirect()->back();
    }
}
