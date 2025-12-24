<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foodstuff extends Model
{
    protected $fillable=[
        'title',
    ];
    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
}
