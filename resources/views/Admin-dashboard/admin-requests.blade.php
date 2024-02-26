
@include('nav')

<section class="ml-50 py-16">
    <div class=" ml-50 mb-12 px-36">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-violet-200 text-white">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                        <h3 class="font-semibold text-lg text-white">Card Tables</h3>
                    </div>
                </div>
            </div>
            <div class="block w-full overflow-x-auto ">
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                        <tr>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">
                                Artisan</th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">
                                profession</th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">
                                changing or adding to</th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">
                                request message  </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">
                                request DATE </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">
                                action</th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                <img src="https://demos.creative-tim.com/notus-js/assets/img/bootstrap.jpg"
                                    class="h-12 w-12 bg-white rounded-full border" alt="...">
                                <span class="ml-3 font-bold text-white"> artisan </span>
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4 text-left items-center  whitespace-nowrap p-4">
                                <span class="ml-3 font-bold text-white"> profession</span>
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <span class="ml-3 font-bold text-white">changing or adding to</span>
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <div class="flex">
                                request message  </div>
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <div class="flex">
                                created at </div>
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <div class="flex gap-2 items-center">
                                    <a class="px-4 py-2 bg-amber-400 rounded-lg hover:bg-amber-300" href="">Accept</a>
                                    <a class="px-4 py-2  bg-amber-400 rounded-lg hover:bg-amber-300" href="">Reject</a>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
