<?php

namespace Database\Seeders;

use App\Models\Foodstuff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodstuffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foodstuff::create([
            'title' => 'potato',
        ]);
        Foodstuff::create([
            'title' => 'tomato',
        ]);
        Foodstuff::create([
            'title' => 'bread',
        ]);
        Foodstuff::create([
            'title' => 'sugar',
        ]);
        Foodstuff::create([
            'title' => 'salt',
        ]);
        Foodstuff::create([
            'title' => 'oil',
        ]);
        Foodstuff::create([
            'title' => 'cheese',
        ]);
        Foodstuff::create([
            'title' => 'meat',
        ]);

    }
}
