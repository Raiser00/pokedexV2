<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attack;
use app\Http\Requests\AttackCreateRequest;
use App\Http\Requests\AttackUpdateRequest;
use Illuminate\Http\Request;

class AttackAdminController extends Controller
{

    public function index()
    {
        $attacks = Attack::all();

        return view('admin.attackadmin.index', [
            'attack' => $attacks,
        ]);
    }

    public function create(Attack $attack)
    {
        $attack = Attack::all();

        return view('admin.attackadmin.create', [
            'attack' => $attack,
        ]);
    }

    public function store(AttackCreateRequest $request)
    {
        // donnée a valider
        $validated = $request->validated();

        $attack = new Attack();
        $attack->name = $validated['name'];
        $attack->power = $validated['power'];
        $attack->accuracy = $validated['accuracy'];
        $attack->maxpp = $validated['maxpp'];
        $attack->description = $validated['description'];
        $attack->category = $validated['category'];
        $attack->type1_id = $validated['type1_id'];

        // recupere l'image
        if ($request->hasFile('imgLink')) {
            $path = $request->file('imgLink')->store('images/category', 'public');
            $path = '/storage/' . $path;
            $attack->imgLink = $path;
        }

        $attack->save();

        return redirect()->route('attack.index');

    }

    public function edit(Attack $attack)
    {
        $attack = Attack::all();
        return view('admin.attackadmin.edit',[
            'attack' => $attack,
        ]);
    }

    public function update(AttackUpdateRequest $request, Attack $attack)
    {
        $validated = $request->validated();

        $attack = Attack::findOrFail($attack->id);
        $attack->name = $validated['name'];
        $attack->power = $validated['power'];
        $attack->accuracy = $validated['accuracy'];
        $attack->maxpp = $validated['maxpp'];
        $attack->description = $validated['description'];
        $attack->category = $validated['category'];
        $attack->type1_id = $validated['type1_id'];

        $attack->save();

        return redirect()->route('attack.index');
    }

    public function destroy(Attack $attack)
    {
        $attack->delete();

        return redirect()->back();
    }
}