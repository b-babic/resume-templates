<ul class="mt-2 list-none space-y-2">
    <li class="flex items-center space-x-4">
        @include('_icons.github-inverted')
        <a href="{{$page->githubUrl}}">{{$page->githubHandle}}</a>
    </li>
    <li class="flex items-center space-x-4">
        @include('_icons.linkedin-inverted')
        <a href="{{$page->linkedinUrl}}">{{$page->linkedinHandle}}</a>
    </li>
</ul>
