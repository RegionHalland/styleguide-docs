@extends('_layouts.master')

@push('headScripts')
<script src="{{ $page->baseUrl . mix('js/prism.js', 'assets/build') }}"></script>
	<script src="{{ $page->baseUrl . mix('js/main.js', 'assets/build') }}"></script>
@endpush

@section('body')

{{-- Top nav --}}
<div class="flex bg-white border-b border-grey-lighter fixed pin-t pin-x z-10 h-16 items-center">
  <div class="w-full max-w-screen-xl relative mx-auto px-6">
    <div class="flex items-center -mx-6">

      <div class="flex flex-grow items-center lg:w-3/4 xl:w-4/5">

        <div id="sidebar-open" class="flex px-6 items-center lg:hidden">
          <svg class="fill-current w-4 h-4 cursor-pointer text-grey" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </div>

        <div id="sidebar-close" class="hidden px-6 items-center lg:hidden">
          <svg class="fill-current w-4 h-4 cursor-pointer text-grey" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
        </div>
      </div>

    </div>
  </div>
</div>
{{-- /Top nav --}}

<div class="w-full container mx-auto px-6">
	<div class="lg:flex -mx-6">

		{{-- Side nav --}}
		<div id="sidebar" class="hidden px-6 lg:px-0 absolute z-0 mt-24 bg-white w-full border-b lg:-mb-0 lg:static lg:bg-transparent lg:border-b-0 lg:pt-0 lg:w-1/4 lg:block lg:border-0 xl:w-1/5">
			<div class="lg:block lg:relative lg:sticky">
				<nav>
			@foreach ($page->navigation as $sectionName => $sectionItems)
				<div>
					<p>{{ $sectionName }}</p>
					<ul>
					@foreach ($sectionItems as $name => $slugOrChildren)
					  @if (is_string($slugOrChildren))
					    <li class="mb-3 lg:mb-2"><a href="{{ $page->baseUrl }}/docs/{{ $slugOrChildren }}">{{ $name }}</a></li>
					  @else
					    <li class="mb-3 lg:mb-2">
					      <a href="{{ $page->baseUrl }}/docs/{{ $slugOrChildren->first() }}" class="hover:underline block mb-3 lg:mb-2 {{ $page->anyChildrenActive($slugOrChildren) ? 'text-teal-dark font-semibold' : 'text-grey-darkest' }}">{{ $name }}</a>
					      <ul>
					      @foreach ($slugOrChildren as $title => $link)
					        <li class="mb-3 lg:mb-2">
					          <a class="hover:underline href="{{ $page->baseUrl }}/docs/{{ $link }}">
					            {{ $title }}
					          </a>
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
	      </div>
	    </div>
	    {{-- /Side nav --}}		

          {{-- Main content area --}}
          <div class="pt-24 pb-8 lg:pt-28 w-full">
            <div class="markdown mb-6 px-6 max-w-lg mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 xl:w-3/4">
              <h1>{{ $page->title }}</h1>
              @if ($page->description)
                <div class="text-xl text-grey-dark mb-4">
                  {{ $page->description }}
                </div>
              @endif
            </div>
            <div class="flex">
              <div class="markdown px-6 xl:px-12 w-full max-w-lg mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:w-3/4">
                @yield('content')
              </div>

              {{-- Table of contents --}}
              <div class="hidden xl:text-sm xl:block xl:w-1/4 xl:px-6">
                <div class="flex flex-col justify-between overflow-y-auto sticky top-16 max-h-(screen-16) pt-12 pb-4 -mt-12">
                  <table-of-contents class="mb-8"></table-of-contents>
                  <div id="ad"></div>
                </div>
              </div>
              {{-- /Table of contents --}}

            </div>
          </div>
          {{-- /Main content area --}}

	</div>
</div>
@endsection