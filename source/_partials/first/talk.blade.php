<section class="mb-16">
	<h3 class="flex items-center mb-6 space-x-6">
		<div class="flex items-center space-x-4">
			@include('_icons.first-template.talks')
			<span 
			style="-webkit-background-clip: text;-webkit-text-fill-color: transparent;"
			class="text-xl font-bold leading-normal tracking-wide bg-gradient-to-r from-teal-400 to-indigo-500">
			Courses, Talks & Workshop I Gave
			</span>	
		</div>
		<div class="flex-1 h-px rounded-lg bg-gradient-to-r from-teal-400 to-indigo-500"></div>
	</h3>

	<div class="flex flex-wrap -mx-4">
		@foreach($talks as $talk)
			<article class="flex-grow-0 w-1/2 px-4 mb-16">
				<header>
					<h3 class="mb-4 text-lg font-bold leading-normal tracking-wide text-blue-500">{{ $talk->title }}</h3>
				</header>
                    
                <div class="flex-1 h-18 mb-2">
                    {!! $page->getExcerpt($talk) !!}
                </div>

                <footer class="mt-auto">
                    <h4 class="text-sm font-semibold leading-loose tracking-normal">
                        - {{ $talk->company_name }}, {{ date('F j, Y', $talk->date) }}
                    </h4>
                </footer>
			</article>
		@endforeach
	</div>
</section>
