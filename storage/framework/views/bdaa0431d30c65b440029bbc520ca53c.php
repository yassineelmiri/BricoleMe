<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- Hero Start -->
    <section
        class="relative table md:pt-60 pt-36 w-full bg-gradient-to-b from-emerald-600/20 dark:from-emerald-600/40 via-emerald-600/10 dark:via-emerald-600/20 to-transparent">
        <div class="container z-1">
            <div class="grid grid-cols-1 text-center relative">
                <h4 class="lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 font-bold">Join our world-class
                    team <br> of creators & dreamers</h4>
                <p class="text-slate-400 text-lg max-w-xl mx-auto">Find Jobs, Employment & Career Opportunities. Some of
                    the companies we've helped recruit excellent applicants over the years.</p>
                <div class="d-flex" id="reserve-form">
                    <div class="md:w-5/6 mx-auto">
                        <div class="lg:col-span-10 mt-8">
                            <div class="bg-white dark:bg-slate-900 border-0 shadow rounded-md p-3">
                                <form action="#">
                                    <div class="registration-form text-dark text-start">
                                        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                            <div class="filter-search-form relative filter-border">
                                                <i class="uil uil-briefcase-alt icons"></i>
                                                <input name="name" type="text" id="job-keyword"
                                                    class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                    placeholder="Search your Keywords">
                                            </div>

                                            <div class="filter-search-form relative filter-border">
                                                <i class="uil uil-map-marker icons"></i>
                                                <select class="form-select" data-trigger name="choices-location"
                                                    id="choices-location" aria-label="Default select example">
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="GM">Gambia</option>
                                                </select>
                                            </div>

                                            <input type="submit" id="search" name="search" style="height: 60px;"
                                                class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white searchbtn submit-btn w-100"
                                                value="Search">
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </form>
                            </div>
                        </div><!--ed col-->
                    </div>
                </div><!--end grid-->

                <div class="mt-4">
                    <span class="text-slate-400"><span class="text-slate-900 dark:text-white">Popular Searches :</span>
                        Designer, Developer, Web, IOS, PHP Senior Engineer</span>
                </div>

                <div class="absolute -top-20 start-1/2 -translate-x-1/2">
                    <div
                        class="size-10 animate-[bounce_2s_infinite] bg-white dark:bg-slate-900 flex items-center justify-center shadow dark:shadow-gray-700 rounded-md">
                        <img src="assets/images/company/facebook-logo.png" class="size-6" alt="">
                    </div>
                </div>

                <div class="absolute top-[40%] start-10">
                    <div
                        class="size-10 animate-[spin_5s_linear_infinite] bg-white dark:bg-slate-900 flex items-center justify-center shadow dark:shadow-gray-700 rounded-md">
                        <img src="assets/images/company/google-logo.png" class="size-6" alt="">
                    </div>
                </div>

                <div class="absolute top-[40%] end-1">
                    <div
                        class="size-10 bg-white dark:bg-slate-900 flex items-center justify-center shadow dark:shadow-gray-700 rounded-md">
                        <img src="assets/images/company/android.png" class="size-6" alt="">
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container">
            <div class="grid grid-cols-1">
                <img src="assets/images/hero/bg6.png" alt="">
            </div>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="relative grid md:grid-cols-3 grid-cols-1 items-center gap-[30px] z-1">
                <div class="counter-box text-center">
                    <h1 class="lg:text-5xl text-4xl font-semibold mb-2 dark:text-white"><span class="counter-value"
                            data-target="1548">1010</span>K+</h1>
                    <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Job Fulfillment</h5>
                </div><!--end counter box-->

                <div class="counter-box text-center">
                    <h1 class="lg:text-5xl text-4xl font-semibold mb-2 dark:text-white"><span class="counter-value"
                            data-target="25">2</span>+</h1>
                    <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Branches</h5>
                </div><!--end counter box-->

                <div class="counter-box text-center">
                    <h1 class="lg:text-5xl text-4xl font-semibold mb-2 dark:text-white"><span class="counter-value"
                            data-target="9">0</span>+</h1>
                    <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Years Experience</h5>
                </div><!--end counter box-->
            </div>
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Les Professions
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal6da5e80131fb91b678e5ca3846db012a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6da5e80131fb91b678e5ca3846db012a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-servises','data' => ['profession' => $profession]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-servises'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['profession' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profession)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6da5e80131fb91b678e5ca3846db012a)): ?>
<?php $attributes = $__attributesOriginal6da5e80131fb91b678e5ca3846db012a; ?>
<?php unset($__attributesOriginal6da5e80131fb91b678e5ca3846db012a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6da5e80131fb91b678e5ca3846db012a)): ?>
<?php $component = $__componentOriginal6da5e80131fb91b678e5ca3846db012a; ?>
<?php unset($__componentOriginal6da5e80131fb91b678e5ca3846db012a); ?>
<?php endif; ?> <!--end content-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container md:mt-24 md:pb-16 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="relative">
                        <div class="relative">
                            <img src="assets/images/about/ab01.jpg"
                                class="lg:w-[400px] w-[280px] rounded-md shadow dark:shadow-gray-700" alt="">
                            <div class="absolute top-0 translate-y-2/4 end-0 text-center">
                                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                    class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-emerald-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                        <div class="absolute md:-end-5 end-0 -bottom-16">
                            <img src="assets/images/about/ab02.jpg"
                                class="lg:w-[280px] w-[200px] border-8 border-white dark:border-slate-900 rounded-md shadow dark:shadow-gray-700"
                                alt="">
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6 mt-14 md:mt-0">
                    <div class="lg:ms-5">
                        <h3 class="mb-6 md:text-[26px] text-2xl md:leading-normal leading-normal font-semibold">
                            Millions of jobs. <br> Find the one that's right for you.</h3>

                        <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get your own
                            personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>

                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i>
                                Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i>
                                Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-emerald-600 text-xl me-2"></i>
                                Create your own skin to match your brand</li>
                        </ul>

                        <div class="mt-6">
                            <a href="contact.html"
                                class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white mt-2 rounded-md"><i
                                    class="uil uil-envelope"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative bg-slate-50 dark:bg-slate-800 md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">LES ARTISAN
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->


            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginald5958dab3f95a83e91da652c0b4eda23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5958dab3f95a83e91da652c0b4eda23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-publication','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-publication'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5958dab3f95a83e91da652c0b4eda23)): ?>
