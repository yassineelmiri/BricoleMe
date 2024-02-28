
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
                                Artisan id</th>
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
                                status</th>
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
                    @foreach ($requests as $request)
                    <form action="{{ route('admin.requests.accept', $request->id) }}" method="post">
        @csrf
        @method('PUT')
        <tr>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4 text-left items-center  whitespace-nowrap p-4">
                                <span class="ml-3 font-bold text-white">{{ $request->artisan_id }}</span>
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                <img src="https://demos.creative-tim.com/notus-js/assets/img/bootstrap.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
                                <span class="ml-3 font-bold text-white">{{ $request->artisan->user->name }}</span>
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4 text-left items-center  whitespace-nowrap p-4">
                                <span class="ml-3 font-bold text-white">
                                    @foreach ($request->artisan->professions as $profession)
                                        {{ $profession->name }}
                                    @endforeach
                                </span>
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4 text-left items-center  whitespace-nowrap p-4">
                                <span class="ml-3 font-bold text-white">{{ $request->new_profession }}</span>
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4 text-left items-center  whitespace-nowrap p-4">
                                @if ( $request->status ==='pending')
                                <span class="ml-3 p-1 bg-amber-200 rounded-lg font-bold text-amber-500">{{ $request->status }}</span>
                                @endif
                                @if ( $request->status ==='rejected')
                                <span class="ml-3 p-1 bg-red-200 rounded-lg font-bold text-red-500">{{ $request->status }}</span>
                                @endif
                                @if ( $request->status ==='approved')
                                <span class="ml-3 p-1 bg-green-200 rounded-lg font-bold text-green-500">{{ $request->status }}</span>
                                @endif
                            </td>

                            <!-- Other table cells -->

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <span class="ml-3 font-bold text-white">{{ $request->description }}</span>
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <span class="ml-3 font-bold text-white">{{ $request->created_at }}</span>
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                @if ( $request->status ==='pending')
                                <div class="flex gap-2 items-center">
                                    <button type="submit" class="px-4 font-bold p-2 text-green-500 bg-green-200 rounded-lg hover:bg-amber-300">Accept</button>
                                    <a class="px-4 p-2 font-bold  bg-red-200 text-red-500 rounded-lg hover:bg-amber-300" href="">Reject</a>
                                </div>
                                @endif
                                @if ( $request->status ==='rejected')
                                <div class="flex gap-2 items-center">
                                <span class="ml-3 p-1 bg-red-200  rounded-lg font-bold text-red-500">{{ $request->status }}</span>
                                </div>
                                @endif
                                @if ( $request->status ==='approved')
                                <span class="ml-3 p-1 bg-green-200 rounded-lg font-bold text-green-500">{{ $request->status }}</span>
                                @endif
                            </td>
                        </tr>
                    </form>
                @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
