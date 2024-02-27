<!-- Start Navbar -->
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <div class="block sm:hidden">
                <img src="assets/images/logo-icon-40.png" class="h-10 inline-block dark:hidden" alt="">
                <img src="assets/images/logo-icon-40-white.png" class="h-10 hidden dark:inline-block" alt="">
            </div>
            <div class="sm:block hidden">
                <img src="assets/images/logo-dark.png" class="h-[24px] inline-block dark:hidden" alt="">
                <img src="assets/images/logo-white.png" class="h-[24px] hidden dark:inline-block" alt="">
            </div>
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline-block mb-0">
                <div class="relative top-[3px]">
                    <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                    <input type="text"
                        class="form-input h-9 pe-10 rounded-3xl sm:w-44 w-36 border-gray-100 dark:border-slate-800 bg-white dark:bg-slate-900"
                        name="s" id="searchItem" placeholder="Search...">
                </div>
            </li>

            <li class="dropdown inline-block relative ps-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                    <span
                        class="btn btn-icon rounded-full bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white"><img
                            src="assets/images/team/01.jpg" class="rounded-full" alt=""></span>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                    onclick="event.stopPropagation();">
                    <ul class="py-2 text-start">
                        <li>
                            <a href="<?php echo e(route('client.index')); ?>"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="user" class="size-4 me-2"></i>Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('edit.artisan')); ?>"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="settings" class="size-4 me-2"></i>Settings</a>
                        </li>
                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                        <li>
                            <a href="lock-screen.html"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="lock" class="size-4 me-2"></i>Lockscreen</a>
                        </li>
                        <li>
                            <a href="login.html"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="log-out" class="size-4 me-2"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </li><!--end dropdown-->
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="index.html" class="sub-menu-item">Hero One</a></li>
                        <li><a href="index-two.html" class="sub-menu-item">Hero Two</a></li>
                        <li><a href="index-three.html" class="sub-menu-item">Hero Three</a></li>
                        <li><a href="index-four.html" class="sub-menu-item">Hero Four</a></li>
                        <li><a href="index-five.html" class="sub-menu-item">Hero Five</a></li>
                        <li><a href="index-six.html" class="sub-menu-item">Hero Six </a></li>
                        <li><a href="index-seven.html" class="sub-menu-item">Hero Seven </a></li>
                        <li><a href="index-eight.html" class="sub-menu-item">Hero Eight</a></li>
                        <li><a href="index-nine.html" class="sub-menu-item">Hero Nine <span
                                    class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Jobs </a><span
                        class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="job-categories.html" class="sub-menu-item">Job Categories</a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Grids </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-grid-one.html" class="sub-menu-item">Job Grid One</a></li>
                                <li><a href="job-grid-two.html" class="sub-menu-item">Job Grid Two</a></li>
                                <li><a href="job-grid-three.html" class="sub-menu-item">Job Grid Three</a></li>
                                <li><a href="job-grid-four.html" class="sub-menu-item">Job Grid Four </a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Lists </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-list-one.html" class="sub-menu-item">Job List One</a></li>
                                <li><a href="job-list-two.html" class="sub-menu-item">Job List Two</a></li>
                                <li><a href="job-list-three.html" class="sub-menu-item">Job List Three</a></li>
                                <li><a href="job-list-four.html" class="sub-menu-item">Job List Four</a></li>
                                <li><a href="job-list-five.html" class="sub-menu-item">Job List Five </a></li>
                                <li><a href="job-list-six.html" class="sub-menu-item">Job List Six </a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Detail </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-detail-one.html" class="sub-menu-item">Job Detail One</a></li>
                                <li><a href="job-detail-two.html" class="sub-menu-item">Job Detail Two</a></li>
                                <li><a href="job-detail-three.html" class="sub-menu-item">Job Detail Three</a></li>
                            </ul>
                        </li>

                        <li><a href="job-apply.html" class="sub-menu-item">Job Apply</a></li>

                        <li><a href="job-post.html" class="sub-menu-item">Job Post </a></li>

                        <li><a href="career.html" class="sub-menu-item">Career </a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                        <li><a href="services.html" class="sub-menu-item">Services</a></li>
                        <li><a href="pricing.html" class="sub-menu-item">Pricing </a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Employers</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="employer-list.html" class="sub-menu-item">Employers</a></li>
                                <li><a href="employer-profile.html" class="sub-menu-item">Employer Profile</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Candidates </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="candidate-list.html" class="sub-menu-item">Candidates</a></li>
                                <li><a href="candidate-profile.html" class="sub-menu-item">Candidate Profile</a></li>
                                <li><a href="candidate-profile-setting.html" class="sub-menu-item">Profile Settings
                                    </a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="helpcenter-overview.html" class="sub-menu-item">Overview</a></li>
                                <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="login.html" class="sub-menu-item"> Login</a></li>
                                <li><a href="signup.html" class="sub-menu-item"> Signup</a></li>
                                <li><a href="reset-password.html" class="sub-menu-item"> Forgot Password</a></li>
                                <li><a href="lock-screen.html" class="sub-menu-item"> Lock Screen</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.html" class="sub-menu-item"> Coming Soon</a></li>
                                <li><a href="maintenance.html" class="sub-menu-item"> Maintenance</a></li>
                                <li><a href="error.html" class="sub-menu-item"> 404!</a></li>
                                <li><a href="thankyou.html" class="sub-menu-item"> Thank you</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
<!--end header-->
<!-- End Navbar -->
<?php /**PATH /var/www/html/resources/views/partials/nav.blade.php ENDPATH**/ ?>