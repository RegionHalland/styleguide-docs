<!DOCTYPE html>
<html lang="en" class="bg-white antialiased">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ $page->title ? $page->title . ' - Tailwind CSS' : 'Tailwind CSS - A Utility-First CSS Framework for Rapid UI Development' }}</title>
	<meta name="theme-color" content="#ffffff">
	@yield('meta')
	<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
	<link rel="stylesheet" href="{{ $page->production ? 'https://raw.githubusercontent.com/RegionHalland/styleguide/v2/dist/main.css' : 'http://styleguide.test/dist/main.css' }}">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	@stack('headScripts')
</head>
<body data-sidebar-visible="true" class="font-normal text-black leading-normal">

@yield('body')

@stack('scripts')

</body>
</html>