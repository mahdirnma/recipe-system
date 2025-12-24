<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingredient::create([
            'recipe_id' => 1,
            'foodstuff_id' => 2,
            'quantity' => 200,
        ]);
        Ingredient::create([
            'recipe_id' => 1,
            'foodstuff_id' => 6,
            'quantity' => 200,
        ]);
        Ingredient::create([
            'recipe_id' => 1,
            'foodstuff_id' => 7,
            'quantity' => 50,
        ]);
        Ingredient::create([
            'recipe_id' => 1,
            'foodstuff_id' => 8,
            'quantity' => 50,
        ]);
        Ingredient::create([
            'recipe_id' => 2,
            'foodstuff_id' => 3,
            'quantity' => 100,
        ]);
        Ingredient::create([
            'recipe_id' => 2,
            'foodstuff_id' => 7,
            'quantity' => 50,
        ]);

    }
}
