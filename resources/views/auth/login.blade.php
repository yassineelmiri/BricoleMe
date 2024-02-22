@extends('main')

@section('title','Login')

@section('content')
    <div class="w-[100vw] h-[100vh] flex mx-auto justify-center items-center">
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
                        <form>

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
                                href="#!"
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
                            <a
                                class="mb-3 flex w-[60%] ml-[20%] items-center justify-center rounded bg-info px-7 pb-2.5 pt-3 text-center text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(84,180,211,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)]"
                                style="background-color: #55acee"
                                href="#!"
                                role="button"
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="mr-2 h-3.5 w-3.5"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                                Continue with Twitter
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
