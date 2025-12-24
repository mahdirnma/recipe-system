<?php

namespace Database\Seeders;

use App\Models\RecipeDescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecipeDescription::create([
            'description' => 'preparing dough',
            'recipe_id' => 1,
        ]);
        RecipeDescription::create([
            'description' => 'preparing ingredients',
            'recipe_id' => 1,
        ]);
        RecipeDescription::create([
            'description' => 'cook',
            'recipe_id' => 1,
        ]);
        RecipeDescription::create([
            'description' => 'preparing bread and cheese and then eat :) ',
            'recipe_id' => 2,
        ]);

    }
}
