<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attack;

class AttackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attack::create([
            'name' => 'Aéroblast',
            'power' => 100,
            'accuracy' => 95,
            'maxpp' => 5,
            'description' => 'Le lanceur projette une tornade sur la cible pour infliger des dégâts. Taux de critiques élevé.',
            'category_id' => 1,
            'imgLinkCat' => '/storage/images/category/physical.png',
            'type_id' => 2,
            'imgLinkType'=> '/storage/images/type/Vol.png',
        ]);

        Attack::create([
            'name' => 'Tonnerre',
            'power' => 90,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'Une grosse décharge électrique tombe sur la cible, ce qui peut aussi la paralyser.',
            'category_id' => 2,
            'imgLinkCat' => '/storage/images/category/special.png',
            'type_id' => 14,
            'imgLinkType'=> '/storage/images/type/Electric.png',
        ]);

        Attack::create([
            'name' => 'Zone Étrange',
            'power' => 0,
            'accuracy' => 0,
            'maxpp' => 10,
            'description' => 'Le lanceur crée une zone mystérieuse où la Défense et la Défense Spéciale de tous les Pokémon sont inversées pendant cinq tours.',
            'category_id' => 3,
            'imgLinkCat' => '/storage/images/category/status.png',
            'type_id' => 9,
            'imgLinkType'=> '/storage/images/type/Psy.png',
        ]);

        Attack::create([
            'name' => 'Ultralaser',
            'power' => 150,
            'accuracy' => 90,
            'maxpp' => 5,
            'description' => 'Le lanceur projette un puissant rayon sur la cible, mais doit se reposer au tour suivant.',
            'category_id' => 2,
            'imgLinkCat' => '/storage/images/category/special.png',
            'type_id' => 1,
            'imgLinkType'=> '/storage/images/type/Normal.png',
        ]);

        Attack::create([
            'name' => 'Séisme',
            'power' => 100,
            'accuracy' => 100,
            'maxpp' => 10,
            'description' => 'Le lanceur provoque un tremblement de terre touchant tous les Pokémon autour de lui.',
            'category_id' => 1,
            'imgLinkCat' => '/storage/images/category/physical.png',
            'type_id' => 3,
            'imgLinkType'=> '/storage/images/type/Sol.png',
        ]);
    }
}
