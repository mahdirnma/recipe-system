<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Foodstuff;
use App\Models\Recipe;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $recipes = $user->recipes;
        return view('myRecipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('myRecipe.addRecipe.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest $request)
    {
        $user = auth()->user();
        $recipe = $user->recipes()->create($request->validated());
        if ($request->type=='A'){
            return view('myRecipe.addRecipe.typeADescription', compact('recipe'));
        }/*elseif ($request=$request->type=='B'){
            return redirect()->route('recipe.b.description.store',compact('recipe'));
        }*/
    }

    public function ADescriptions(Recipe $recipe,Request $request)
    {
        $description=$recipe->recipeDescriptions()->create([
            'description'=>$request->description
        ]);
        $foodstuffs=Foodstuff::all();
        if ($description){
            return view('myRecipe.addRecipe.addIngredients', compact('recipe','foodstuffs'));
        }
    }
    public function storeIngredients(Recipe $recipe,Request $request){
        $ingredient=$recipe->ingredients()->create([
            'foodstuff_id'=>$request->foodstuff,
            'quantity'=>$request->quantity
        ]);
        $foodstuffs=Foodstuff::all();
        if ($ingredient){
            return view('myRecipe.addRecipe.addIngredients', compact('recipe','foodstuffs'))->with('success', 'Ingredient created');
        }
        return view('myRecipe.addRecipe.addIngredients', compact('recipe','foodstuffs'))->with('unsuccess', 'Ingredient didnt create');
    }
    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    public function descriptions(Recipe $recipe)
    {
        $descriptions=$recipe->recipeDescriptions;
        return view('recipeDescriptions.index', compact('descriptions','recipe'));
    }
    public function ingredients(Recipe $recipe){
        $ingredients=$recipe->ingredients;
        return view('ingredients.index', compact('ingredients','recipe'));
    }
}
