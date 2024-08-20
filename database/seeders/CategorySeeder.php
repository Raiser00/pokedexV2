<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'PHYSICAL',
            'imgLink' => '/storage/images/category/physical.png',
        ]);

        Category::create([
            'name'=> 'SPECIAL',
            'imgLink' => '/storage/images/category/special.png',

        ]);

        Category::create([
            'name' => 'STATUS',
            'imgLink'=> '/storage/images/category/status.png',
        ]);
    }
}
