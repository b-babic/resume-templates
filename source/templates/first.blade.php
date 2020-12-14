@extends('_layouts.master')

@section('resume')
<section id="first-template" class="w-full h-full shadow-md">
    <header class="px-6 py-12 text-white bg-gray-800">
        <div class="flex items-center justify-between w-full print:table space-x-6">
            @include('_partials.first.user-role')
            @include('_partials.first.user-info')
            @include('_partials.first.user-social')
        </div>
    </header> 
    <article class="p-12">
        <header class="flex items-center space-x-6 mb-6">
            <div class="flex items-center space-x-4">
                @include('_icons.first-template.profile')
                <h3 
                style="-webkit-background-clip: text;-webkit-text-fill-color: transparent;"
                class="text-xl font-bold leading-normal tracking-wide bg-gradient-to-r from-teal-400 to-indigo-500">
                    Profile
                </h3>
            </div>
            <div class="w-full h-px bg-gradient-to-r from-teal-400 to-indigo-500 rounded-lg"></div>
        </header>
        {!! $about->first() !!}
    </article>
</section>
@endsection
