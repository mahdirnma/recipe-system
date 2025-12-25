@extends('layout.app')
@section('title')
    add recipe
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add recipe</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('recipes.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: title</label>
                            <input type="text" name="title" value="{{old('title')}}" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('title')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="w-2/5 h-28 rounded outline-0 p-2 border border-gray-400">{{old('description')}}</textarea>
                            @error('description')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="type" class="font-semibold ml-5">: type</label>
                            <select name="type" id="type" class="w-2/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                            @error('type')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>

                        <input type="submit" value="Continue" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="total_time" class="font-semibold ml-5">: total time</label>
                            <input type="number" name="total_time" min="1" max="500" value="{{old('total_time')}}" id="current_weight" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('total_time')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="difficulty" class="font-semibold ml-5">: difficulty</label>
                            <select name="difficulty" id="difficulty" class="w-2/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                <option value="1">easy</option>
                                <option value="2">medium</option>
                                <option value="3">hard</option>
                            </select>
                            @error('difficulty')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="published_date" class="font-semibold ml-5">: published date</label>
                            <input type="date" name="published_date" value="{{old('published_date')}}" id="published_date" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('published_date')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="category_id" class="font-semibold ml-5">: category</label>
                            <select name="category_id" id="category_id" class="w-2/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="picture" class="font-semibold ml-5">: picture</label>
                            <input type="text" name="picture" value="{{old('picture')}}" id="picture" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('picture')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
