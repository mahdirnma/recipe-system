@extends('layout.app')
@section('title')
    add recipe Descriptions
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add recipe type A Descriptions</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('recipe.a.description.store',compact('recipe'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-2/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-4/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="w-9/12 h-48 rounded outline-0 p-2 border border-gray-400">{{old('description')}}</textarea>
                            @error('description')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Continue" class="absolute bottom-0 left-160 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                </form>
            </div>
        </div>
@endsection
