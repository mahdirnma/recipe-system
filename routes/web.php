<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class,'loginForm'])->name('login.form');
    Route::post('/login', [AuthController::class,'login'])->name('login');
    Route::get('/register', [AuthController::class,'registerForm'])->name('register.form');
    Route::post('/register', [AuthController::class,'register'])->name('register');
});
Route::middleware('auth')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('home');
    Route::resource('/recipes', RecipeController::class);
    Route::get('/recipe/{recipe}/descriptions',[RecipeController::class,'descriptions'])->name('recipe.descriptions');
    Route::post('/recipe/descriptions/{recipe}/a',[RecipeController::class,'ADescriptions'])->name('recipe.a.description.store');
    Route::post('/recipe/{recipe}/descriptions/b',[RecipeController::class,'BDescriptions'])->name('recipe.b.description.store');
    Route::post('/recipe/ingredients/{recipe}/store',[RecipeController::class,'storeIngredients'])->name('recipe.ingredients.store');
    Route::get('/recipe/{recipe}/ingredients',[RecipeController::class,'ingredients'])->name('recipe.ingredients');

    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
});
