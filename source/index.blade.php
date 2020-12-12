@extends('_layouts.master')

@section('body')
<div class="container p-16 mx-auto">
    <h1 class="mb-4 text-3xl font-semibold leading-relaxed">Hello world!</h1>
    <div class="aspect-w-4 aspect-h-1">
        <iframe 
            src="https://www.youtube.com/embed/dQw4w9WgXcQ"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
</div>
@endsection
