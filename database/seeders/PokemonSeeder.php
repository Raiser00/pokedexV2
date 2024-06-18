<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ajout des pokemon dans la db
        Pokemon::create([
            'name' => 'MissingNo.',
            'imgLink' => '/storage/images/pokemon/MissingNo.png',
            'description' => 'MissingNo. est un système de gestion de bug du jeu pokemon. Il est difficile de le rencontrer et apparait que sous certaines conditions',
            'hp' => 12,
            'att' => 12,
            'attSpe' => 12,
            'def' => 12,
            'defSpe' => 12,
            'vit' => 12,
            'size' => 12,
            'weight' => 12,
            'type1_id' => 2,
            'type2_id' => 1
        ]);

        Pokemon::create([
            'name' => 'Ricochico',
            'imgLink' => '/storage/images/pokemon/Ricochico.png',
            'description' => 'Ricochico est un pokemon venant des archipeles ulola. Ses attaques sont un mix de vent et de feu. ',
            'hp' => 5,
            'att' => 3,
            'attSpe' => 6,
            'def' => 5,
            'defSpe' => 5,
            'vit' => 8,
            'size' => 2.1,
            'weight' => 68.4,
            'type1_id' => 2,
            'type2_id' => 6
        ]);

        Pokemon::create([
            'name' => 'Flamadron',
            'imgLink' => '/storage/images/pokemon/Flamadron.png',
            'description' => 'Flamadron est un puissant dragon de flamme et docile. ',
            'hp' => 6,
            'att' => 5,
            'attSpe' => 8,
            'def' => 5,
            'defSpe' => 5,
            'vit' => 8,
            'size' => 1.9,
            'weight' => 68.4,
            'type1_id' => 6,
            'type2_id' => null
        ]);
    }
}

// $table->id();
//             $table->string('name')->unique();
//             $table->string('imgLink');
//             $table->text('description');
//             $table->integer('hp');
//             $table->integer('att');
//             $table->integer('attSpe');
//             $table->integer('def');
//             $table->integer('defSpe');
//             $table->integer('vit');
//             $table->float('size');
//             $table->float('weight');
//             $table->foreignId('type1_id')->references('id')->on('types');
//             $table->foreignId('type2_id')->nullable()->references('id')->on('types');
//             $table->timestamps();
