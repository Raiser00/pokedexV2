<?php

namespace App\Http\Controllers;

use App\Models\Type;

use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('typeuser.index', [
            'type'=> $types,
        ]);
    }

    public function show(Type $type)
    {
        $type = Type::find($type->id);

        return view('typeuser.show', [
            'type'=> $type,
        ]);
    }
}
