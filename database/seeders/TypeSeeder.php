<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // donnée des types a ajouter a la db
        Type::create([
            'name' => 'Normal',
            'imgLink' => '/storage/images/type/Normal.png',
        ]);

        Type::create([
            'name' => 'Vol',
            'imgLink' => '/storage/images/type/Vol.png',
        ]);
    }
}
