<div class="flex items-center justify-between print:table-cell space-x-6">
    <div
        style="-webkit-background-clip: padding-box;"
        class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-r from-indigo-500 to-teal-400"
        >
        <div class="w-12 h-12 bg-gray-100 rounded-full"></div>
    </div>
    <div>
        <h1 class="text-xl font-bold leading-normal">
            {{$page->author}}
        </h1>
        <h2 
            style="-webkit-background-clip: text;-webkit-text-fill-color: transparent;"
            class="text-lg font-bold leading-normal tracking-wide bg-gradient-to-r from-teal-400 to-indigo-500">
            {{$page->jobTitle}}
        </h2>
    </div>
</div>
