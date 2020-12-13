<ul class="mt-4 text-lg list-none min-w-1/3 space-y-2">
    <li class="flex items-center space-x-4">
        @include('_icons.email')
        <span>{{$page->email}}</span>
    </li>
    <li class="flex items-center space-x-4">
        @include('_icons.telephone')
        <span>{{$page->telephone}}</span>
</ul>
