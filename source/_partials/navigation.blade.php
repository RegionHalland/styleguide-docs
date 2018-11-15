<nav>
	@foreach ($page->navigation as $sectionName => $sectionItems)
	<div class="mb-4 border-b pb-4 border-grey-lighter">
		<p class="text-xs font-bold uppercase mb-1">{{ $sectionName }}</p>
		<ul class="list-reset">
		@foreach ($sectionItems as $name => $slugOrChildren)
		@if (is_string($slugOrChildren))
			<li>
				<a class="text-base text-blue-dark no-underline hover:underline" href="{{ $page->baseUrl }}/docs/{{ $slugOrChildren }}">{{ $name }}</a>
			</li>
		  	@else
			<li class="mb-3 lg:mb-2">
				<a class="text-base" href="{{ $page->baseUrl }}/docs/{{ $slugOrChildren->first() }}" class="hover:underline block mb-3 lg:mb-2 {{ $page->anyChildrenActive($slugOrChildren) ? 'text-teal-dark font-semibold' : 'text-grey-darkest' }}">{{ $name }}</a>
				<ul class="list-reset">
				@foreach ($slugOrChildren as $title => $link)
					<li class="mb-3 lg:mb-2">
						<a class="text-base href="{{ $page->baseUrl }}/docs/{{ $link }}">{{ $title }}</a>
					</li>
				@endforeach
				</ul>
			</li>
		@endif
		@endforeach
		</ul>
	</div>
	@endforeach
</nav>