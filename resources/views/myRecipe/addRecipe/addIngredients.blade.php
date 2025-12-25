@extends('layout.app')
@section('title')
    add ingredient
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add ingredient</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('recipe.ingredients.store',compact('recipe'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-2/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-2/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: foodstuff</label>
                            <select name="foodstuff" id="foodstuff" class="w-3/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                @foreach($foodstuffs as $foodstuff)
                                    <option value="{{$foodstuff->id}}">{{$foodstuff->title}}</option>
                                @endforeach
                            </select>
                            @error('description')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-2/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="quantity" class="font-semibold ml-5">: (gr) quantity</label>
                            <input type="number" name="quantity" id="quantity" min="1" max="1000" class="w-3/5 h-8 rounded outline-0 px-2 border border-gray-400">
                            @error('quantity')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Add Foodstuff" class="absolute bottom-0 left-180 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                        <a href="{{route('recipes.index')}}" class="absolute bottom-0 left-140 text-white bg-red-700 py-3 px-7 cursor-pointer rounded">finish</a>
                    </div>
                </form>
            </div>
        </div>
@endsection
