<?php

namespace App\Http\Controllers;

use App\Models\Type;

use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    public function index()
    {
        $type = Type::all();

        return view('typeuser.index', [
            'type'=> $type,
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
