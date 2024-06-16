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
