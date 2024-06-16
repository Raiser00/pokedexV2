<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    public function type1()
    {
        // 1 pokemon peut etre d'un ou 2 types different
        return $this->belongsTo(Type::class, "type1_id");
    }

    public function type2()
    {
        return $this->belongsTo(Type::class, "type2_id");
    }

    public function attacks()
    {
        //1 pokemon peut apprendre plusieur attacks (max 4 utilisable)
        return $this->hasMany(Attack::class);
    }
}
