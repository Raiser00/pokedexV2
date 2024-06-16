<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attack extends Model
{
    use HasFactory;

    public function type()
    {
        // 1 attack est lier à un type
        return $this->belongsTo(Type::class);
    }

}
