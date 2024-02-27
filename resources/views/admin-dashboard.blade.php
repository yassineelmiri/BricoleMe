
<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-amber-50">
    <div class="flex flex-col h-screen bg-amber-50">


        <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex items-center">
                    <img src="logo.png" alt="Logo" class="ml-6 w-16 h-16 mr-2">
                </div>
            </div>

            <div class="space-x-5">
                <button>
                    <svg class="w-6 h-6 text-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 21">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 3.464V1.1m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C15 15.4 15 16 14.462 16H1.538C1 16 1 15.4 1 14.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 8 3.464ZM4.54 16a3.48 3.48 0 0 0 6.92 0H4.54Z" />
                    </svg>
                </button>
                <button>
                    <svg class="w-6 h-6 mr-6 text-black" aria-hidden="true" viewBox="0 0 20 18"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.5 8C5.80777 8 5.13108 7.79473 4.55551 7.41015C3.97993 7.02556 3.53133 6.47893 3.26642 5.83939C3.00152 5.19985 2.9322 4.49612 3.06725 3.81719C3.2023 3.13825 3.53564 2.51461 4.02513 2.02513C4.51461 1.53564 5.13825 1.2023 5.81719 1.06725C6.49612 0.932205 7.19985 1.00152 7.83939 1.26642C8.47893 1.53133 9.02556 1.97993 9.41015 2.55551C9.79473 3.13108 10 3.80777 10 4.5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.5 17H1V15C1 13.9391 1.42143 12.9217 2.17157 12.1716C2.92172 11.4214 3.93913 11 5 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.5 11H18.38C18.2672 10.5081 18.0714 10.0391 17.801 9.613L18.601 8.818C18.6947 8.72424 18.7474 8.59708 18.7474 8.4645C18.7474 8.33192 18.6947 8.20476 18.601 8.111L17.894 7.404C17.8002 7.31026 17.6731 7.25761 17.5405 7.25761C17.4079 7.25761 17.2808 7.31026 17.187 7.404L16.392 8.204C15.9647 7.93136 15.4939 7.73384 15 7.62V6.5C15 6.36739 14.9473 6.24021 14.8536 6.14645C14.7598 6.05268 14.6326 6 14.5 6H13.5C13.3674 6 13.2402 6.05268 13.1464 6.14645C13.0527 6.24021 13 6.36739 13 6.5V7.62C12.5081 7.73283 12.0391 7.92863 11.613 8.199L10.818 7.404C10.7242 7.31026 10.5971 7.25761 10.4645 7.25761C10.3319 7.25761 10.2048 7.31026 10.111 7.404L9.404 8.111C9.31026 8.20476 9.25761 8.33192 9.25761 8.4645C9.25761 8.59708 9.31026 8.72424 9.404 8.818L10.204 9.618C9.9324 10.0422 9.73492 10.5096 9.62 11H8.5C8.36739 11 8.24021 11.0527 8.14645 11.1464C8.05268 11.2402 8 11.3674 8 11.5V12.5C8 12.6326 8.05268 12.7598 8.14645 12.8536C8.24021 12.9473 8.36739 13 8.5 13H9.62C9.73283 13.4919 9.92863 13.9609 10.199 14.387L9.404 15.182C9.31026 15.2758 9.25761 15.4029 9.25761 15.5355C9.25761 15.6681 9.31026 15.7952 9.404 15.889L10.111 16.596C10.2048 16.6897 10.3319 16.7424 10.4645 16.7424C10.5971 16.7424 10.7242 16.6897 10.818 16.596L11.618 15.796C12.0422 16.0676 12.5096 16.2651 13 16.38V17.5C13 17.6326 13.0527 17.7598 13.1464 17.8536C13.2402 17.9473 13.3674 18 13.5 18H14.5C14.6326 18 14.7598 17.9473 14.8536 17.8536C14.9473 17.7598 15 17.6326 15 17.5V16.38C15.4919 16.2672 15.9609 16.0714 16.387 15.801L17.182 16.601C17.2758 16.6947 17.4029 16.7474 17.5355 16.7474C17.6681 16.7474 17.7952 16.6947 17.889 16.601L18.596 15.894C18.6897 15.8002 18.7424 15.6731 18.7424 15.5405C18.7424 15.4079 18.6897 15.2808 18.596 15.187L17.796 14.392C18.0686 13.9647 18.2662 13.4939 18.38 13H19.5C19.6326 13 19.7598 12.9473 19.8536 12.8536C19.9473 12.7598 20 12.6326 20 12.5V11.5C20 11.3674 19.9473 11.2402 19.8536 11.1464C19.7598 11.0527 19.6326 11 19.5 11ZM14 14.5C13.5055 14.5 13.0222 14.3534 12.6111 14.0787C12.2 13.804 11.8795 13.4135 11.6903 12.9567C11.5011 12.4999 11.4516 11.9972 11.548 11.5123C11.6445 11.0273 11.8826 10.5819 12.2322 10.2322C12.5819 9.8826 13.0273 9.6445 13.5123 9.54804C13.9972 9.45157 14.4999 9.50108 14.9567 9.6903C15.4135 9.87952 15.804 10.2 16.0787 10.6111C16.3534 11.0222 16.5 11.5055 16.5 12C16.5 12.663 16.2366 13.2989 15.7678 13.7678C15.2989 14.2366 14.663 14.5 14 14.5Z"
                            fill="currentColor" />
                    </svg>

                </button>
            </div>
        </div>

        <div class="flex-1 flex flex-wrap">
            <div class="p-2 bg-violet-200 w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
                <nav><a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-indigo-300 hover:text-white "
                        href="index">
                        <i class="fas fa-home mr-2"></i>Statestiques
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-indigo-300 hover:text-white"
                        href="users">
                        <i class="fas fa-users mr-2"></i>Clients
                    </a>

                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-indigo-300 hover:text-white"
                        href="categories">
                        <i class="fas fa-file-alt mr-2"></i>Workers
                    </a>

                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-indigo-300 hover:text-white"
                        href="products">
                        <i class="fas fa-store mr-2"></i>reservations
                    </a>

                </nav>

                <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-indigo-300 hover:text-white mt-auto"
                    href="#">
                    <i class="fas fa-sign-out-alt mr-2"></i>logout
                </a>


            </div>

            <div class="flex-1 p-4 w-full md:w-1/2">

                <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                    <div class="flex-1 bg-violet-200 p-4 shadow rounded-lg md:w-1/2">

                        <h2 class="text-black text-lg font-semibold pb-1">users</h2>
                        <div class="my-1"></div>
                        <div class="bg-indigo-300 h-px mb-6"></div>
                        <div class="flex">
                            <svg class="w-6 h-6 text-gray-800 dark:text-gray" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                            </svg>
                            <span class="py-2 px-8 bg-grey-lightest font-bold uppercase text-l text-grey-light ">

                            </span>
                            <h3
                                class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-grey-light">
                                Active users</h3>
                        </div>
                    </div>

                    <div class="flex-1 bg-violet-200 p-4 shadow rounded-lg md:w-1/2">
                        <h2 class="text-black text-lg font-semibold pb-1">Workers</h2>
                        <div class="my-1"></div>
                        <div class="bg-indigo-300 h-px mb-6"></div>
                        <div class="flex">
                            <svg class="w-6 h-6 text-gray-800 dark:text-gray" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="py-2 px-16 bg-grey-lightest font-bold uppercase text-l text-grey-light ">

                        </span>
                        <h3
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-grey-light">
                            Available workers</h3>
</div>
                    </div>

                    <div class="flex-1 bg-violet-200 p-4 shadow rounded-lg md:w-1/2">
                        <h2 class="text-black text-lg font-semibold pb-1">reservations</h2>
                        <div class="my-1"></div>
                        <div class="bg-indigo-300 h-px mb-6"></div>
                        <div class="flex">
                        <svg class="w-6 h-6 text-gray-800 dark:text-gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 20">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm1-4H5m0 0L3 4m0 0h5.501M3 4l-.792-3H1m11 3h6m-3 3V1"/>
  </svg>
                        <span class="py-2 px-10 bg-grey-lightest font-bold uppercase text-l text-grey-light ">

                        </span>
                        <h3
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-grey-light">
                            Latest reservations</h3>

                    </div></div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
