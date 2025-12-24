<?php

namespace App\Http\Controllers;

use App\Models\Foodstuff;
use App\Http\Requests\StoreFoodstuffRequest;
use App\Http\Requests\UpdateFoodstuffRequest;

class FoodstuffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFoodstuffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Foodstuff $foodstuff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foodstuff $foodstuff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoodstuffRequest $request, Foodstuff $foodstuff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foodstuff $foodstuff)
    {
        //
    }
}