<?php $attributes = $__attributesOriginald5958dab3f95a83e91da652c0b4eda23; ?>
<?php unset($__attributesOriginald5958dab3f95a83e91da652c0b4eda23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5958dab3f95a83e91da652c0b4eda23)): ?>
<?php $component = $__componentOriginald5958dab3f95a83e91da652c0b4eda23; ?>
<?php unset($__componentOriginald5958dab3f95a83e91da652c0b4eda23); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div
                class="group relative overflow-hidden bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 hover:-mt-2 rounded-md transition-all duration-500 h-fit">
                <div class="p-6">
                    <div class="flex items-center">
                        <div
                            class="size-14 min-w-[56px] flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <img src="assets/images/company/google-logo.png" class="size-8" alt="">
                        </div>

                        <div class="ms-3">
                            <a href="job-detail-three.html"
                                class="inline-block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500 me-1">Marketing
                                Director</a>
                            <span class="inline-block text-sm text-slate-400">2 days ago</span>
                            <div>
                                <span
                                    class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Part
                                    Time</span>
                                <span class="text-sm font-medium inline-block me-1">Est. time: <span
                                        class="text-slate-400">1 to 3 months</span></span>
                                <span class="text-sm font-medium inline-block me-1">Hourly: <span
                                        class="text-slate-400">$16 - $20</span></span>
                            </div>
                        </div>
                    </div>

                    <p class="text-slate-400 py-3">Looking for an experienced Web Designer for an our company.</p>

                    <div>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">HTML</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">CSS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SASS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SCSS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Photoshop</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Graphics</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Bootstrap</span>
                    </div>
                </div>

                <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 lg:flex justify-between items-center">
                    <div class="lg:inline-block flex justify-between">
                        <span class="inline-block me-1 font-semibold"><i
                                class="mdi mdi-check-decagram mdi-18px text-blue-500 me-1"></i>Verified</span>
                        <ul class="list-none inline-block me-1 text-yellow-400 space-x-0.5">
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline text-slate-400 font-semibold">4.8</li>
                        </ul>
                        <span class="inline-block me-1 text-slate-400"><i
                                class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>USA</span>
                    </div>

                    <a href="job-apply.html"
                        class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4">Apply
                        Now</a>
                </div>

                <a href="#"
                    class="btn btn-icon rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white absolute top-0 end-0 m-3"><i
                        data-feather="bookmark" class="size-4"></i></a>
            </div><!--end content-->

            <div
                class="group relative overflow-hidden bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 hover:-mt-2 rounded-md transition-all duration-500 h-fit">
                <div class="p-6">
                    <div class="flex items-center">
                        <div
                            class="size-14 min-w-[56px] flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <img src="assets/images/company/android.png" class="size-8" alt="">
                        </div>

                        <div class="ms-3">
                            <a href="job-detail-three.html"
                                class="inline-block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500 me-1">App
                                Developer</a>
                            <span class="inline-block text-sm text-slate-400">2 days ago</span>
                            <div>
                                <span
                                    class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Remote</span>
                                <span class="text-sm font-medium inline-block me-1">Est. time: <span
                                        class="text-slate-400">1 to 3 months</span></span>
                                <span class="text-sm font-medium inline-block me-1">Hourly: <span
                                        class="text-slate-400">$16 - $20</span></span>
                            </div>
                        </div>
                    </div>

                    <p class="text-slate-400 py-3">Looking for an experienced Web Designer for an our company.</p>

                    <div>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">HTML</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">CSS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SASS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SCSS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Photoshop</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Graphics</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Bootstrap</span>
                    </div>
                </div>

                <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 lg:flex justify-between items-center">
                    <div class="lg:inline-block flex justify-between">
                        <span class="inline-block me-1 font-semibold"><i
                                class="mdi mdi-check-decagram mdi-18px text-blue-500 me-1"></i>Verified</span>
                        <ul class="list-none inline-block me-1 text-yellow-400 space-x-0.5">
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline text-slate-400 font-semibold">4.8</li>
                        </ul>
                        <span class="inline-block me-1 text-slate-400"><i
                                class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>China</span>
                    </div>

                    <a href="job-apply.html"
                        class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4">Apply
                        Now</a>
                </div>

                <a href="#"
                    class="btn btn-icon rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white absolute top-0 end-0 m-3"><i
                        data-feather="bookmark" class="size-4"></i></a>
            </div><!--end content-->

            <div
                class="group relative overflow-hidden bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 hover:-mt-2 rounded-md transition-all duration-500 h-fit">
                <div class="p-6">
                    <div class="flex items-center">
                        <div
                            class="size-14 min-w-[56px] flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <img src="assets/images/company/lenovo-logo.png" class="size-8" alt="">
                        </div>

                        <div class="ms-3">
                            <a href="job-detail-three.html"
                                class="inline-block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500 me-1">Product
                                Designer</a>
                            <span class="inline-block text-sm text-slate-400">2 days ago</span>
                            <div>
                                <span
                                    class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">WFH</span>
                                <span class="text-sm font-medium inline-block me-1">Est. time: <span
                                        class="text-slate-400">1 to 3 months</span></span>
                                <span class="text-sm font-medium inline-block me-1">Hourly: <span
                                        class="text-slate-400">$16 - $20</span></span>
                            </div>
                        </div>
                    </div>

                    <p class="text-slate-400 py-3">Looking for an experienced Web Designer for an our company.</p>

                    <div>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">HTML</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">CSS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SASS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SCSS</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Photoshop</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Graphics</span>
                        <span
                            class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Bootstrap</span>
                    </div>
                </div>

                <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 lg:flex justify-between items-center">
                    <div class="lg:inline-block flex justify-between">
                        <span class="inline-block me-1 font-semibold"><i
                                class="mdi mdi-check-decagram mdi-18px text-blue-500 me-1"></i>Verified</span>
                        <ul class="list-none inline-block me-1 text-yellow-400 space-x-0.5">
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline text-slate-400 font-semibold">4.8</li>
                        </ul>
                        <span class="inline-block me-1 text-slate-400"><i
                                class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>Dubai</span>
                    </div>

                    <a href="job-apply.html"
                        class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4">Apply
                        Now</a>
                </div>

                <a href="#"
                    class="btn btn-icon rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white absolute top-0 end-0 m-3"><i
                        data-feather="bookmark" class="size-4"></i></a>
            </div><!--end content-->

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a href="job-grid-two.html"
                    class="btn btn-link text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">See
                    More Jobs <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16 overflow-hidden">
        <div class="container md:pb-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6 md:order-2 order-1">
                    <div class="relative">
                        <div class="relative flex justify-end">
                            <img src="assets/images/about/ab03.jpg"
                                class="lg:w-[400px] w-[280px] rounded-md shadow dark:shadow-gray-700" alt="">
                            <div class="absolute top-0 translate-y-2/4 start-0 text-center">
                                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                    class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-emerald-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                        <div class="absolute md:-start-5 start-0 -bottom-16">
                            <img src="assets/images/about/ab04.jpg"
                                class="lg:w-[280px] w-[200px] border-8 border-white dark:border-slate-900 rounded-md shadow dark:shadow-gray-700"
                                alt="">
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6 mt-14 md:mt-0 md:order-1 order-2">
                    <div class="lg:me-5">
                        <h3 class="mb-6 md:text-[26px] text-2xl md:leading-normal leading-normal font-semibold">Find
                            Best Companies.</h3>

                        <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get your own
                            personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>

                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-8">
                            <div class="p-3 rounded shadow dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800">
                                <div class="flex items-center">
                                    <div
                                        class="size-12 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                        <img src="assets/images/company/spotify.png" class="size-8" alt="">
                                    </div>

                                    <div class="ms-3">
                                        <a href="employer-detail.html"
                                            class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">Spotify</a>
                                        <span class="block text-sm text-emerald-600">5 Vacancy</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3 rounded shadow dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800">
                                <div class="flex items-center">
                                    <div
                                        class="size-12 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                        <img src="assets/images/company/facebook-logo.png" class="size-8"
                                            alt="">
                                    </div>

                                    <div class="ms-3">
                                        <a href="employer-detail.html"
                                            class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">Facebook</a>
                                        <span class="block text-sm text-emerald-600">5 Vacancy</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3 rounded shadow dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800">
                                <div class="flex items-center">
                                    <div
                                        class="size-12 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                        <img src="assets/images/company/google-logo.png" class="size-8"
                                            alt="">
                                    </div>

                                    <div class="ms-3">
                                        <a href="employer-detail.html"
                                            class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">Google</a>
                                        <span class="block text-sm text-emerald-600">5 Vacancy</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3 rounded shadow dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800">
                                <div class="flex items-center">
                                    <div
                                        class="size-12 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                        <img src="assets/images/company/android.png" class="size-8" alt="">
                                    </div>

                                    <div class="ms-3">
                                        <a href="employer-detail.html"
                                            class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">Android</a>
                                        <span class="block text-sm text-emerald-600">5 Vacancy</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3 rounded shadow dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800">
                                <div class="flex items-center">
                                    <div
                                        class="size-12 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                        <img src="assets/images/company/lenovo-logo.png" class="size-8"
                                            alt="">
                                    </div>

                                    <div class="ms-3">
                                        <a href="employer-detail.html"
                                            class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">Lenovo</a>
                                        <span class="block text-sm text-emerald-600">5 Vacancy</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3 rounded shadow dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800">
                                <div class="flex items-center">
                                    <div
                                        class="size-12 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                        <img src="assets/images/company/linkedin.png" class="size-8" alt="">
                                    </div>

                                    <div class="ms-3">
                                        <a href="employer-detail.html"
                                            class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">Linkedin</a>
                                        <span class="block text-sm text-emerald-600">5 Vacancy</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                            <div class="md:col-span-12">
                                <a href="#"
                                    class="btn btn-link text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">See
                                    More Companies <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div><!--end grid-->
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Here's why
                    you'll love it Jobstack</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div
                    class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-phone text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">24/7
                            Support</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read
                            More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-atom text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Tech &
                            Startup Jobs</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read
                            More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-user-arrows text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Quick &
                            Easy</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read
                            More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div
                    class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div
                        class="size-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-hourglass text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Save
                            Time</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read
                            More <i class="uil uil-arrow-right"></i></a>
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
                                    <h3 class="text-2xl font-semibold text-black dark:text-white mb-4">Explore a job
                                        now!</h3>
                                    <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get
                                        your own personalized salary estimate. Read reviews on over 30000+ companies
                                        worldwide.</p>
                                </div>
                            </div><!--end col-->

                            <div class="lg:col-span-4 md:col-span-5">
                                <div class="text-end relative z-1">
                                    <a href="employer-detail.html"
                                        class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Apply
                                        Now</a>
                                    <a href="aboutus.html"
                                        class="btn bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-2">Learn
                                        More</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->

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
    <!-- End -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9881aee3032510140a884de503784c66)): ?>
<?php $attributes = $__attributesOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__attributesOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9881aee3032510140a884de503784c66)): ?>
<?php $component = $__componentOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__componentOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/artisan/index.blade.php ENDPATH**/ ?>