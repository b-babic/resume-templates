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
    <article class="p-8">
        @include('_partials.first.about')
        @include('_partials.first.work')
    </article>
</section>
@endsection
