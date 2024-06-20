<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attack extends Model
{
    use HasFactory;

    public function type1()
    {
        // 1 attack est lier à un type
        return $this->belongsTo(Type::class, "type1_id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
