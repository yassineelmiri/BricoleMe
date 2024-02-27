@extends('main')

@section('title','Artisan Registration')

@section('content')
    <div class="w-[100vw] h-[100vh] flex mx-auto justify-center items-center flex-col gap-[1rem]" id="register_page_one">
        <x-errors/>

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
                        <form action="{{route('auth.social.customer.register')}}" method="POST">
                            @csrf
                            <div>
                                <input type="hidden" name="social_provider_id" value="{{$social_provider_id}}"/>
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent"
                                    type="text" placeholder="Username"
                                    id= "username"
                                    name="name"
                                    value="{{$name}}"
                                />

                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                    type="text" placeholder="Email"
                                    id= "email"
                                    name="email"
                                    value="{{$email}}"
                                />

                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                    type="text" placeholder="Phone Number"
                                    id= "phone"
                                    name="phone_number"
                                />

                                <select id="city" name='city' class=" mb-[1.5rem] w-full px-8 h-[40px] bg-gray-100 border border-gray-200 rounded-lg font-medium bg-gray-100 placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="">Select Your City</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city}}">{{$city}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <footer class="flex justify-center px-8 pb-8 pt-4 gap-[10px]">
                                <button type="submit" class="rounded-lg w-[30%] py-[0.5rem] bg-indigo-500 hover:bg-indigo-400 text-white font-medium focus:shadow-outline focus:outline-none next">
                                    Register
                                </button>

                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="{{ asset('node_modules/nice-select2/dist/js/nice-select2.js') }}"></script>

<script defer src="{{asset('js/customerRegister.js')}}"></script>





