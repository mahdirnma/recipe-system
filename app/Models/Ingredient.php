<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable=[
        'recipe_id',
        'foodstuff_id',
        'quantity',
    ];
    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }
    public function foodstuff(){
        return $this->belongsTo(Foodstuff::class);
    }
}
