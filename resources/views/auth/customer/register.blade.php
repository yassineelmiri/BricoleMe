@extends('main')

@section('title','Customer Registration')

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
                        <form>
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
                                id= "pw"
                                name="password"
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

                            <footer class="flex justify-end px-8 pb-8 pt-4 gap-[10px]">
                                <button  class="rounded-lg px-3 py-1 bg-indigo-500 hover:bg-indigo-400 text-white font-medium focus:shadow-outline focus:outline-none next">
                                    Register
                                </button>

                            </footer>


                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>




        </section>
    </div>





@endsection



