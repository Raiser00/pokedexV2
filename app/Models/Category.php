<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function attacks()
    {
        // 1 category peut etre attribuer à plusieurs attacks
        return $this->hasMany(Attack::class);
    }
}
