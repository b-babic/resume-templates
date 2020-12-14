<section class="mb-16">
	<h3 class="flex items-center space-x-6 mb-6">
		<div class="flex items-center space-x-4">
			@include('_icons.first-template.profile')
			<span 
			style="-webkit-background-clip: text;-webkit-text-fill-color: transparent;"
			class="text-xl font-bold leading-normal tracking-wide bg-gradient-to-r from-teal-400 to-indigo-500">
			Profile
			</span>	
		</div>
		<div class="flex-1 h-px bg-gradient-to-r from-teal-400 to-indigo-500 rounded-lg"></div>
	</h3>
	{!! $about->first() !!}
</section>
