@extends('_layouts.master')

@section('body')
<main>
        <h1 class="text-3xl font-bold leading-normal tracking-wide">Resume templates 🧾</h2>
        <p class="mb-6 text-2xl leading-normal tracking-wide">
            Free, carefully crafted cv options for your next resume.    
        </p>

        <section id="templates">
            @include('_partials.navigation')
        </section>
</main>
@endsection
