<x-master>
    <!-- Start Hero -->
    <section
        class="relative table w-full py-40 bg-[url('../../assets/images/hero/bg4.html')] bg-center bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-emerald-900/60"></div>
    </section><!--end section-->
    <div class="relative">
        <div
            class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative mb:pb-24 pb-16 -mt-16 z-1">
        <div class="container">
            <div class="grid grid-cols-1">
                <div
                    class="md:flex justify-between items-center shadow dark:shadow-gray-700 rounded-md p-6 bg-white dark:bg-slate-900">
                    <div class="flex items-center">
                        <img src="assets/images/company/skype.png"
                            class="size-20 p-3 shadow dark:shadow-gray-700 rounded-md bg-slate-50 dark:bg-slate-800"
                            alt="">
             
                            <div class="ms-4">
                            <h5 class="text-xl font-bold">{{ Auth::user()->name }}</h5>
                            <h6 class="text-base text-slate-400"><i class="uil uil-map-marker"></i>
                                {{ Auth::user()->city }}, Maroc
                            </h6>
                            <p>: {{ Auth::user()->id }}</p>

                        </div>
                    </div>

                    <div class="md:mt-0 mt-4">
                        <a href="#"
                            class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Follow
                            </a>
                        <a href="#"
                            class="btn btn-sm bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-1">inviter</a>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container mt-12">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-7">
                    <h5 class="text-xl font-semibold">Job : [{{ $Profession->name }}]</h5>
                    <p class="text-slate-400 mt-4">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                        has a more-or-less normal distribution of letters, as opposed.</p>
                    <p class="text-slate-400 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It
                        has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                        the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>

                    <div class="grid grid-cols-12 gap-6 mt-6">
                        <div class="col-span-12">
                            <img src="assets/images/company/1.jpg" class="rounded-md shadow dark:shadow-gray-700"
                                alt="">
                        </div>
                        <div class="col-span-6">
                            <img src="assets/images/company/2.jpg" class="rounded-md shadow dark:shadow-gray-700"
                                alt="">
                        </div>
                        <div class="col-span-6">
                            <img src="assets/images/company/3.jpg" class="rounded-md shadow dark:shadow-gray-700"
                                alt="">
                        </div>
                    </div>

                    <h5 class="text-xl font-semibold mt-6">Les services :</h5>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-6">

                        @foreach ($services as $service)
                            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                                <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
                                    <img src="assets/images/company/circle-logo.png"
                                        class="size-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900"
                                        alt="">
                                    <div class="ms-3">
                                        <h6 class="mb-0 font-semibold text-base">{{ $service->skill }}</h6>
                                        <span class="text-slate-400 text-sm">{{ $service->max_price }} $</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--end content-->
                    </div>

                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-xl font-semibold">Leave A Comment:</h5>

                        <form class="mt-8">
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                            <input name="name" id="name" type="text" class="form-input ps-11"
                                                placeholder="Name :">
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                            <input name="email" id="email" type="email" class="form-input ps-11"
                                                placeholder="Email :">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                            <textarea name="comments" id="comments" class="form-input ps-11 h-28" placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send"
                                class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md w-full">Send
                                Message</button>
                        </form>
                    </div>
                </div><!--end col-->

                <div class="lg:col-span-4 md:col-span-5">
                    <div
                        class="bg-slate-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 p-6 sticky top-20">
                        <div class="w-full leading-[0] border-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                style="border:0" class="w-full h-[350px] rounded-md shadow dark:shadow-gray-700"
                                allowfullscreen></iframe>
                        </div>

                        <ul class="list-none mt-4">
                            <li class="flex justify-between mt-2">
                                <span class="text-slate-400 font-medium">created Profile:</span>
                                <span class="font-medium">{{ Auth::user()->created_at->format('Y') }}</span>
                            </li>

                            <li class="flex justify-between mt-2">
                                <span class="text-slate-400 font-medium">phone number:</span>
                                <span class="font-medium">{{ Auth::user()->phone_number }}</span>
                            </li>

                            <li class="flex justify-between mt-2">
                                <span class="text-slate-400 font-medium">email:</span>
                                <span class="font-medium">{{ Auth::user()->email }}</span>
                            </li>

                            <li class="flex justify-between mt-2">
                                <span class="text-slate-400 font-medium">Number of employees:</span>
                                <span class="font-medium">50</span>
                            </li>

                            <li class="flex justify-between mt-2">
                                <span class="text-slate-400 font-medium">Website:</span>
                                <span class="font-medium">Null</span>
                            </li>

                            <li class="flex justify-between mt-2">
                                <span class="text-slate-400 font-medium">Social:</span>

                                <ul class="list-none text-end space-x-0.5">
                                    <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank"
                                            class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i
                                                class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                    <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank"
                                            class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i
                                                class="uil uil-behance" title="Behance"></i></a></li>
                                    <li class="inline"><a href="http://linkedin.com/company/shreethemes"
                                            target="_blank"
                                            class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i
                                                class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                    <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank"
                                            class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i
                                                class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="inline"><a href="https://www.instagram.com/shreethemes/"
                                            target="_blank"
                                            class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i
                                                class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                    <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank"
                                            class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i
                                                class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                    <li class="inline"><a href="mailto:support@shreethemes.in"
                                            class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i
                                                class="uil uil-envelope align-middle" title="email"></i></a></li>
                                </ul><!--end icon-->
                            </li>
                        </ul>
                      
                        <div class="mt-4 pt-2 border-t dark:border-t-gray-700">
                            <h5 class="text-lg font-semibold">Contact us</h5>

                            <form method="post" action="{{ route('create.reservation') }}" name="myForm"
                                id="myForm" class="mt-4" onsubmit="return validateForm()">
                                @csrf
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid grid-cols-1 gap-2">
                                    <div>
                                        <label for="name2" class="font-semibold">client_id:</label>
                                        <input name="client_id" id="name2" type="text"
                                            class="form-input border border-slate-100 dark:border-slate-800 mt-2">
                                    </div>

                                    <div>
                                        <label for="name2" class="font-semibold">Time:</label>
                                        <input name="timing" id="name2" type="date"
                                            class="form-input border border-slate-100 dark:border-slate-800 mt-2">
                                    </div>

                                    <div>
                                        <label for="email2" class="font-semibold">Description:</label>
                                        <input name="description" id="email2" type="text"
                                            class="form-input border border-slate-100 dark:border-slate-800 mt-2"
                                            placeholder="Email :">
                                    </div>
                                    <label for="services">Select Services:</label><br>
                                    <select id="services" name="service_ids[]" multiple>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->skill }} -
                                                {{ $service->max_price }}</option>
                                        @endforeach
                                    </select>
                                    <br>

                                </div>
                                <button type="submit" id="submit2"
                                    class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md">make
                                    reservation
                                </button>
                            </form>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Related
                    Companies</h3>

                <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Search all the open positions on the
                    web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[30px] mt-8">
                <div class="group relative p-6 rounded-md shadow dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="assets/images/company/circle-logo.png" class="size-8" alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Circle CI</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Pakistan</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="assets/images/company/telegram.png" class="size-8" alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Telegram</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> India</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="assets/images/company/whatsapp.png" class="size-8" alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Whatsapp</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Rush</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->

                <div class="group relative p-6 rounded-md shadow dark:shadow-gray-700 mt-6">
                    <div
                        class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                        <img src="assets/images/company/spotify.png" class="size-8" alt="">
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg hover:text-emerald-600 font-semibold">Spotify</a>
                        <p class="text-slate-400 mt-2">Digital Marketing Solutions for Tomorrow</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> Turkey</span>
                        <span class="block font-semibold text-emerald-600">6 Jobs</span>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container-fluid md:mt-24 mt-16">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative overflow-hidden lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700">
                        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                            <div class="lg:col-span-8 md:col-span-7">
                                <div class="md:text-start text-center relative z-1">
                                    <h3 class="text-2xl font-semibold text-black dark:text-white mb-4">Reclamation de Service!</h3>
                                    <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get
                                        your own personalized salary estimate. Read reviews on over companies
                                        worldwide.</p>
                                </div>
                            </div>

                            <div class="lg:col-span-4 md:col-span-5">
                                <div class="text-end relative z-1">
                                    <a href="employer-detail.html"
                                        class="btn bg-red-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Apply
                                        Now</a>
                                    <a href="aboutus.html"
                                        class="btn bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-2">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -top-5 -start-5">
                            <div
                                class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45">
                            </div>
                        </div>

                        <div class="absolute -bottom-5 -end-5">
                            <div
                                class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90">
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Start -->

</x-master>
