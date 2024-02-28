<x-master>
    <section class="relative lg:mt-24 mt-[74px] pb-16">
        <div class="lg:container container-fluid">
            <div class="profile-banner relative text-transparent">
                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
                <div class="relative shrink-0">
                    <img src="assets/images/hero/bg5.jpg"
                        class="h-64 w-full object-cover lg:rounded-xl shadow dark:shadow-gray-700" id="profile-banner"
                        alt="">
                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                </div>
            </div>

            <div class="md:flex mx-4 -mt-12">
                <div class="md:w-full">
                    <div class="relative flex items-end">
                        <div class="profile-pic text-center">
                            <input id="pro-img" name="profile-image" type="file" class="hidden"
                                onchange="loadFile(event)" />
                            <div>
                                <div class="relative size-28 max-w-[112px] max-h-[112px] mx-auto">
                                    <img src="assets/images/team/01.jpg"
                                        class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800"
                                        id="profile-image" alt="">
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h5 class="text-lg font-semibold">Mr. {{ $client->name }}</h5>
                            <p class="text-slate-400">Web Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end -->

        <div class="container mt-16">
            <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-12">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                        <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                        <form method="POST" action="{{ route('update.artisan', $client->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-4">
                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium"> Name : <span
                                            class="text-red-600">*</span></label>
                                    <input type="text"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-2"
                                        placeholder="Name: {{ $client->name }}" id="firstname" name="name"
                                        required="">
                                </div>
                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium">Your Email : <span
                                            class="text-red-600">*</span></label>
                                    <input type="email"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-2"
                                        placeholder="Email : {{ $client->email }}" name="email" required="">
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium" for="birthday">Date of Birth :</label>
                                    <input type="date" id="birthday"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-2">
                                </div>

                                <div class="lg:col-span-4">
                                    <label class="form-label font-medium">Your City :</label>
                                    <input type="address"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-2"
                                        placeholder="city : {{ $client->city }}" name="city" required="">
                                </div>

                                <div class="lg:col-span-3">
                                    <label class="form-label font-medium">Professions :</label><br>
                                    <input type="checkbox" id="electrician" name="Professions[]" value="electrician">
                                    <label for="electrician">Electrician</label><br>
                                    <input type="checkbox" id="plumber" name="Professions[]" value="plumber">
                                    <label for="plumber">Plumber</label><br>
                                    <input type="checkbox" id="woodmaker" name="Professions[]" value="woodmaker">
                                    <label for="woodmaker">Woodmaker</label><br>
                                    <input type="checkbox" id="construction" name="Professions[]" value="construction">
                                    <label for="construction">Construction</label><br>
                                    <input type="checkbox" id="blacksmith" name="Professions[]" value="blacksmith">
                                    <label for="blacksmith">Blacksmith</label><br>
                                </div>



                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium">Mobile No. :</label>
                                    <input type="number"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-2"
                                        placeholder="Mobile {{ $client->phone_number }}" name="phone_number"
                                        required="">
                                </div>
                                <div class="lg:col-span-6">
                                    <label class="form-label font-medium" for="multiple_files">Upload image:</label>
                                    <input
                                        class="relative form-input border border-slate-100 dark:border-slate-800 file:h-10 file:-mx-3 file:-my-2 file:cursor-pointer file:rounded-none file:border-0 file:px-3 file:text-neutral-700 bg-clip-padding px-3 py-1.5 file:me-3 mt-2"
                                        id="multiple_files" type="file" multiple>
                                </div>
                            </div><!--end grid-->

                            <div class="grid grid-cols-1">
                                <div class="mt-5">
                                    <label class="form-label font-medium">Intro : </label>
                                    <textarea id="comments" class="form-input border border-slate-100 dark:border-slate-800 mt-2 textarea"
                                        placeholder="Demande de modifier Profile par admin :"></textarea>
                                </div>
                            </div><!--end row-->

                            <input type="submit" id="submit" name="submit"
                                class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md mt-5"
                                value="send Changes">
                        </form><!--end form-->
                    </div>
                </div>

                <div class="lg:col-span-12">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                        <h5 class="text-lg font-semibold mb-5 text-red-600">Delete Account :</h5>

                        <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below "Delete"
                            button</p>

                        <a href="#" class="btn bg-red-600 hover:bg-red-700 text-white rounded-md">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
</x-master>
