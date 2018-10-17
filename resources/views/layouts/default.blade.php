<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="@yield('keywords')">
	<meta name="description" content="@yield('description')">
	<title>@yield('title', 'Default title')</title>

	@yield('head')
</head>
<body>
	<div id="app">
		@yield('content')
	</div>

	@yield('script')

	@yield('style')
</body>
</html>
