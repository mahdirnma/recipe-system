<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeDescription extends Model
{
    protected $fillable=[
        'description',
        'recipe_id',
    ];
    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }

}
