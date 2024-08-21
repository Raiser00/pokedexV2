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
        ]); //1

        Type::create([
            'name' => 'Vol',
            'imgLink' => '/storage/images/type/Vol.png',
        ]);//2

        Type::create([
            'name' => 'Sol',
            'imgLink' => '/storage/images/type/Sol.png',
        ]);//3

        Type::create([
            'name' => 'Roche',
            'imgLink' => '/storage/images/type/Roche.png',
        ]);//4

        Type::create([
            'name' => 'Eau',
            'imgLink' => '/storage/images/type/Eau.png',
        ]);//5

        Type::create([
            'name' => 'Feu',
            'imgLink' => '/storage/images/type/Feu.png',
        ]);//6

        Type::create([
            'name' => 'Plante',
            'imgLink' => '/storage/images/type/Plante.png',
        ]);//7

        Type::create([
            'name' => 'Combat',
            'imgLink' => '/storage/images/type/Combat.png',
        ]);//8

        Type::create([
            'name' => 'Psy',
            'imgLink' => '/storage/images/type/Psy.png',
        ]);//9

        Type::create([
            'name' => 'Spectre',
            'imgLink' => '/storage/images/type/Spectre.png',
        ]);//10

        Type::create([
            'name' => 'Ténèbres',
            'imgLink' => '/storage/images/type/Ténèbres.png',
        ]);//11

        Type::create([
            'name' => 'Poison',
            'imgLink' => '/storage/images/type/Poison.png',
        ]);//12

        Type::create([
            'name' => 'Insect',
            'imgLink' => '/storage/images/type/Insect.png',
        ]);//13

        Type::create([
            'name' => 'Electric',
            'imgLink' => '/storage/images/type/Electric.png',
        ]);//14

        Type::create([
            'name' => 'Glace',
            'imgLink' => '/storage/images/type/Glace.png',
        ]);//15

        Type::create([
            'name' => 'Dragon',
            'imgLink' => '/storage/images/type/Dragon.png',
        ]);//16

        Type::create([
            'name' => 'Fée',
            'imgLink' => '/storage/images/type/Fée.png',
        ]);//17

        Type::create([
            'name' => 'Acier',
            'imgLink' => '/storage/images/type/Acier.png',
        ]);//18
    }
}
