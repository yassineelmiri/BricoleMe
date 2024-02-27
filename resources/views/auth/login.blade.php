@extends('main')

@section('title','Login')

@section('content')
    <div class="w-[100vw] h-[100vh] flex flex-col gap-[1rem] mx-auto justify-center items-center">
        @if ($errors->any())
            <div class="w-[50%] bg-red-300 font-medium text-red-700 rounded-lg px-[2.5%] py-[0.5rem]">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div id="validation_msg" class="relative w-[30%] flex justify-center items-center rounded-lg h-[50px] bg-green-500 text-white font-medium ">
                <p>{{session('success')}}</p>
            </div>
            <script defer>
                // let message = document.getElementById('validation_msg');
                setTimeout(function (){
                    $('#validation_msg').fadeOut();
                },1500);

            </script>
        @endif
        <section class="sm:w-[100%] h-[100vh] lg:bg-slate-100 lg:w-[70%] lg:h-[80vh] lg:rounded-xl">
            <div class="container h-full px-6 py-24">
                <div
                    class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
                    <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12">
                        <img
                            src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="w-full"
                            alt="Phone image" />
                    </div>

                    <div class="md:w-8/12 lg:ml-6 lg:w-5/12">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <input
                                class="w-[60%] ml-[20%] px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent"
                                type="text" placeholder="Email Or Username"
                                id= "email"
                                name="email"
                            />

                            <input
                                class="w-[60%] ml-[20%] px-8 mb-[1.5rem] py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                id= "pw"
                                name="password"
                                type="password" placeholder="Password"/>

                            <p class="text-gray-500 font-medium underline cursor-pointer mb-[1.5rem] text-center hover:text-gray-400" id="register_link">Don't have an account yet ? create one</p>

                            <button
                                type="submit"
                                class="inline-block w-[60%] ml-[20%] rounded bg-indigo-500 px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-indigo-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                Sign In
                            </button>
                            <div
                                class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
                                <p
                                    class="mx-4 mb-0 text-center font-semibold dark:text-neutral-200">
                                    OR
                                </p>
                            </div>

                            <a
                                class="mb-3 flex w-[60%] ml-[20%] items-center justify-center rounded bg-primary px-7 pb-2.5 pt-3 text-center text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                style="background-color: #3b5998"
                                href="{{route('auth.facebook')}}"
                                role="button"
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="mr-2 h-3.5 w-3.5"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                                Continue with Facebook
                            </a>
                            <a class="mb-3 flex w-[60%] gap-[10px] ml-[20%] items-center justify-center rounded bg-red-600 px-7 pb-2.5 pt-3 text-center text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#d93025] transition duration-150 ease-in-out hover:bg-red-700 hover:shadow-[0_8px_9px_-4px_rgba(217,48,37,0.3),0_4px_18px_0_rgba(217,48,37,0.2)] focus:bg-red-700 focus:shadow-[0_8px_9px_-4px_rgba(217,48,37,0.3),0_4px_18px_0_rgba(217,48,37,0.2)] focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-[0_8px_9px_-4px_rgba(217,48,37,0.3),0_4px_18px_0_rgba(217,48,37,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(217,48,37,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(217,48,37,0.2),0_4px_18px_0_rgba(217,48,37,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(217,48,37,0.2),0_4px_18px_0_rgba(217,48,37,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(217,48,37,0.2),0_4px_18px_0_rgba(217,48,37,0.1)]"
                               style="background-color: #DB4437"
                               href="{{route('auth.google')}}"
                               role="button"
                               data-te-ripple-init
                               data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48">
                                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                </svg>
                                Continue with Google
                            </a>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div id="register_choice" class="absolute w-full h-full inset-0 bg-gray-700 backdrop-filter bg-opacity-50 backdrop-blur-md z-20 flex items-center justify-center hidden">
        <div class="relative px-[1.5rem] py-[3rem] rounded-lg bg-slate-100 flex justify-center">
            <div class="absolute top-0 left-0 bg-orange-400 rounded-t-lg w-full h-[30px] flex justify-end items-center">
                <img id="close_btn" src="{{asset('images/close.png')}}" class="w-[22.5px] h-[22.5px] cursor-pointer mr-[0.75rem]" alt="">
            </div>
            <div class="ml-[2.5rem] flex items-center justify-center gap-[3rem]">
                <div class="flex flex-col gap-[0.75rem]">
                    <img src="{{asset('images/artisan.png')}}" class="w-[150px] h-[150px] rounded-full " alt="">
                    <p class="text-center font-medium text-gray-600">Register As  </p>
                    <button class="px-[0.5rem] py-[0.25rem] text-white font-medium bg-indigo-500 rounded-lg hover:bg-indigo-400"><a href="{{route('artisan.register.view')}}">AN artisan</a></button>
                </div>
                <div class="flex flex-col gap-[0.75rem]">
                    <img src="{{asset('images/customer.png')}}" class="w-[150px] h-[150px] rounded-full " alt="">
                    <p class="text-center font-medium text-gray-600">Register As </p>
                    <button class="px-[0.5rem] py-[0.25rem] text-white font-medium bg-orange-500 rounded-lg hover:bg-orange-400"><a href="{{route('customer.register.view')}}">A customer</a></button>
                </div>
                <div></div>
            </div>
        </div>
    </div>

@endsection
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="{{asset('js/login.js')}}"></script>
