<div
    class="group px-3 py-10 rounded-full shadow dark:shadow-gray-700 hover:shadow-emerald-600/10 dark:hover:shadow-emerald-600/10 text-center bg-white dark:bg-slate-900 hover:bg-emerald-600/5 dark:hover:bg-emerald-600/5 transition duration-500">
    <div
        class="size-16 bg-emerald-600/5 group-hover:bg-emerald-600 text-emerald-600 group-hover:text-white rounded-full text-2xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 transition duration-500 mx-auto">
        <i class="uil uil-lightbulb-alt"></i>
    </div>

    <div class="content mt-6">
        <a href="{{ route('show.profession') }}" class="title text-lg font-semibold hover:text-emerald-600">Job <br>{{$profession->name}}</a>
        <p class="text-slate-400 mt-3">#{{$profession->id}}</p>
    </div>
</div>
