<?php $__env->startSection('title','Artisan Registration'); ?>

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
                        <form action="<?php echo e(route('auth.social.customer.register')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div>
                                <input type="hidden" name="social_provider_id" value="<?php echo e($social_provider_id); ?>"/>
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent"
                                    type="text" placeholder="Username"
                                    id= "username"
                                    name="name"
                                    value="<?php echo e($name); ?>"
                                />

                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                    type="text" placeholder="Email"
                                    id= "email"
                                    name="email"
                                    value="<?php echo e($email); ?>"
                                />

                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent mt-5"
                                    type="text" placeholder="Phone Number"
                                    id= "phone"
                                    name="phone_number"
                                />

                                <select id="city" name='city' class=" mb-[1.5rem] w-full px-8 h-[40px] bg-gray-100 border border-gray-200 rounded-lg font-medium bg-gray-100 placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="">Select Your City</option>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city); ?>"><?php echo e($city); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>

<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="https://a343-197-230-250-154.ngrok-free.app/public/node_modules/nice-select2/dist/js/nice-select2.js"></script>

<script defer src="https://a343-197-230-250-154.ngrok-free.appjs/public/customerRegister.js"></script>






<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/social/social-customer.blade.php ENDPATH**/ ?>