<aside class="absolute min-h-screen items-stretch bg-gray-50 dark:bg-gray-800" aria-label="Sidebar" id="sidebar" :class="isOpen?'w-72':'w-20'">
    <div class="overflow-y-auto py-4 px-5">
        <ul>
            <li class="flex justify-between my-8">
                <a href="#" class="flex w-fit text-gray-100 text-2xl">
                    <i data-feather="box" class="my-auto"></i>
                    <span class="ml-3 font-mono">SIMS BETA</span>
                </a>
                <button
                    class="my-auto transition-all rounded-md hover:text-teal-300 text-slate-500 hover:border-slate-300 hover:bg-slate-600">
                    <i data-feather="chevrons-left"></i>
                </button>
            </li>
        </ul>
        <ul class="space-y-2">
            <li>
                <a href="#"
                    class="flex transition-all hover:text-teal-300 items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i data-feather="book"></i>
                    <span class="ml-3">Data Induk Siswa</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex transition-all hover:text-teal-300 items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i data-feather="shuffle"></i>
                    <span class="ml-3">Perpindahan Siswa</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex transition-all hover:text-teal-300 items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i data-feather="users"></i>
                    <span class="ml-3">Alumni</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex transition-all hover:text-teal-300 items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i data-feather="book-open"></i>
                    <span class="ml-3">Daftar Ulang</span>
                </a>
            </li>
        </ul>
        <ul
            class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700 absolute inset-x-auto bottom-20 w-3/4">
            <li>
                <a href="#"
                    class="flex hover:text-white transition-all items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-gray-300 hover:bg-red-500">
                    <i data-feather="log-out"></i>
                    <span class="ml-3">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>