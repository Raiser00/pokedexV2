<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function Pokemons()
    {
        // 1 type peut etre attribuer a plusieurs pokemon
        return $this->hasMany(Pokemon::class);
    }

    public function attacks()
    {
        // 1 type peut etre attribuer à plusieurs attacks
        return $this->hasMany(Attack::class);
    }
}
