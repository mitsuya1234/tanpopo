<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') |たんぽぽ</title>
<link rel="shortcut icon" href="/images/kusodekalogo.jpg">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/view.css') }}" rel="stylesheet">

    <link href="{{ asset('css/jTender.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
	<x-header></x-header>
	<main class="py-4">
		@yield('content')
	</main>
	</div>

	@yield('js')

</body>
</html>
