<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/jobstack/layouts/candidate-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2024 23:23:50 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Jobstack - Job Portal Tailwind CSS Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Job Listing Landing Template" name="description">
        <meta content="Job, CV, Career, Resume, Job Portal, Create Job, Post job, tailwind Css" name="keywords">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.4.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">

    </head>
    
    <body class="dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <div class="block sm:hidden">
                        <img src="assets/images/logo-icon-40.png" class="h-10 inline-block dark:hidden"  alt="">
                        <img src="assets/images/logo-icon-40-white.png" class="h-10 hidden dark:inline-block"  alt="">
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
                            <input type="text" class="form-input h-9 pe-10 rounded-3xl sm:w-44 w-36 border-gray-100 dark:border-slate-800 bg-white dark:bg-slate-900" name="s" id="searchItem" placeholder="Search...">
                        </div>
                    </li>            

                    <li class="dropdown inline-block relative ps-1">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="btn btn-icon rounded-full bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white"><img src="assets/images/team/01.jpg" class="rounded-full" alt=""></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                <li>
                                    <a href="candidate-profile.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="user" class="size-4 me-2"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="candidate-profile-setting.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="settings" class="size-4 me-2"></i>Settings</a>
                                </li>
                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                <li>
                                    <a href="lock-screen.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="lock" class="size-4 me-2"></i>Lockscreen</a>
                                </li>
                                <li>
                                    <a href="login.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="log-out" class="size-4 me-2"></i>Logout</a>
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
                                <li><a href="index-nine.html" class="sub-menu-item">Hero Nine  <span class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Jobs </a><span class="menu-arrow"></span>
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
                                        <li><a href="candidate-profile-setting.html" class="sub-menu-item">Profile Settings </a></li>
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

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="login.html" class="sub-menu-item"> Login</a></li>
                                        <li><a href="signup.html" class="sub-menu-item"> Signup</a></li>
                                        <li><a href="reset-password.html" class="sub-menu-item"> Forgot Password</a></li>
                                        <li><a href="lock-screen.html" class="sub-menu-item"> Lock Screen</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
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
        </nav><!--end header-->
        <!-- End Navbar -->

        <section class="relative lg:mt-24 mt-[74px]">
            <div class="lg:container container-fluid">
                <div class="relative shrink-0">
                    <img src="assets/images/hero/bg5.jpg" class="h-64 w-full object-cover lg:rounded-xl shadow dark:shadow-gray-700" alt="">
                </div>

                <div class="md:flex mx-4 -mt-12">
                    <div class="md:w-full">
                        <div class="relative flex items-end justify-between">
                            <div class="relative flex items-end">
                                <img src="assets/images/team/01.jpg" class="size-28 rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" alt="">
                                <div class="ms-4">
                                    <h5 class="text-lg font-semibold">Mr. Calvin carlo</h5>
                                    <p class="text-slate-400">Web Designer</p>
                                </div>
                            </div>
    
                            <div class="">
                                <a href="candidate-profile-setting.html" class="btn btn-icon rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white"><i data-feather="settings" class="size-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end -->
        </section>
        <!-- End Hero -->
        
        <!-- Start -->
        <section class="relative mt-12 md:pb-24 pb-16">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    <div class="lg:col-span-8 md:col-span-7">
                        <h5 class="text-xl font-semibold">Calvin Carlo</h5>
                        <p class="text-slate-400 mt-4">Obviously I'M Web Developer. Web Developer with over 3 years of experience. Experienced with all stages of the development cycle for dynamic web projects. The as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <p class="text-slate-400 mt-4">Data Structures and Algorithms are the heart of programming. Initially most of the developers do not realize its importance but when you will start your career in software development, you will find your code is either taking too much time or taking too much space.</p>
                        
                        <h4 class="mt-6 text-xl font-semibold">Skills :</h4>
                        <div class="grid lg:grid-cols-2 grid-cols-1 mt-6 gap-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">WordPress</span>
                                    <span class="text-slate-400">84%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-emerald-600 h-[6px] rounded-full" style="width: 84%"></div>
                                </div>
                            </div>
    
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">JavaScript</span>
                                    <span class="text-slate-400">79%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-emerald-600 h-[6px] rounded-full" style="width: 79%"></div>
                                </div>
                            </div>
    
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">HTML</span>
                                    <span class="text-slate-400">95%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-emerald-600 h-[6px] rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
    
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Figma</span>
                                    <span class="text-slate-400">85%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-emerald-600 h-[6px] rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
    
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Photoshop</span>
                                    <span class="text-slate-400">70%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-emerald-600 h-[6px] rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
    
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Illustration</span>
                                    <span class="text-slate-400">65%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-emerald-600 h-[6px] rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>

                        <h4 class="mt-6 text-xl font-semibold">Experience :</h4>

                        <div class="flex mt-6">
                            <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                                <img src="assets/images/company/shree-logo.png" class="size-16 mx-auto mb-2 block" alt=""> 2019-22
                            </div>

                            <div class="ms-4">
                                <h5 class="text-lg font-medium mb-0">Full Stack Developer</h5>
                                <span class="text-slate-400 company-university">Shreethemes - India</span>
                                <p class="text-slate-400 mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                            </div>
                        </div>
                        
                        <div class="flex mt-6">
                            <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                                <img src="assets/images/company/circle-logo.png" class="size-16 mx-auto mb-2 block" alt=""> 2017-19
                            </div>

                            <div class="ms-4">
                                <h5 class="text-lg font-medium mb-0">Back-end Developer</h5>
                                <span class="text-slate-400 company-university">CircleCI - U.S.A.</span>
                                <p class="text-slate-400 mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                            </div>
                        </div>

                        <div class="rounded-md shadow dark:shadow-gray-700 p-6 mt-6">
                            <h5 class="text-xl font-semibold">Contact Me:</h5>

                            <form method="post" name="myForm" id="myForm" class="mt-4" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid grid-cols-12 gap-2">
                                    <div class="md:col-span-6 col-span-12">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <input name="name" id="name" type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2" placeholder="Name :">
                                    </div>
    
                                    <div class="md:col-span-6 col-span-12">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <input name="email" id="email" type="email" class="form-input border border-slate-100 dark:border-slate-800 mt-2" placeholder="Email :">
                                    </div>

                                    <div class="col-span-12">
                                        <label for="subject" class="font-semibold">Your Question:</label>
                                        <input name="subject" id="subject" class="form-input border border-slate-100 dark:border-slate-800 mt-2" placeholder="Subject :">
                                    </div>

                                    <div class="col-span-12">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <textarea name="comments" id="comments" class="form-input border border-slate-100 dark:border-slate-800 mt-2 textarea" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md">Send Message</button>
                            </form>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-4 md:col-span-5">
                        <div class="bg-slate-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 p-6 sticky top-20">
                            <h5 class="text-lg font-semibold">Personal Detail:</h5>
                            <ul class="list-none mt-4">
                                <li class="flex justify-between mt-3 items-center font-medium">
                                    <span><i data-feather="mail" class="size-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Email  :</span></span>
                                    
                                    <span>thomas@mail.com</span>
                                </li>
                                <li class="flex justify-between mt-3 items-center font-medium">
                                    <span><i data-feather="gift" class="size-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">D.O.B. :</span></span>
                                    
                                    <span>31st Dec, 1996</span>
                                </li>
                                <li class="flex justify-between mt-3 items-center font-medium">
                                    <span><i data-feather="home" class="size-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Address :</span></span>
                                    
                                    <span>15 Razy street</span>
                                </li>
                                <li class="flex justify-between mt-3 items-center font-medium">
                                    <span><i data-feather="map-pin" class="size-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">City :</span></span>
                                    
                                    <span>London</span>
                                </li>
                                <li class="flex justify-between mt-3 items-center font-medium">
                                    <span><i data-feather="globe" class="size-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Country :</span></span>
                                    
                                    <span>UK</span>
                                </li>
                                <li class="flex justify-between mt-3 items-center font-medium">
                                    <span><i data-feather="server" class="size-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Postal Code :</span></span>
                                    
                                    <span>521452</span>
                                </li>
                                <li class="flex justify-between mt-3 items-center font-medium">
                                    <span><i data-feather="phone" class="size-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Mobile :</span></span>
                                    
                                    <span>(+125) 1542-8452</span>
                                </li>

                                <li class="flex justify-between mt-3">
                                    <span class="text-slate-400 font-medium">Social:</span>

                                    <ul class="list-none text-end space-x-0.5">
                                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                        <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i class="uil uil-behance" title="Behance"></i></a></li>
                                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                        <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                        <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                    </ul><!--end icon-->
                                </li>

                                <li class="mt-3 w-full bg-white p-3 rounded-md shadow dark:shadow-gray-700">
                                    <div class="flex items-center mb-3">
                                        <i data-feather="file-text" class="size-8 text-slate-400"></i>
                                        <span class="font-medium ms-2">calvin-carlo-resume.pdf</span>
                                    </div>

                                    <a href="assets/images/calvin-carlo-resume.pdf" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md w-full" download><i class="uil uil-file-download-alt"></i> Download CV</a>
                                </li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Related Candidates</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[30px] mt-8">
                    <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow dark:shadow-gray-700 text-center p-6">
                        <img src="assets/images/team/01.jpg" class="size-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                        
                        <div class="mt-2">
                            <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Steven Townsend</a>
                            <p class="text-sm text-slate-400">Web Designer</p>
                        </div>

                        <ul class="mt-2 list-none">
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Design</span></li>
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">UI</span></li>
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Digital</span></li>
                        </ul>

                        <div class="flex justify-between mt-2">
                            <div class="block">
                                <span class="text-slate-400">Salery:</span>
                                <span class="block text-sm font-semibold">$4k - $4.5k</span>
                            </div>
                            <div class="block">
                                <span class="text-slate-400">Experience:</span>
                                <span class="block text-sm font-semibold">2 Years</span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="candidate-detail.html" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Profile</a>
                            <a href="#" class="btn btn-sm btn-icon bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-full ms-1"><i class="uil uil-hipchat text-[20px]"></i></a>
                        </div>

                        <span class="w-24 bg-yellow-400 text-white text-center absolute ltr:-rotate-45 rtl:rotate-45 -start-[30px] top-1"><i class="uil uil-star"></i></span>

                        <span class="absolute top-[10px] end-4">
                            <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                        </span>
                    </div><!--end content-->
                    
                    <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow dark:shadow-gray-700 text-center p-6">
                        <img src="assets/images/team/02.jpg" class="size-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                        
                        <div class="mt-2">
                            <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Tiffany Betancourt</a>
                            <p class="text-sm text-slate-400">Web Designer</p>
                        </div>

                        <ul class="mt-2 list-none">
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Design</span></li>
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">UI</span></li>
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Digital</span></li>
                        </ul>

                        <div class="flex justify-between mt-2">
                            <div class="block">
                                <span class="text-slate-400">Salery:</span>
                                <span class="block text-sm font-semibold">$4k - $4.5k</span>
                            </div>
                            <div class="block">
                                <span class="text-slate-400">Experience:</span>
                                <span class="block text-sm font-semibold">2 Years</span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="candidate-detail.html" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Profile</a>
                            <a href="#" class="btn btn-sm btn-icon bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-full ms-1"><i class="uil uil-hipchat text-[20px]"></i></a>
                        </div>
                        
                        <span class="absolute top-[10px] end-4">
                            <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                        </span>
                    </div><!--end content-->
                    
                    <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow dark:shadow-gray-700 text-center p-6">
                        <img src="assets/images/team/03.jpg" class="size-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                        
                        <div class="mt-2">
                            <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Jacqueline Burns</a>
                            <p class="text-sm text-slate-400">Web Designer</p>
                        </div>

                        <ul class="mt-2 list-none">
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Design</span></li>
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">UI</span></li>
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Digital</span></li>
                        </ul>

                        <div class="flex justify-between mt-2">
                            <div class="block">
                                <span class="text-slate-400">Salery:</span>
                                <span class="block text-sm font-semibold">$4k - $4.5k</span>
                            </div>
                            <div class="block">
                                <span class="text-slate-400">Experience:</span>
                                <span class="block text-sm font-semibold">2 Years</span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="candidate-detail.html" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Profile</a>
                            <a href="#" class="btn btn-sm btn-icon bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-full ms-1"><i class="uil uil-hipchat text-[20px]"></i></a>
                        </div>
                        
                        <span class="absolute top-[10px] end-4">
                            <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                        </span>
                    </div><!--end content-->
                    
                    <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow dark:shadow-gray-700 text-center p-6">
                        <img src="assets/images/team/04.jpg" class="size-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                        
                        <div class="mt-2">
                            <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                            <p class="text-sm text-slate-400">Web Designer</p>
                        </div>

                        <ul class="mt-2 list-none">
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Design</span></li>
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">UI</span></li>
                            <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Digital</span></li>
                        </ul>

                        <div class="flex justify-between mt-2">
                            <div class="block">
                                <span class="text-slate-400">Salery:</span>
                                <span class="block text-sm font-semibold">$4k - $4.5k</span>
                            </div>
                            <div class="block">
                                <span class="text-slate-400">Experience:</span>
                                <span class="block text-sm font-semibold">2 Years</span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="candidate-detail.html" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Profile</a>
                            <a href="#" class="btn btn-sm btn-icon bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-full ms-1"><i class="uil uil-hipchat text-[20px]"></i></a>
                        </div>
                        
                        <span class="absolute top-[10px] end-4">
                            <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                        </span>
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
                                        <h3 class="text-2xl font-semibold text-black dark:text-white mb-4">Explore a job now!</h3>
                                        <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                                    </div>
                                </div>
            
                                <div class="lg:col-span-4 md:col-span-5">
                                    <div class="text-end relative z-1">
                                        <a href="employer-detail.html" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Apply Now</a>
                                        <a href="aboutus.html" class="btn bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-2">Learn More</a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="absolute -top-5 -start-5">
                                <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45"></div>
                            </div>
            
                            <div class="absolute -bottom-5 -end-5">
                                <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                            </div>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Start -->

        <!-- Start Footer -->
        <footer class="relative bg-slate-900 dark:bg-slate-800">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative py-12">
                        <!-- Subscribe -->
                        <div class="relative w-full">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="md:col-span-3">
                                    <a href="#" class="flex justify-center md:justify-start focus:outline-none">
                                        <img src="assets/images/logo-light.png" class="" alt="">
                                    </a>
                                </div><!--end col-->
                        
                                <div class="md:col-span-9">
                                    <ul class="list-disc footer-list md:text-end text-center space-x-3">
                                        <li class="inline-block"><a href="index.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Home</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="services.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">How it works</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Create a job</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="aboutus.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">About us</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="contact.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Contact us</a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                        <!-- Subscribe -->
                    </div>
                </div>
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
                <div class="container text-center">
                    <div class="grid md:grid-cols-2 items-center gap-6">
                        <div class="md:text-start text-center">
                            <p class="mb-0 text-gray-300 font-medium">© <script>document.write(new Date().getFullYear())</script> Jobstack. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="list-none md:text-end text-center space-x-0.5">
                            <li class="inline"><a href="https://1.envato.market/jobstack" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                            <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                            <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-behance" title="Behance"></i></a></li>
                            <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- End Footer -->
        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>

        <div class="fixed top-1/2 -right-11 z-50 hidden sm:block">
            <a href="https://1.envato.market/jobstack" target="_blank" class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold"><i class="mdi mdi-cart-outline me-1"></i> Download</a>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -left-3 z-50">
            <a href="#" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code --> 

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-emerald-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>

<!-- Mirrored from shreethemes.in/jobstack/layouts/candidate-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2024 23:23:56 GMT -->
</html>