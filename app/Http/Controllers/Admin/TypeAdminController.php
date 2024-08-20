<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\TypeCreateRequest;
use App\Http\Requests\TypeUpdateRequest;
use Illuminate\Http\Request;

class TypeAdminController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('admin.typeadmin.index', [
            'type'=> $types,
        ]);
    }

    public function create()
    {
        $type = Type::all();

        return view('admin.typeadmin.create', [
            'type'=> $type,
        ]);
    }

    public function store(TypeCreateRequest $request)
    {
        $validated = $request->validated();

        $type = new Type();
        $type->name = $validated['name'];
        $type->description = $validated['description'];
        $type->type_id = $validated['type_id'];

        if ($request->hasFile('imgLink')) {
            $path = $request->file('imgLink')->store('images/type', 'public');
            $path = '/storage/' . $path;
            $type->imgLink = $path;
        }

        $type->save();

        return redirect()->route('type.index');
    }

    
}
