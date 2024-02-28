@extends('main')

@section('title','Registration Type')

@section('content')

    <div id="register_choice" class="absolute w-full h-full inset-0 bg-gray-700 backdrop-filter bg-opacity-50 backdrop-blur-md z-20 flex items-center justify-center">
        <div class="relative px-[1.5rem] py-[3rem] rounded-lg bg-slate-100 flex justify-center">
            <div class="absolute top-0 left-0 bg-orange-400 rounded-t-lg w-full h-[30px] flex justify-end items-center">

            </div>
            <div class="absolute top-[40px]">
                <p class="text-gray-500 text-center font-medium">You don't have an account Yet , Pls Register !</p>
            </div>
            <div class=" flex items-center justify-center gap-[3rem] mt-[1.5rem]">
                <div class="  flex flex-col gap-[0.75rem]">
                    <img src="{{asset('images/artisan.png')}}" class="w-[150px] h-[150px] rounded-full " alt="">
                    <p class="text-center font-medium text-gray-600">Register As  </p>
                    <button class="px-[0.5rem] py-[0.25rem] text-white font-medium bg-indigo-500 rounded-lg hover:bg-indigo-400"><a href="{{route('auth.social.register.artisan')}}">AN artisan</a></button>
                </div>
                <div class="flex flex-col gap-[0.75rem]">
                    <img src="{{asset('images/customer.png')}}" class="w-[150px] h-[150px] rounded-full " alt="">
                    <p class="text-center font-medium text-gray-600">Register As </p>
                    <button class="px-[0.5rem] py-[0.25rem] text-white font-medium bg-orange-500 rounded-lg hover:bg-orange-400"><a href="{{route('auth.social.register.customer')}}">A customer</a></button>
                </div>
            </div>
        </div>
    </div>

@endsection
