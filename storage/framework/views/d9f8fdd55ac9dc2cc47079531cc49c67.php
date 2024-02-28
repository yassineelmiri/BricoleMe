<?php $__env->startSection('title','Artisan Registration'); ?>

<?php if(!empty($social_provider_id)): ?>
    <?php $__env->startSection('content'); ?>
        <div class="w-[100vw] h-[100vh] flex mx-auto justify-center items-center flex-col gap-[1rem]" id="register_page_one">
            <?php if (isset($component)) { $__componentOriginal47a245a75a96c9babd2268219857781d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal47a245a75a96c9babd2268219857781d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.errors','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal47a245a75a96c9babd2268219857781d)): ?>
<?php $attributes = $__attributesOriginal47a245a75a96c9babd2268219857781d; ?>
<?php unset($__attributesOriginal47a245a75a96c9babd2268219857781d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal47a245a75a96c9babd2268219857781d)): ?>
<?php $component = $__componentOriginal47a245a75a96c9babd2268219857781d; ?>
<?php unset($__componentOriginal47a245a75a96c9babd2268219857781d); ?>
<?php endif; ?>

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
                                <input type="hidden" id="social_provider_id" value="<?php echo e($social_provider_id); ?>"/>
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent"
                                    type="text" placeholder="Username"
                                    id= "username"
                                    name="username"
                                    value="<?php echo e($name); ?>"

                                />

                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                    type="text" placeholder="Email"
                                    id= "email"
                                    name="email"
                                    value="<?php echo e($email); ?>"
                                    readonly
                                />

                                <select id="profession" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5">
                                    <option class="font-medium text-gray-500" value="">Choose Your Profession</option>
                                    <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option class="font-medium text-gray-600" value="<?php echo e($profession->id); ?>"><?php echo e($profession->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>

                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                    type="text" placeholder="Phone Number"
                                    id= "phone"
                                    name="phone_number"
                                />

                                <select id="city" class=" mb-[1.5rem] w-full px-8 h-[40px] bg-gray-100 border border-gray-200  rounded-lg font-medium bg-gray-100 placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="">Select Your City</option>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city); ?>"><?php echo e($city); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                            <footer class="flex justify-end px-8 pb-8 pt-4 gap-[10px]">
                                <button  class="rounded-lg px-3 py-1 bg-indigo-500 hover:bg-indigo-400 text-white font-medium focus:shadow-outline focus:outline-none next lg:mt-[3rem]">
                                    Next
                                </button>

                            </footer>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="w-[100vw] h-[100vh] flex mx-auto flex-col gap-[1rem] justify-center items-center hidden" id="register_page_two">
            <div id="validation_msg" class="relative w-[30%] flex justify-center items-center rounded-lg h-[50px] bg-green-500 text-white font-medium hidden">
                <p>Registration made successfully ! Please Log In </p>
            </div>
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

                                <div id="imagesContainer" class=" flex flex-wrap gap-[30px]">

                                </div>

                            </section>

                            <footer class="flex justify-end px-8 pb-8 pt-4 gap-[10px]">
                                <button id="back_btn" class="ml-3 rounded-lg bg-gray-400 text-white px-3 py-1 font-medium hover:bg-gray-500 focus:shadow-outline focus:outline-none">
                                    Back
                                </button>
                                <button id="register_btn" class="rounded-lg px-3 py-1 bg-indigo-500 hover:bg-indigo-400 text-white font-medium focus:shadow-outline focus:outline-none">
                                    Register
                                </button>

                            </footer>
                        </article>
                    </main>
                </div>

            </section>
        </div>





    <?php $__env->stopSection(); ?>

<?php else: ?>
    <?php echo e(abort(419,'Your Session has expired, Restart the registration process !')); ?>

<?php endif; ?>

<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="<?php echo e(asset('node_modules/nice-select2/dist/js/nice-select2.js')); ?>"></script>
<script defer src="<?php echo e(asset('js/social-register.js')); ?>"></script>





<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/social/social-artisan.blade.php ENDPATH**/ ?>