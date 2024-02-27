@extends('main')

@section('title','Home')

@section('content')



    <div id="register_choice" class="absolute w-full h-full inset-0 bg-gray-700 backdrop-filter bg-opacity-50 backdrop-blur-md z-20 flex items-center justify-center ">
        <div class="bg-slate-100 rounded-xl w-[60%] h-[60vh] pt-[1rem]">
            <div class="flex flex-col gap-[1rem] justify-center items-center">
                <img class="w-[100px] h-[100px] rounded-full" src="{{asset('images/artisan.png')}}" alt="artisan picture">
                <p class="font-medium text-[1.1rem] text-green-700">Welcome To Bricole Me PLateform</p>
            </div>
        </div>
    </div>


@endsection
