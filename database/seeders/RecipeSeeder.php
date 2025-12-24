<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipe::create([
            'title' => 'pizza',
            'description' => 'lorem ipsum dolor sit amet',
            'type' => 'B',
            'total_time' => 50,
            'difficulty' => 3,
            'published_date' => now(),
            'category_id' => 1,
            'user_id' => 1,
            'picture' => 'pizza.jpg',
        ]);
        Recipe::create([
            'title' => 'cheese and bread',
            'description' => 'lorem ipsum dolor sit amet 2',
            'type' => 'A',
            'total_time' => 10,
            'difficulty' => 1,
            'published_date' => now(),
            'category_id' => 2,
            'user_id' => 2,
            'picture' => 'pic1.jpg',
        ]);

    }
}
