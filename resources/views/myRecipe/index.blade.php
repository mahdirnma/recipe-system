@extends('layout.app')
@section('title')
    my recipes
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('recipes.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add recipe +</a>
                <h2 class="text-xl">my recipes</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">recipe</td>
                        <td class="text-center">ingredients</td>
                        <td class="text-center">picture</td>
                        <td class="text-center">category</td>
                        <td class="text-center">updated date</td>
                        <td class="text-center">published date</td>
                        <td class="text-center">difficulty</td>
                        <td class="text-center">total time</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recipes as $recipe)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('recipes.destroy',compact('recipe'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600 cursor-pointer">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('recipes.edit',compact('recipe'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600 cursor-pointer">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('recipe.descriptions',compact('recipe'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-orange-800 cursor-pointer">recipe descriptions</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('recipe.ingredients',compact('recipe'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-purple-600 cursor-pointer">recipe ingredients</button>
                                </form>
                            </td>
                            <td class="text-center">{{$recipe->picture}}</td>
                            <td class="text-center">{{$recipe->category->title}}</td>
                            <td class="text-center">{{$recipe->updated_date}}</td>
                            <td class="text-center">{{$recipe->published_date}}</td>
                            <td class="text-center">{{$recipe->difficulty}}</td>
                            <td class="text-center">{{$recipe->total_time}}</td>
                            <td class="text-center">{{$recipe->description}}</td>
                            <td class="text-center">{{$recipe->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$courses->links()}}</div>--}}
        </div>
@endsection
