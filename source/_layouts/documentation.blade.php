@extends('_layouts.master')

@section('body')

{{-- TOPNAV --}}
<div class="flex bg-white border-b border-grey-lighter fixed pin-t pin-x z-50 py-2">
	<div class="w-full container relative mx-auto px-4">
		<div class="flex items-center -mx-4">
			<div class="w-full px-4">
				@include('_partials.logo')
			</div>
			<div id="sidebar-open" class="flex px-4 items-center lg:hidden">
				<svg class="fill-current w-4 h-4 cursor-pointer text-grey" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</div>

			<div id="sidebar-close" class="hidden px-4 items-center lg:hidden">
			  <svg class="fill-current w-4 h-4 cursor-pointer text-grey" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
			</div>
		</div>
	</div>
</div>
{{-- TOPNAV END --}}

<div class="w-full container mx-auto px-4">
	<div class="lg:flex -mx-4">

		{{-- Side nav --}}
		<div id="sidebar" class="hidden px-4 absolute z-10 mt-24 bg-white w-full border-b lg:-mb-0 lg:static lg:bg-transparent lg:border-b-0 lg:pt-0 lg:w-3/12 lg:block lg:border-0 xl:w-3/12">
			<div class="lg:block lg:relative lg:sticky">
				@include('_partials.navigation')
			</div>
		</div>
		{{-- /Side nav --}}		

		{{-- Main content area --}}
		<div class="pt-24 pb-8 lg:pt-28 w-full md:w-9/12">
			<div class="markdown mb-6 px-4 max-w-lg mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 xl:w-3/4">
				<h1>{{ $page->title }}</h1>
				<p class="text-lg text-grey-dark">{{ $page->description }}</p>
			</div>
			<div class="flex">
				<div class="markdown px-4 xl:px-12 w-full max-w-lg mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:w-3/4">
					@yield('content')
				</div>
			</div>
		  </div>
		  {{-- Main content area --}}

	</div>
</div>
@endsection