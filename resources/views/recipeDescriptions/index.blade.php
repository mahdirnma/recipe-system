@extends('layout.app')
@section('title')
    {{$recipe->title}} ingredients
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">{{$recipe->title}} ingredients</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">descriptions</td>
                        <td class="text-center">step</td>
                    </tr>
                    </thead>
                    <tbody>
                    @if($descriptions->count()>1)
                        @for($i=0;$i<$descriptions->count();$i++)
                            <tr>
                                <td class="text-center">{{$descriptions[$i]->description}}</td>
                                <td class="text-center">step {{$i+1}}</td>
                            </tr>
                        @endfor
                    @else
                        <tr>
                            <td class="text-center">{{$descriptions[0]->description}}</td>
                            <td class="text-center"></td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$courses->links()}}</div>--}}
        </div>
@endsection
