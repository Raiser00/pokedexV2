<?php

namespace App\Http\Controllers;

use App\Models\Attack;
use Illuminate\Http\Request;

class AttackUserController extends Controller
{
    public function index(){
        $attack = Attack::paginate(12);

        $attack = Attack::with(['type1'])->get();

        return view('attackuser.index', [
            'attack' => $attack,
        ]);
    }
        public function show($id){
            $attack = Attack::find($id);
            return view('attackuser.show', [
                'attack' => $attack,
            ]);
        }
}
