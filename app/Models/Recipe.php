<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable=[
        'title',
        'description',
        'type',
        'total_time',
        'difficulty',
        'published_date',
        'updated_date',
        'category_id',
        'user_id',
        'picture',
        'is_active',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function recipeDescriptions()
    {
        return $this->hasMany(RecipeDescription::class);
    }
}
