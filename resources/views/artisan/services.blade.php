@extends('main')

@section('title','Services')

@section('content')
    <div id="artisan_services" class="absolute w-full h-full inset-0 bg-gray-700 backdrop-filter bg-opacity-50 backdrop-blur-md z-50 flex items-center justify-center ">
        <div class="w-[60%] h-[65vh] bg-slate-100 rounded-xl py-[2rem] relative">
            <div class="mx-auto flex flex-col gap-[1rem] items-center justify-center mb-[2.5rem]">
                <img class="w-[100px] h-[100px] rounded-full" src="{{asset('images/artisan.png')}}" alt="Artisan Logo">
                <p class="text-green-500 font-medium text-[1.1rem]">Welcome To bricole Me <span class="text-black">{{\Illuminate\Support\Facades\Auth::user()->name}}</span></p>
            </div>

            <div>
                <div class="mb-[3rem]">
                    <p class="text-center font-medium">To complete your registration , please fill services u provide </p>
                </div>
                <div class="flex gap-[75px] justify-center items-center w-[70%] mx-auto" >

                    @foreach($services_of_profession_of_artisan as $service)
                        <div class="flex flex-col gap-[1rem]" id="services_container">
                            <div class="flex flex-wrap justify-center items-center w-11/12 mx-auto select-none gap-2 max-w-[500px]">
                                <label class="text-slate-400">
                                    <input type="checkbox" class="h-[1px] opacity-0 overflow-hidden absolute whitespace-nowrap w-[1px] peer service" data-id="{{$service->skill}}">
                                    <span class="peer-checked:border-orange-100 peer-checked:shadow-blue-500/10 peer-checked:text-green-500 peer-checked:before:border-orange-100 peer-checked:before:bg-orange-100 peer-checked:before:opacity-100 peer-checked:before:scale-100 peer-checked:before:content-['✓'] flex flex-col items-center justify-center w-28 min-h-[7rem] rounded-lg shadow-lg transition-all duration-200 cursor-pointer relative border-slate-300 border-[3px] bg-white before:absolute before:block before:w-5 before:h-5 before:border-[3px]  before:rounded-full before:top-1 before:left-1 before:opacity-0 before:transition-transform before:scale-0 before:text-white before:text-xs before:flex before:items-center before:justify-center hover:border-orange-100 hover:before:scale-100 hover:before:opacity-100"><span class="transition-all duration-300 text-center">{{$service->skill}}</span>
                              </span>
                                </label>
                            </div>

                           <div id="relative_div" class="hidden">
                               <div class="mb-[0.75rem]" >
                                   <div class="flex shadow-sm">
                                       <input
                                           placeholder="Price"
                                           class="py-1 indent-2 max-w-[112px] rounded-s-lg focus:outline-none price_field"
                                           type="text"
                                       />
                                       <button
                                           class="py-1 rounded-e-lg text-white bg-green-400 flex justify-center items-center w-10 h-10 font-medium hover:bg-green-500 add_service"
                                           data-id="{{$service->id}}"

                                       >
                                           add
                                       </button>
                                   </div>

                               </div>

                               <div>
                                   <p class="text-center text-gray-600 font-medium text-[0.85rem]"> < <span id="max_price">{{$service->max_price}}</span> DH </p>
                               </div>
                               <div>
                                   <p class="text-center text-red-500 font-medium text-[0.9rem] error mt-[0.85rem]" id="error"></p>
                               </div>
                            </div>


                        </div>
                    @endforeach
                        <div class="w-full absolute bottom-[2.5rem] flex gap-[15px] justify-center" id="services_of_artisan">

                        </div>
                </div>
                <div class="w-full absolute bottom-[2.5rem] flex gap-[50px] px-[2.5rem] justify-end items-center">
                    <p id="emptyError" class="text-red-500 font-medium"></p>
                    <button id="doneBtn" class="bg-green-400 font-medium text-white px-[0.75rem] py-[0.4rem] rounded-lg hover:bg-green-500">Done</button>
                </div>
            </div>
        </div>
    </div>



@endsection

<script defer>
    let BASE_URL = "{{ url('/') }}";
</script>

<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="{{asset('js/services.js')}}"></script>
