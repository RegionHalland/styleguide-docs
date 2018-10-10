<!DOCTYPE html>
<html lang="en" class="bg-white antialiased">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Styleguide – Region Halland</title>
	<meta name="theme-color" content="#ffffff">
	@yield('meta')
	<link rel="stylesheet" href="{{ $page->baseUrl . mix('css/main.css', 'assets/build') }}">
	<link rel="stylesheet" href="{{ $page->styleguideUrl }}">
	<link rel="stylesheet" href="https://use.typekit.net/vip6kss.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="{{ $page->baseUrl . mix('js/prism.js', 'assets/build') }}"></script>
	<script src="{{ $page->baseUrl . mix('js/main.js', 'assets/build') }}"></script>
</head>
<body data-sidebar-visible="true" class="font-normal text-black leading-normal">

@yield('body')

@stack('scripts')

</body>
</html>