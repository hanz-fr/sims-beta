<div class="container mx-auto">
    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="bg-slate-700 text-white px-4 py-2 rounded-2xl">
            Open
        </button>
        <div x-cloak x-show="open" class="bg-slate-200 text-black rounded-xl p-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, repudiandae.
        </div>
    </div>
</div>
