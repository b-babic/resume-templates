@foreach($work as $experience)
	<div class="flex">
		<div class="flex w-2/6 flex-col space-y-2">
			<span class="font-bold leading-normal tracking-wide text-sm">
				{{date('F j, Y', $experience->start_date)}} 
				- 
				{{$experience->end_date ? date('F j, Y', $experience->end_date) : 'Current'}}
			</span>
			<span class="leading-normal tracking-wide text-sm">
				{{$experience->company_name}}
			</span>
		</div>

		<div class="relative flex-1">
  		<div class="border-r-2 border-dotted border-teal-500 absolute h-full top-0" style="left: .65rem; top: .5rem;"></div>
			<ul class="list-none">
				<li class="mb-12">
					<div class="flex mb-4">
						<div class="mt-1 rounded-full h-6 w-6 bg-gradient-to-r from-teal-400 to-indigo-500 flex items-center justify-center z-10">
							<div class="w-4 h-4 bg-white rounded-full"></div>
						</div>
						<div 
						class="flex flex-col lex-1 ml-4 font-semibold text-lg text-blue-500">
							{{$experience->role}}
							<span class="text-xs text-gray-600">
								{{$page->yearsOfExperience($experience->start_date, $experience->end_date)}}
							</span>
						</div>
					</div>
					<div class="ml-10">
						{!! $experience !!}
					</div>
				</li>
			</ul>
		</div>
	</div>
@endforeach
