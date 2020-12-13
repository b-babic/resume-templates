@extends('_layouts.master')

@section('resume')
<section id="first-template" class="w-full h-full text-xl">
    <header class="p-12 text-white bg-gray-800">
        <div class="flex items-start justify-around space-x-24">
            @include('_partials.first.user-role')
            @include('_partials.first.user-info')
            @include('_partials.first.user-social')
        </div>
    </header> 
    <article>
        <div>
            Body yield
        </div>        
    </article>
</section>
@endsection
