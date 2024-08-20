<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public const PHYSICAL = "physical";
    public const SPECIAL = "special";
    public const STATUS = "status";

    public static function category()
    {
        return [
            self::PHYSICAL,
            self::SPECIAL,
            self::STATUS,
        ];
    }

    public function attacks()
    {
        // 1 category peut etre attribuer à plusieurs attacks
        return $this->hasMany(Attack::class);
    }
}
