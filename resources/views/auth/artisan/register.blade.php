@extends('main')

@section('title','Artisan Registration')

@section('content')
    <div class="w-[100vw] h-[100vh] flex mx-auto justify-center items-center " id="register_page_one">
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
                        <div>
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent"
                                type="text" placeholder="Username"
                                id= "username"
                                name="username"
                            />

                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                type="text" placeholder="Email"
                                id= "email"
                                name="email"
                            />

                            <input
                                class="w-full px-8  py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                id= "pw"
                                name="password"
                                type="password" placeholder="Password"/>
                            <input
                                class="w-full px-8  py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                id="confirm_pw"
                                type="password" placeholder="Confirm Password"/>

                            <select class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5">
                                <option>Choose Your Profession</option>
                                <option>Construction</option>
                                <option>House Painting</option>
                                <option>Electrician</option>
                                <option>Plumber</option>

                            </select>

                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                type="text" placeholder="Phone Number"
                                id= "phone"
                                name="phone_number"
                            />

                            <select class="w-full px-8 mb-[1.5rem] py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5">
                                <option>Choose Your City</option>
                                <option>SAFI</option>
                                <option>KECH</option>
                                <option>CASABLANCA</option>
                            </select>
                            <a href="{{route('login.view')}}"> <p class="text-gray-500 mb-[1.5rem] font-medium underline text-center hover:text-gray-400">Already have an account ? Log In</p></a>


                        </div>
                        <footer class="flex justify-end px-8 pb-8 pt-4 gap-[10px]">
                            <button  class="rounded-lg px-3 py-1 bg-indigo-500 hover:bg-indigo-400 text-white font-medium focus:shadow-outline focus:outline-none next">
                                Next
                            </button>

                        </footer>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="w-[100vw] h-[100vh] flex mx-auto justify-center items-center hidden" id="register_page_two">
        <section class="sm:w-[100%] h-[100vh] lg:bg-slate-100 lg:w-[70%] lg:h-[80vh] lg:rounded-xl flex justify-center items-center">
            <div class="w-[80%] h-[80%] flex justify-center items-center sm:px-8 md:px-16 sm:py-8">
                <main class="container mx-auto ">
                    <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" >
                        <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                            <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                    <span>Share Pictures Of Your Works With Clients</span>
                                </p>
                                <input id="hidden-input" type="file" multiple class="hidden " />
                                <button class="upload_file mt-2 rounded-sm px-3 py-1 bg-gray-500 rounded-lg text-white font-medium hover:bg-gray-400 focus:shadow-outline focus:outline-none">
                                    Upload a file
                                </button>
                            </header>

                            <h1 class="pt-3 pb-3 font-semibold text-indigo-500 underline sm:text-lg text-gray-900">
                                Chosen Pictures :
                            </h1>

                            <div>
                                <div class="flex flex-col gap-[1rem]">
                                    <img src="{{asset('images/wood.jpg')}}" class="w-[120px] h-[120px] border-1 rounded-full" alt="Artisan Work">
                                    <div class="flex gap-[10px] ml-[5px]">
                                        <p class="font-medium">wood.jpg</p>
                                        <button><img src="{{asset('images/trash.png')}}" class="w-[30px] h-[30px]" alt=""></button>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <footer class="flex justify-end px-8 pb-8 pt-4 gap-[10px]">
                            <button id="back_btn" class="ml-3 rounded-lg bg-gray-400 text-white px-3 py-1 font-medium hover:bg-gray-500 focus:shadow-outline focus:outline-none">
                                Back
                            </button>
                            <button class="rounded-lg px-3 py-1 bg-indigo-500 hover:bg-indigo-400 text-white font-medium focus:shadow-outline focus:outline-none">
                                <a href="">Register</a>
                            </button>

                        </footer>
                    </article>
                </main>
            </div>

        </section>
    </div>





@endsection

<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="{{asset('js/register.js')}}"></script>
