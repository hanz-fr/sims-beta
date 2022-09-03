<div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen ">
    <aside class="flex-shrink-0 w-64 flex flex-col transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
      <nav class="flex-1 flex flex-col bg-gray-800 py-4 px-5">
        <ul>
            <li class="flex justify-between my-8">
                <a href="#" class="flex w-fit text-gray-100 text-2xl">
                    <i data-feather="box" class="my-auto"></i>
                    <span class="ml-3 font-mono">SIMS BETA</span>
                </a>
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
      </nav>
    </aside>
    <div class="flex-1">
      <header class="flex items-center p-4 text-semibold text-gray-100 bg-gray-900">
        <button class="my-auto transition-all rounded-md hover:text-teal-300 text-slate-500 hover:border-slate-300 hover:bg-slate-600" @click="sidebarOpen = !sidebarOpen">
            <template x-if="sidebarOpen">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </template>
            <template x-if="!sidebarOpen">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                </div>
            </template>
        </button>
      </header>
      <main class="p-4">
        Main Content
      </main>
      
    </div>
</div>