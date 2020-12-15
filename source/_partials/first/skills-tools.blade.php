<section class="mb-16">
	<div class="flex space-x-12">
		<div class="w-1/2">
			<h3 class="flex items-center space-x-4 mb-8">
				<div class="flex items-center space-x-4">
					@include('_icons.first-template.skills')
					<span 
						style="-webkit-background-clip: text;-webkit-text-fill-color: transparent;"
						class="text-xl font-bold leading-normal tracking-wide bg-gradient-to-r from-teal-400 to-indigo-500">
					Main Skills
					</span>	
				</div>
				<div class="flex-1 h-px bg-gradient-to-r from-teal-400 to-indigo-500 rounded-lg"></div>
			</h3>
			
			<ul class="list-none pl-4">
				@foreach($page->skills as $skill)
					<li class="flex space-x-4 items-center mb-4">
						@include('_icons.first-template.list-item')
						<span>{{ $skill }}</span>
					</li>
				@endforeach
			</ul>
		</div><!-- Main Skills -->

		<div class="w-1/2">
			<h3 class="flex items-center space-x-4 mb-6">
				<div class="flex items-center space-x-4">
					@include('_icons.first-template.tools')
					<span 
						style="-webkit-background-clip: text;-webkit-text-fill-color: transparent;"
						class="text-xl font-bold leading-normal tracking-wide bg-gradient-to-r from-teal-400 to-indigo-500">
						Tools & Languages
					</span>	
				</div>
				<div class="flex-1 h-px bg-gradient-to-r from-teal-400 to-indigo-500 rounded-lg"></div>
			</h3>

			<ul class="list-none pl-4">
				@foreach($page->tools as $tool)
					<li class="flex space-x-4 items-center mb-4">
						@include('_icons.first-template.list-item')
						<span>{{ $tool }}</span>
					</li>
				@endforeach
			</ul>
		</div><!-- Tools & Languages -->
	</div>
</section>
